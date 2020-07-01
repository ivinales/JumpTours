<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Image;

class ImageController extends Controller
{
    public function getImage($filename){
		$file = Storage::disk('images')->get($filename);
		return new Response($file, 200);
    }
    
    public function create($id){
		return view('image.create',[
            'id'=>$id]);
    }

    public function save(Request $request){
		
		//Validación
		// $validate = $this->validate($request, [
		// 	'description' => 'required',
		// 	'image_path'  => 'required|image'
		// ]);
		
		// Recoger datos
		$ruta = $request->file('image_path');
		$descripcion = $request->input('description');
        $business_id = $request->input('idBusiness');
        
		
		// Asignar valores nuevo objeto
		
		$image = new Image();
		$image->business_id = $business_id;
		$image->descripcion = $descripcion;
		
		// Subir fichero
		if($ruta){
			$image_path_name = time().$ruta->getClientOriginalName();
			Storage::disk('images')->put($image_path_name, File::get($ruta));
			$image->ruta = $image_path_name;
		}
		
		$image->save();
        
        //modificar la redireccion
		return redirect()->route('home')->with([
			'message' => 'La foto ha sido subida correctamente!!'
		]);
	}
}
