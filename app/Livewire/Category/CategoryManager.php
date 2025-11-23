<?php
namespace App\Livewire\Category;
use App\Services\ApiService;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Session;

class CategoryManager extends Component
{
    use WithPagination, WithFileUploads;

    public $search = '';
    public $perPage = 10;

    // Form
    public $name = '';
    public $thumbnail;
    public $editingId = null;
    public $showModal = false;

    protected $api;

    public function boot()
    {
        $this->api = new ApiService();
    }

    public function mount()
    {
        $this->checkAuth();
        $this->resetForm();
    }

    public function checkAuth()
    {
        if (!Session::has('api_token')) {
            return redirect()->route('login');
        }
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
        $category = $this->findCategory($id);
        $this->editingId = $id;
        $this->name = $category['name'];
        $this->thumbnail = null;
        $this->showModal = true;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:100',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        $data = [['name' => 'name', 'contents' => $this->name]];

        if ($this->thumbnail) {
            $data[] = [
                'name' => 'thumbnail',
                'contents' => fopen($this->thumbnail->getRealPath(), 'r'),
                'filename' => $this->thumbnail->getClientOriginalName(),
            ];
        }

        $response = $this->editingId
            ? $this->api->put("categories/{$this->editingId}", $data, true)
            : $this->api->post('categories', $data, true);

        $this->closeModal();
        $this->dispatch('notify', ['message' => 'Saved!', 'type' => 'success']);
    }

    public function delete($id)
    {
        $this->api->delete("categories/{$id}");
        $this->dispatch('notify', ['message' => 'Deleted!', 'type' => 'success']);
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

    protected function findCategory($id)
    {
        $response = $this->api->get("categories/{$id}");
        return $response['data'];
    }

    public function render()
    {
        $response = $this->api->get('categories', [
            'search' => $this->search,
            'per_page' => $this->perPage,
            'page' => $this->page,
        ]);

        $categories = collect($response['data']);
        $pagination = $response['meta'];

        // Fake pagination links for Livewire
        $this->setPageLinks($pagination);

        return view('livewire.category.category-manager', [
            'categories' => $categories,
            'links' => $pagination,
        ]);
    }

    protected function setPageLinks($meta)
    {
        $this->links = collect(range(1, $meta['last_page']))
            ->map(function ($page) use ($meta) {
                return [
                    'url' => $meta['current_page'] == $page ? null : $page,
                    'label' => $page,
                    'active' => $meta['current_page'] == $page,
                ];
            })->toArray();
    }
}