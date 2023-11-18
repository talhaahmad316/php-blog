<?php
include($_SERVER['DOCUMENT_ROOT'].'/blog/include/function.php');
include($_SERVER['DOCUMENT_ROOT'].'/blog/database/db.php');
include($_SERVER['DOCUMENT_ROOT'].'/blog/admin/controller/CategoryController.php');
include($_SERVER['DOCUMENT_ROOT'].'/blog/admin/controller/SubCategoryController.php');
$category = new CategoryController($conn);
$sub_category = new SubCategoryController($conn);

$route = $_GET['route'];

switch ($route) {
    case "delete_category":
        return $category->delete();
    break;
    case "delete_sub_category":
        return $sub_category->delete();
    break;
    default:
      echo false;
  }