<?php

namespace App\Livewire\Course;

use App\Services\ApiService;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;
use Illuminate\Pagination\LengthAwarePaginator;

class CourseList extends Component
{
    use WithPagination;

    #[Url(as: 'type', except: 'all')] public string $filterType = 'all';
    #[Url(as: 'price', except: 'all')] public string $filterPrice = 'all';
    #[Url(as: 'location', except: '')] public string $searchLocation = '';

    public ?string $categorySlug = null;
    public ?int $tutorId = null;
    public bool $usePagination = false;
    public ?int $limit = null;

    protected $listeners = ['updateFilter' => 'handleFilterUpdate', 'clearAllFilters' => 'clearFilters'];

    protected $api;

    public function boot()
    {
        $this->api = app(ApiService::class);
    }

    public function mount(?string $categorySlug = null, ?int $tutorId = null, bool $usePagination = false)
    {
        $this->categorySlug = $categorySlug;
        $this->tutorId = $tutorId;
        $this->usePagination = $usePagination;
        $this->limit = $usePagination ? null : 6;
    }

    public function handleFilterUpdate(string $key, $value): void
    {
        $this->$key = $value;
        $this->resetPage();
    }

    public function clearFilters(): void
    {
        $this->filterType = 'all';
        $this->filterPrice = 'all';
        $this->searchLocation = '';
        $this->resetPage();
    }

    public function render()
    {
        $params = [
            'paginate' => $this->usePagination,
            'limit' => $this->limit,
        ];

        if ($this->categorySlug) $params['category'] = $this->categorySlug;
        if ($this->tutorId) $params['tutor'] = $this->tutorId;
        if ($this->filterType !== 'all') $params['type'] = $this->filterType;
        if ($this->filterPrice !== 'all') $params['price'] = $this->filterPrice;
        if ($this->searchLocation) $params['location'] = $this->searchLocation;

        $response = $this->api->get('courses', $params);

        $rawCourses = $this->usePagination 
            ? ($response['data'] ?? []) 
            : ($response['data'] ?? []);

        // TRANSFORM COURSES — ADD 'link' and 'button_text'
        $items = collect($rawCourses)->map(function ($course) {
            $data = $course['url_data'] ?? $course;

            $course['link'] = $data['type'] === 'online'
                ? route('courses.online', $course['slug'])
                : route('courses.center', [
                    'center' => $data['center_id'] ?? 1,
                    'course' => $course['slug']
                ]);

            $course['button_text'] = $data['type'] === 'online'
                ? 'Start Learning Now'
                : 'View Details';

            return $course;
        });

        // HANDLE PAGINATION CORRECTLY
        $courses = null;
        if ($this->usePagination) {
            $courses = new LengthAwarePaginator(
                $response['data'] ?? [],
                $response['total'] ?? 0,
                $response['per_page'] ?? 10,
                $response['current_page'] ?? 1,
                [
                    'path' => request()->url(),
                    'pageName' => 'page',
                ]
            );
        }
//dd($courses);
        return view('livewire.course.course-list', [
            'items' => $items,
            'courses' => $courses,
            'sectionTitle' => $this->calculateTitle(),
        ]);
    }

    private function calculateTitle(): string
    {
        return match (true) {
            $this->categorySlug !== null => "Courses in " . ucfirst(str_replace('-', ' ', $this->categorySlug)),
            $this->tutorId !== null => "Other Courses by this Tutor",
            $this->filterType === 'physical' => 'Our Physical Trainings',
            $this->filterType === 'online' => 'Our Virtual Trainings',
            default => 'All Available Trainings',
        };
    }
}