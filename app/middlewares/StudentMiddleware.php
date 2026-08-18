<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    public function handle($next)
    {
        // Access is only granted if explicitly set in the session
        if (!isset($_SESSION['student_access']) || $_SESSION['student_access'] !== true) {
            redirect('student');
            exit();
        }

        return $next();
    }
}