<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;

class EmailController extends Controller
{
    public function enviarEmailDeContacto(Request $request)
    {
      $details = [
        'name' => $request->nombreDelContacto,
        'email' => $request->CorreoDelContacto,
        'motivo' => $request->motivoDeContacto,
        'descripcion' => $request->descripcion
      ];
        Mail::to("ramonobras00@gmail.com")->send(new ContactoMail($details));
        return redirect()->back();
    }
}
