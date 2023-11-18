<?php 
class SubCategoryController 
{
    public $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    public function index()
    {
        $result = $this->conn->query("SELECT *,sub_categories.image as sub_category_image,sub_categories.id as sub_category_id,categories.title as category_name FROM sub_categories LEFT JOIN categories ON categories.id = sub_categories.category_id");
        return $result;
    }
    public function store()
    {
        $name = $_POST['name'];
        $category_id = $_POST['category_id'];
        $slug = str_replace(' ','-', strtolower($name));
        $file_name = '';
        if(isset($_FILES['image']))
        {
            $file_name =  $_FILES['image']['name'];
            $file_tmp  =  $_FILES['image']['tmp_name'];
            move_uploaded_file($file_tmp,"../../assets/images/sub_category/".$file_name);
         }
        $result = $this->conn->query("INSERT INTO sub_categories(name,slug,category_id,image)VALUES('".$name."','".$slug."','".$category_id."','".$file_name."')");
        return $result;
    }
    public function show()
    {
        $id = $_GET['id'];
        $result = $this->conn->query("SELECT * FROM sub_categories WHERE id='".$id."'");
        $result = mysqli_fetch_assoc($result);
        return $result;
    }
    public function update()
    {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $slug = str_replace(' ','-', strtolower($name));
        $file_name = '';
        if(isset($_FILES['image'])){
            $file_name =  $_FILES['image']['name'];
            $file_tmp  =  $_FILES['image']['tmp_name'];
            move_uploaded_file($file_tmp,"../../assets/images/category/".$file_name);
        }
        if($file_name == "")
        {
            $result = $this->conn->query("UPDATE sub_categories SET name = '".$name."',slug = '".$slug."' WHERE id='".$id."'");
        }
        else
        {
            $result = $this->conn->query("UPDATE sub_categories SET name = '".$name."',name = '".$slug."',image = '".$file_name."' WHERE id='".$id."'");
        }
        
        return $result;
    }
    public function delete()
    {
        $id = $_GET['id'];
        $result = $this->conn->query("DELETE FROM sub_categories WHERE id='".$id."'");
        return $result;
    }
}

