<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    public function index(){
        $teste = 123;
        return view('site.teste', ['teste'=> $teste]);
    }

    public function contato(){
        return "Ola contato";
    }

    public function categoria($id){
        return "Ola categoria" . $id;
    }
}
