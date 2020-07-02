<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Image;
use App\Comment;
use App\Like;
use App\Business;

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
	public function detail($id){
		$image = Image::find($id);
		$user = \Auth::user();
		$business=Business::where('user_id',$user->id)->get();
		// foreach($business as $busin){
		// 	echo($busin->id);
		// }
		// die();
		return view('image.detail',[
			'image' => $image,
			'business'=>$business
		]);
	}

	public function delete($id){
		$user = \Auth::user();
		$image = Image::find($id);
		$comments = Comment::where('image_id', $id)->get();
		$likes = Like::where('image_id', $id)->get();
		$business=Business::where('user_id',$user->id)->get();
		

		foreach ($business as $busin) {
			if($user && $image && $image->business->id == $busin->id){
			
				// Eliminar comentarios
				if($comments && count($comments) >= 1){
					foreach($comments as $comment){
						$comment->delete();
					}
				}
				
				// Eliminar los likes
				if($likes && count($likes) >= 1){
					foreach($likes as $like){
						$like->delete();
					}
				}
				
				// Eliminar ficheros de imagen
				Storage::disk('images')->delete($image->image_path);
				
				// Eliminar registro imagen
				$image->delete();
				
				$message = array('message' => 'La imagen se ha borrado correctamente.');
			}else{
				$message = array('message' => 'La imagen no se ha borrado.');
			}
		}
		
		
		return redirect()->route('home')->with($message);
	}
	public function edit($id){
		$user = \Auth::user();
		$image = Image::find($id);
		
		$business=Business::where('user_id',$user->id)->get();
		

		foreach ($business as $busin) {
		if($user && $image && $image->business->id == $busin->id){
			return view('image.edit', [
				'image' => $image
			]);
		}else{
			return redirect()->route('home');
		}
	}
	}

	public function update(Request $request){
		//Validación
		// $validate = $this->validate($request, [
		// 	'descipcion' => 'required',
		// 	'ruta'  => 'image'
		// ]);
		
		// Recoger datos
		$image_id = $request->input('image_id');
		$ruta = $request->file('image_path');
		$descripcion = $request->input('description');
		
		// Conseguir objeto image
		$image = Image::find($image_id);
		$image->descripcion = $descripcion;
		
		// Subir fichero
		if($ruta){
			$image_path_name = time().$ruta->getClientOriginalName();
			Storage::disk('images')->put($image_path_name, File::get($ruta));
			$image->ruta = $image_path_name;
		}
		
		// Actualizar registro
		$image->update();
		
		return redirect()->route('image.detail', ['id' => $image_id])
						 ->with(['message' => 'Imagen actualizada con exito']);
	}

	
}
