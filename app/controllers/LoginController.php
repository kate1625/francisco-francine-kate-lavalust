<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class LoginController extends Controller
{
    public function index()
    {
        $this->call->view('login', [
            'error' => $_SESSION['login_error'] ?? null,
        ]);

        unset($_SESSION['login_error']);
    }


    public function authenticate()
    {
        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';

        $this->call->model('UsersModel');
        $user = $this->UsersModel->find_by_username($username);

        if (!$user || (int) $user['is_active'] !== 1 || !password_verify($password, $user['password'])) {
            $_SESSION['login_error'] = 'Invalid username or password.';
            redirect('/login');
        }

        session_regenerate_id(true);
        $_SESSION['user'] = [
            'id' => (int) $user['id'],
            'username' => $user['username'],
            'role' => $user['role'],
        ];

        redirect('/products');
    }


    public function logout()
    {
        $_SESSION = [];
        session_destroy();

        redirect('/login');
    }
}