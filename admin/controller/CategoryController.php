<?php 
class CategoryController 
{
    public $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function index()
    {
        $result = $this->conn->query("SELECT * FROM categories");
        return $result;
    }
}

