<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ManageProductsMiddleware
{
    public function handle($next)
    {
        if (empty($_SESSION['user'])) {
            redirect('/login');
        }

        if (($_SESSION['user']['role'] ?? 'user') === 'user') {
            http_response_code(403);
            exit('You do not have permission to modify products.');
        }

        return $next();
    }
}