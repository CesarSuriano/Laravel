<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index(){
        return "Ola";
    }

    public function contato(){
        return "Ola contato";
    }

    public function categoria($id){
        return "Ola categoria" . $id;
    }
}
