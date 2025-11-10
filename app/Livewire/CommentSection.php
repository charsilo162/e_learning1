<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;

class CommentSection extends Component
{

    use WithPagination; 
    public $resourceId;
    public $resourceType;

    public $newCommentText = '';
   protected $rules = [
        'newCommentText' => 'required|string|min:3|max:500',
    ];
    public function mount($resourceId, $resourceType)
    {
        $this->resourceId = $resourceId;
        $this->resourceType = $resourceType;
    }
    public function updated($name, $value)
    {
        if (! str($name)->startsWith('page')) {
            $this->resetPage();
        }
    }
    
    public function postComment()
    {
        if (!Auth::check()) {
            session()->flash('message', 'Please log in to post a comment.');
            return;
        }

        $this->validate();

        try {
            Comment::create([
                'user_id' => Auth::id(),
                'commentable_id' => $this->resourceId,
                'commentable_type' => $this->resourceType,
                'body' => $this->newCommentText,
            ]);

            $this->newCommentText = '';
            // 💡 IMPORTANT: Reset to the first page to see the new comment
            $this->resetPage(); 
            session()->flash('message', 'Comment posted successfully!');

        } catch (\Exception $e) {
            session()->flash('message', 'Error posting comment.' . $e->getMessage());
        }
    }

    public function render()
    {
        $comments = Comment::where('commentable_type', $this->resourceType)
            ->where('commentable_id', $this->resourceId)
            ->with('user')
            ->latest()
            ->paginate(5); // ⬅️ PAGINATION APPLIED: 5 comments per page

        return view('livewire.comment-section', [
            'comments' => $comments, // Pass the paginated collection to the view
        ]);
    }
}