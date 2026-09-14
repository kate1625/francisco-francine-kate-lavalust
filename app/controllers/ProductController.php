<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
    public function index()
    {
        $this->call->model('ProductModel');

        $data['products'] = $this->ProductModel->all();

        $this->call->view('products/index', $data);
    }

    public function create()
    {
        $this->call->view('products/create');
    }

    public function store()
    {
        $this->call->model('ProductModel');

        $data = $this->product_data();

        if ($data === null) {
            $_SESSION['product_error'] = 'Enter a valid price from 0.00 to 99,999,999.99 and a valid quantity.';
            redirect('/products/create');
        }

        $this->ProductModel->create($data);

        redirect('/products');
    }

    public function edit($id)
    {
        $this->call->model('ProductModel');

        $data['product'] = $this->ProductModel->find($id);

        if (!$data['product']) {
            redirect('/products');
        }

        $this->call->view('products/edit', $data);
    }

    public function update($id)
    {
        $this->call->model('ProductModel');

        $data = $this->product_data();

        if ($data === null) {
            $_SESSION['product_error'] = 'Enter a valid price from 0.00 to 99,999,999.99 and a valid quantity.';
            redirect('/products/edit/' . (int) $id);
        }

        $this->ProductModel->update($id, $data);

        redirect('/products');
    }

    public function delete($id)
    {
        $this->call->model('ProductModel');

        $this->ProductModel->delete($id);

        header('Location: ' . site_url('/products'), true, 302);
        exit();
    }

    private function product_data()
    {
        $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
        $quantity = filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_INT);

        if ($price === false || $price === null || !is_finite($price) || $price < 0 || $price > 99999999.99) {
            return null;
        }

        if ($quantity === false || $quantity === null || $quantity < 0 || $quantity > 2147483647) {
            return null;
        }

        return [
            'product_name' => trim($_POST['product_name'] ?? ''),
            'description'  => trim($_POST['description'] ?? ''),
            'price'        => number_format($price, 2, '.', ''),
            'quantity'     => $quantity,
        ];
    }
}