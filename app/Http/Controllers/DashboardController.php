<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// use PHPMailer\PHPMailer\PHPMailer;
class DashboardController extends MyController
{

    public function index(){
       
        return view('dashboard', [
            'user' => $this->user, 
        ]);
    }

   
}
