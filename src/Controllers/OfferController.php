<?php
namespace App\Controllers;

use App\Classes\Offer;
use App\Config\DatabaseConnection;
use App\Models\OfferModel;

class OfferController{

    public function CreateOffer($name,$title,$salary,$location,$category) {

      $newOffer = new OfferModel();

      $result = $newOffer->addOffer($name,$title,$salary,$location,$category);
    }

}