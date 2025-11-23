<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Center;
use Illuminate\Http\Request;

use App\Services\ApiService;
use Exception;

class CourseController extends Controller
{
    protected $api;

    public function __construct()
    {
        $this->api = app(ApiService::class);
    }
  public function mycourse()
    {
    return view('courses.mycourse');

    }

     public function buy($slug)
    {
        $response = $this->api->get("courses/{$slug}");
        if (isset($response['message']) || empty($response['data']['id'])) {
            abort(404);
        }
        $course = $response['data'];
        $courseId = $course['id'];

        try {
            $initResponse = $this->api->initializePayment($courseId);
            if (isset($initResponse['authorization_url'])) {
                return redirect($initResponse['authorization_url']);
            }
            throw new Exception($initResponse['error'] ?? 'Payment initialization failed.');
        } catch (Exception $e) {
            return redirect()->route('courses.showOnline', $slug)->with('error', $e->getMessage());
        }
    }

   public function showOnline($slug)
{
    $response = $this->api->get("courses/{$slug}");

    if (isset($response['message'])) {
        abort(404);
    }

    $course = $response['data'] ?? $response;

    if ($course['type'] !== 'online') {
        abort(404);
    }

    return view('courses.show', compact('course'));
}

    public function showCenter($centerId, $slug)
    {
        $response = $this->api->get("courses/{$slug}");

        if (isset($response['message'])) {
            abort(404);
        }

        $course = $response['data'] ?? $response;

        $center = collect($course['centers'] ?? [])->firstWhere('id', $centerId);

        if (!$center || !in_array($course['type'], ['physical', 'hybrid'])) {
            abort(404);
        }

        return view('courses.show-center', compact('course', 'center'));
    }
}
