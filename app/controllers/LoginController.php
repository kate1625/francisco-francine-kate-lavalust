<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class LoginController extends Controller
{
    public function index()
    {
        $this->call->view('login');
    }


    public function authenticate()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];


        // Temporary authentication
        // Palitan natin ito kapag gagamit na ng users table

        if ($username == 'admin' && $password == 'admin123') {

            $_SESSION['user'] = $username;

            redirect('/products');

        } else {

            echo "Invalid username or password";

        }
    }


    public function logout()
    {
        unset($_SESSION['user']);

        redirect('/login');
    }
}