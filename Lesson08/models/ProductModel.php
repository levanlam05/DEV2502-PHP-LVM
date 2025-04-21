<?php

namespace Models;

use Core\Model;

class ProductModel extends Model
{
    protected $table = 'Product';

    public function getAllProducts(): array
    {
        $stmt = $this->db->query("SELECT * FROM {$this->table}");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById(int $id): ?array
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        return $product ?: null;
    }

    public function createProduct(array $data): bool
    {
        $stmt = $this->db->prepare("INSERT INTO {$this->table} (name, quantity, price, image, status, category_id) VALUES (:name, :quantity, :price, :image, :status, :category_id)");
        return $stmt->execute($data);
    }

    public function updateProduct(int $id, array $data): bool
    {
        $stmt = $this->db->prepare("UPDATE {$this->table} SET name = :name, quantity = :quantity, price = :price, image = :image, status = :status, category_id = :category_id WHERE id = :id");
        $data['id'] = $id;
        return $stmt->execute($data);
    }

    public function deleteProduct(int $id): bool
    {
        $stmt = $this->db->prepare("DELETE FROM {$this->table} WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}

?>