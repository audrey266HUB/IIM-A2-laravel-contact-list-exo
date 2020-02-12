<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Route::get('/utilisateurs', function () {

        	    $utilisateurs = App\Utilisateur::all();
 return view('utilisateurs', [
        'utilisateurs' => $utilisateurs

});
    }
}



