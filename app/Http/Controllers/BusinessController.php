<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business;
use App\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BusinessController extends Controller
{
    public function create(){
		return view('business.register');
    }
    public function index(){
        $user = \Auth::user();
        $business = Business::where('user_id',$user->id)->orderBy('id','desc')->get();
       
		return view('business.index',[
            'business' =>$business
        ]);
    }
    
    public function store(Request $request){
        
		// Conseguir usuario identificado
		$user = \Auth::user();
		$id = $user->id;
        
		// Validación del formulario
		$validate = $this->validate($request, [
            'nombre' => ['required', 'string', 'max:255|unique:nombre']
        ]);
		
		// Recoger datos del formulario
		$user_id = $id;
		$nombre = $request->input('nombre');
		$telefono = $request->input('telefono');
		$tiponegocio = $request->input('tipoNegocio');
		
		// Asignar nuevos valores al objeto del usuario
		$business = new Business;
		$business->user_id = $id;
		$business->nombre = $nombre;
		$business->telefono = $telefono;
		$business->tiponegocio = $tiponegocio;
		$business->coordenadas = "00";
		
		// Subir la imagen
        $image_path = $request->file('image_path');
        
		if($image_path){
			// Poner nombre unico
			$image_path_name = time().$image_path->getClientOriginalName();
			
			// Guardar en la carpeta storage (storage/app/users)
			Storage::disk('business')->put($image_path_name, File::get($image_path));
			
			// Seteo el nombre de la imagen en el objeto
			$business->imagen = $image_path_name;
		}
		
		// Ejecutar consulta y cambios en la base de datos
		$business->save();
		
		return redirect()->route('business')
						 ->with(['message'=>'Su empresa se creó correctamente']);
    }

    public function profileBusiness($id){
		$business = Business::find($id);
		
		return view('business.profile', [
			'business' => $business
		]);
    }
    
    public function getLogo($filename){
		$file = Storage::disk('business')->get($filename);
		return new Response($file, 200);
	}

	public function profile($id){
		$business = Business::find($id);
		
		return view('business.profile', [
			'business' => $business
		]);
	}
}
