<?php
namespace App\Controllers;

use App\Config\DatabaseConnection;
use App\Models\CategoryModel;

class CategoryController{

    public function CreateOffer($name,$title,$salary,$location,$member,$caregory) {

      $newOffer = new OfferModel();

      $result = $newOffer->addOffer($name,$title,$salary,$location,$member,$caregory);
  }
}