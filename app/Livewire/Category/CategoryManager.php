<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class CategoryManager extends Component
{
    use WithPagination, WithFileUploads;

    public $search = '';
    public $perPage = 10;

    // Form fields
    public $name = '';
    public $thumbnail;
    public $editingId = null;

    // Modal
    public $showModal = false;

    protected $rules = [
        'name' => 'required|string|max:100',
        'thumbnail' => 'nullable|image|max:2048', // 2MB
    ];

    public function mount()
    {
        $this->resetForm();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function create()
    {
        $this->resetForm();
        $this->showModal = true;
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $this->editingId = $id;
        $this->name = $category->name;
        $this->thumbnail = null; // Livewire handles file separately
        $this->showModal = true;
    }

    public function save()
    {
        $this->validate();

        $data = ['name' => $this->name];

        if ($this->thumbnail) {
            $data['thumbnail_url'] = $this->thumbnail->store('categories', 'public');
        }

        if ($this->editingId) {
            $category = Category::findOrFail($this->editingId);
            $category->update($data);
        } else {
            Category::create($data);
        }

        $this->closeModal();
        $this->dispatch('notify', ['message' => 'Category saved!', 'type' => 'success']);
    }

    public function delete($id)
    {
        $category = Category::findOrFail($id);
        if ($category->thumbnail_url) {
            Storage::disk('public')->delete($category->thumbnail_url);
        }
        $category->delete();
        $this->dispatch('notify', ['message' => 'Category deleted!', 'type' => 'success']);
    }

    public function closeModal()
    {
        $this->showModal = false;
        $this->resetForm();
    }

    public function resetForm()
    {
        $this->name = '';
        $this->thumbnail = null;
        $this->editingId = null;
        $this->resetValidation();
    }

    public function render()
    {
        $categories = Category::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', "%{$this->search}%")
                      ->orWhere('slug', 'like', "%{$this->search}%");
            })
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.category.category-manager', [
            'categories' => $categories
        ]);
    }
}