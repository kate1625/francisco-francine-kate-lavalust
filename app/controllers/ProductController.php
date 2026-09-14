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
        return [
            'product_name' => trim($_POST['product_name'] ?? ''),
            'description'  => trim($_POST['description'] ?? ''),
            'price'        => number_format((float) ($_POST['price'] ?? 0), 2, '.', ''),
            'quantity'     => max(0, (int) ($_POST['quantity'] ?? 0)),
        ];
    }
}