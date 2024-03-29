<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function __construct()
   {
       $this->middleware('isAdmin');
   }

   public function index()
   {
       $user = Auth::user();

       return  "welcome $user->name you are an ". $user->role->name;
   }
}
