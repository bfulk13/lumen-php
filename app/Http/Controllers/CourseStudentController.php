<?php namespace App\Http\Controllers;

use App\Course;

class CourseStudentController extends Controller
{
    public function index($course_id)
    // show all students in a given course
    {
        $course = Course::find($course_id);

        if($course)
        {
            $students = $course->students;

            return $this->createSuccessResponse($students, 200);
        }
        return $this->createErrorResponse("The couse with id {$course_id} does not exist.", 404);
    }

    public function store()
    {
        return __METHOD__;
    }

    public function destroy()
    {
        return __METHOD__;
    }
}