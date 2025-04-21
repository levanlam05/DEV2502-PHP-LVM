<?php

namespace Core;

use PDO;
use PDOException;

class Model
{
    protected $db;

    public function __construct()
    {
        $config = require __DIR__ . '/../config/database.php';

        try {
            $this->db = new PDO(
                "mysql:host=" . $config['host'] . ";dbname=" . $config['dbname'] . ";charset=utf8",
                $config['user'],
                $config['password']
            );
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
}

?>