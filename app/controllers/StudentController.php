<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
{
    $_SESSION['student_access'] = true; // grant access after visiting home
    $data['title'] = 'Student Home';
    $this->call->view('student_home', $data);
}
    public function profile()
    {
        $student = [
            'student_id' => '2024-00064',
            'name'       => 'Francisco,Francine',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => '3F2',
            'email'      => 'francine@gmail.com'
        ];

        $this->call->view('student_profile', $student);
    }
}