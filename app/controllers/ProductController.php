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

        $data = [
            'product_name' => $_POST['product_name'],
            'description'  => $_POST['description'],
            'price'        => $_POST['price'],
            'quantity'     => $_POST['quantity']
        ];

        $this->ProductModel->create($data);

        redirect('/products');
    }

    public function edit($id)
    {
        $this->call->model('ProductModel');

        $data['product'] = $this->ProductModel->find($id);

        $this->call->view('products/edit', $data);
    }

    public function update($id)
    {
        $this->call->model('ProductModel');

        $data = [
            'product_name' => $_POST['product_name'],
            'description'  => $_POST['description'],
            'price'        => $_POST['price'],
            'quantity'     => $_POST['quantity']
        ];

        $this->ProductModel->update($id, $data);

        redirect('/products');
    }

    public function delete($id)
    {
        $this->call->model('ProductModel');

        $this->ProductModel->delete($id);

        redirect('/products');
    }
}