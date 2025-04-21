<?php

namespace Controllers;

use Core\Controller;
use Models\ProductModel;

class ProductController extends Controller
{
    private $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index(): void
    {
        $products = $this->productModel->getAllProducts();
        $this->view('product/index', ['products' => $products]);
    }

    public function view(int $id): void
    {
        $product = $this->productModel->getProductById($id);
        if ($product) {
            $this->view('product/view', ['product' => $product]);
        } else {
            // Handle product not found error
            echo "Product not found.";
        }
    }

    public function create(): void
    {
        $this->view('product/create');
    }

    public function store(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name'        => $_POST['name'],
                'quantity'    => $_POST['quantity'],
                'price'       => $_POST['price'],
                'image'       => $_POST['image'], // You'll need to handle file uploads properly
                'status'      => $_POST['status'],
                'category_id' => $_POST['category_id']
            ];

            if ($this->productModel->createProduct($data)) {
                header('Location: /products'); // Redirect to the list of products
                exit();
            } else {
                // Handle create error
                echo "Error creating product.";
            }
        } else {
            // Handle invalid request method
            echo "Invalid request.";
        }
    }

    public function edit(int $id): void
    {
        $product = $this->productModel->getProductById($id);
        if ($product) {
            $this->view('product/edit', ['product' => $product]);
        } else {
            // Handle product not found error
            echo "Product not found.";
        }
    }

    public function update(int $id): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name'        => $_POST['name'],
                'quantity'    => $_POST['quantity'],
                'price'       => $_POST['price'],
                'image'       => $_POST['image'], // Handle file uploads
                'status'      => $_POST['status'],
                'category_id' => $_POST['category_id']
            ];

            if ($this->productModel->updateProduct($id, $data)) {
                exit();
            } else {
                echo "Error updating product.";
            }
        } else {
            echo "Invalid request.";
        }
    }

    public function delete(int $id): void
    {
        if ($this->productModel->deleteProduct($id)) {
            header('Location: /products'); 
            exit();
        } else {
            echo "Error deleting product.";
        }
    }
}

?>