<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function dataContact(Request $request)
    {
        
        (!request()->name) ? $name='invitado': $name = request()->name;
        
        return view('contactos',compact('name'));
    }
}
