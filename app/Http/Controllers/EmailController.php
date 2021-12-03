<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;

class EmailController extends Controller
{
    public function enviarEmailDeContacto(Request $request)
    {
      $this->validate($request,
      [
        'nombreDelContacto' => 'required|max:100',
        'CorreoDelContacto' => 'required|email:rfc',
        'numeroDeContacto' => 'required|digits:20',
        'motivoDeContacto' => 'required|max:100',
        'descripcion' => 'required|max:420'
      ],
      [
        'nombreDelContacto.required' => 'El campo no puede estar vacío',
        'nombreDelContacto.max' => 'Nombre demasiado grande',
        'CorreoDelContacto.required' => 'El campo no puede estar vacío',
        'CorreoDelContacto.email' => 'El email no es válido',
        'numeroDeContacto.required' => 'El campo no puede estar vacío',
        'numeroDeContacto.digits' => 'No es un número válido',
        'motivoDeContacto.required' => 'El campo no puede estar vacío',
        'motivoDeContacto.max' => 'Motivo demasiado largo',
        'descripcion.required' => 'El campo no puede estar vacío',
        'descripcion.max' => 'Descripción demasiado grande'
      ]);
      $details = [
        'name' => $request->nombreDelContacto,
        'email' => $request->CorreoDelContacto,
        'numero' => $request->numeroDeContacto,
        'motivo' => $request->motivoDeContacto,
        'descripcion' => $request->descripcion
      ];
        Mail::to("ramonobras00@gmail.com")->send(new ContactoMail($details));
        return redirect()->back();
    }
}
