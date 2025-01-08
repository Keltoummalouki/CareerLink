<?php
namespace App\Controllers;

use App\Classes\Category;
use App\Config\DatabaseConnection;
use App\Models\CategoryModel;

class CategoryController{

    public function createCategory($name) {

      $newCategory = new CategoryModel();

      $result = $newCategory->addCategory($name);
  }
}