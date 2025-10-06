<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class InteractionPanel extends Component
{
    // Renamed properties for clarity, matching the 'Like' model columns
    public $likeableId;
    public $likeableType; 

    public $upVoteCount = 0;
    public $downVoteCount = 0;
    
    // Tracks the current authenticated user's vote status: 'up', 'down', or null
    public $userVoteType = null;

    /**
     * Initializes the component and fetches initial counts and user status.
     */
    public function mount($resourceId, $resourceType)
    {
        // Map the generic inputs to specific likeable properties
        $this->likeableId = $resourceId;
        $this->likeableType = $resourceType;
        
        $this->loadCounts();
        $this->loadUserVote();
    }

    /**
     * Load the current vote counts from the database using SELECT RAW for efficiency.
     */
    protected function loadCounts()
    {
        $counts = Like::where('likeable_type', $this->likeableType)
            ->where('likeable_id', $this->likeableId)
            ->selectRaw('SUM(CASE WHEN type = "up" THEN 1 ELSE 0 END) as up_votes')
            ->selectRaw('SUM(CASE WHEN type = "down" THEN 1 ELSE 0 END) as down_votes')
            ->first();

        $this->upVoteCount = $counts->up_votes ?? 0;
        $this->downVoteCount = $counts->down_votes ?? 0;
    }

    /**
     * Check if the current user has already voted.
     */
    protected function loadUserVote()
    {
        if (Auth::check()) {
            $vote = $this->getExistingVoteQuery(Auth::id())->first();
            $this->userVoteType = $vote ? $vote->type : null;
        }
    }

    /**
     * Creates a reusable Query Builder for finding the current user's vote.
     */
    protected function getExistingVoteQuery($userId)
    {
        return Like::where('user_id', $userId)
            ->where('likeable_type', $this->likeableType)
            ->where('likeable_id', $this->likeableId);
    }

    /**
     * Handles the user clicking 'up' or 'down'.
     * @param string $type 'up' or 'down'
     */
    public function vote($type)
    {
        if (!Auth::check()) {
            session()->flash('message', 'Please log in to cast your vote.');
            return;
        }

        $userId = Auth::id();
        
        // 1. Check for existing vote using the reusable query
        $existingVote = $this->getExistingVoteQuery($userId)->first();

        if ($existingVote) {
            if ($existingVote->type === $type) {
                // 2. Clicked the same type: DELETE (un-vote)
                $existingVote->delete();
                $this->userVoteType = null;
                session()->flash('message', 'Vote removed.');
            } else {
                // 3. Clicked the opposite type: UPDATE (switch vote)
                $existingVote->type = $type;
                $existingVote->save();
                $this->userVoteType = $type;
                session()->flash('message', 'Vote updated.');
            }
        } else {
            // 4. No existing vote: CREATE (new vote)
            Like::create([
                'user_id' => $userId,
                'likeable_id' => $this->likeableId,
                'likeable_type' => $this->likeableType,
                'type' => $type,
            ]);
            $this->userVoteType = $type;
            session()->flash('message', 'Thank you for your vote!');
        }

        // Re-load counts after modification
        $this->loadCounts();
    }

    public function render()
    {
        return view('livewire.interaction-panel');
    }
}
