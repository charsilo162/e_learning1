<?php

namespace App\Livewire\Video;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MyVideos extends Component
{
    use WithPagination;

    public $search = '';
    public $showEditModal = false;
    public $editVideoId = null;
    public $editTitle = '';
    public $editDuration = '';

    protected $queryString = ['search' => ['except' => '']];
    protected $listeners = ['video-updated' => 'refreshVideos', 'video-deleted' => 'refreshVideos'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function togglePublish($videoId)
    {

       
        $video = Video::findOrFail($videoId);
        // dd(!$video->publish);
        $video->update(['publish' => !$video->publish]);
        $this->dispatch('toast', 'Video ' . ($video->publish ? 'published' : 'unpublished') . '!');
    }

    public function openEditModal($videoId)
    {
        $video = Video::findOrFail($videoId);
        $this->editVideoId = $video->id;
        $this->editTitle = $video->title;
        $this->editDuration = $video->duration;
        $this->showEditModal = true;
        $this->dispatch('open-modal', 'edit-video-modal');
    }

    public function closeEditModal()
    {
        $this->showEditModal = false;
        $this->reset(['editVideoId', 'editTitle', 'editDuration']);
        $this->dispatch('close-modal', 'edit-video-modal');
    }

    public function updateVideo()
    {
        $this->validate([
            'editTitle' => 'required|string|max:255',
            'editDuration' => 'nullable|integer|min:1',
        ]);

        Video::where('id', $this->editVideoId)->update([
            'title' => $this->editTitle,
            'duration' => $this->editDuration,
        ]);

        $this->dispatch('toast', 'Video updated!');
        $this->dispatch('video-updated');
        $this->closeEditModal();
    }

    public function deleteVideo($videoId)
    {
        $video = Video::findOrFail($videoId);

        if ($video->video_url) {
            $path = str_replace('/storage/', '', parse_url($video->video_url, PHP_URL_PATH));
            Storage::disk('public')->delete($path);
        }
        if ($video->thumbnail_url) {
            $path = str_replace('/storage/', '', parse_url($video->thumbnail_url, PHP_URL_PATH));
            Storage::disk('public')->delete($path);
        }

        $video->delete();

        $this->dispatch('toast', 'Video deleted!');
        $this->dispatch('video-deleted');
    }

    public function refreshVideos()
    {
        $this->resetPage();
    }

    public function render()
    {
        $videos = Video::query()
            ->where(function ($q) {
                $q->where('uploader_user_id', $this->getTutorId())
                  ->orWhere('uploader_user_id', Auth::id());
            })
            ->when($this->search, fn($q) => $q->where('title', 'like', "%{$this->search}%"))
            ->orderByDesc('created_at')
            ->paginate(12);

        return view('livewire.video.my-videos', compact('videos'));
    }

    protected function getTutorId()
    {
        return Auth::user()?->tutor?->id 
            ?? Auth::user()?->tutor_id 
            ?? Auth::id();
    }
}