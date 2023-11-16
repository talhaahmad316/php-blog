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
    public function store()
    {
        $name = $_POST['name'];
        $slug = str_replace(' ','-', strtolower($name));
        $file_name = '';
        if(isset($_FILES['image'])){
            $file_name =  $_FILES['image']['name'];
            $file_tmp  =  $_FILES['image']['tmp_name'];
            move_uploaded_file($file_tmp,"../../assets/images/category/".$file_name);
         }
        $result = $this->conn->query("INSERT INTO categories(title,slug,image)VALUES('".$name."','".$slug."','".$file_name."')");
        return $result;
    }
    public function delete()
    {
        $id = $_GET['id'];
        $result = $this->conn->query("DELETE FROM categories WHERE id='".$id."'");
        return $result;
    }
}

