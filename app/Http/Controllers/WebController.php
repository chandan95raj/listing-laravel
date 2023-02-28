<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    // homeView
    public function homeView(){
        echo view('web.top');
        echo view('web.home');
        echo view('web.bottom');
    }

    // listingView
    public function listingView()
    {
        echo view('web.top');
        echo view('web.listing');
        echo view('web.bottom');
    }

     // listingDetalisView
     public function listingdetailsView()
     {
         echo view('web.top');
         echo view('web.listing-details');
         echo view('web.bottom');
     }

     // contactView
     public function contactView()
     {
         echo view('web.top');
         echo view('web.contact');
         echo view('web.bottom');
     }

     // pricingView
     public function pricingView()
     {
         echo view('web.top');
         echo view('web.pricing');
         echo view('web.bottom');
     }
}
