<?php
namespace App\Controllers;

use App\Config\DatabaseConnection;
use App\Models\TagModel;

class TagController{

    public function createTag($name) {

      $newTag = new TagModel();

      $result = $newTag->addTag($name);
  }
}