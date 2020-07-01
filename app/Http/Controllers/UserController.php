<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\User;

class UserController extends Controller
{
	public function update(Request $request){
		
		// Conseguir usuario identificado
		$user = \Auth::user();
		$id = $user->id;
		
		// Validación del formulario
		$validate = $this->validate($request, [
            'nombre' => ['required', 'string', 'max:255'],
			'apellido' => ['required', 'string', 'max:255'],
			'nick' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'nacionalidad' => ['required', 'string', 'max:255'],
        ]);
		
		// Recoger datos del formulario
		$profile_id = $request->input('perfil');
		$nombre = $request->input('nombre');
		$apellido = $request->input('apellido');
		$nick = $request->input('nick');
		$email = $request->input('email');
		$fechaNacimiento = $request->input('fechaNacimiento');
		$nacionalidad = $request->input('nacionalidad');
		$telefono = $request->input('telefono');
		
		// Asignar nuevos valores al objeto del usuario
		$user->profile_id = $profile_id;
		$user->nombre = $nombre;
		$user->apellido = $apellido;
		$user->nick = $nick;
		$user->email = $email;
		$user->fechaNacimiento = $fechaNacimiento;
		$user->nacionalidad = $nacionalidad;
		$user->telefono = $telefono;
		
		// Subir la imagen
		$image_path = $request->file('image_path');
		if($image_path){
			// Poner nombre unico
			$image_path_name = time().$image_path->getClientOriginalName();
			
			// Guardar en la carpeta storage (storage/app/users)
			Storage::disk('users')->put($image_path_name, File::get($image_path));
			
			// Seteo el nombre de la imagen en el objeto
			$user->image = $image_path_name;
		}
		
		// Ejecutar consulta y cambios en la base de datos
		$user->update();
		
		return redirect()->route('config')
						 ->with(['message'=>'Usuario actualizado correctamente']);
	}
	
    public function config(){
		return view('user.config');
	}
	public function getImage($filename){
		$file = Storage::disk('users')->get($filename);
		return new Response($file, 200);
	}
}
