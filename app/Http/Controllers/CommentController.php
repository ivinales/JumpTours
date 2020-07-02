<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Business;

class CommentController extends Controller
{
    public function save(Request $request){
		
		// Validación
		// $validate = $this->validate($request, [
		// 	'image_id' => 'integer|required',
		// 	'content' => 'string|required'
		// ]);
		
		// Recoger datos
		$user = \Auth::user();
		$image_id = $request->input('image_id');
		$content = $request->input('content');
		
		// Asigno los valores a mi nuevo objeto a guardar
		$comment = new Comment();
		$comment->user_id = $user->id;
		$comment->image_id = $image_id;
		$comment->contenido = $content;
		
		// Guardar en la bd
		$comment->save();
		
		// Redirección
		return redirect()->route('image.detail', ['id' => $image_id])
						 ->with([
							'message' => 'Has publicado tu comentario correctamente!!'
						 ]);
    }
    
    public function delete($id){
            // Conseguir datos del usuario logueado 
            $user = \Auth::user();
            
            // Conseguir objeto del comentario
            $comment = Comment::find($id);
            $business=Business::where('user_id',$user->id)->get();
            if (\Auth::user()->profile_id != '2') {
                foreach ($business as $busin) {
                    // Comprobar si soy el dueño del comentario o de la publicación
                    if($user && ($comment->user_id == $user->id || $comment->image->business_id == $busin->id)){
                        $comment->delete();
                        
                        return redirect()->route('image.detail', ['id' => $comment->image->id])
                                    ->with([
                                        'message' => 'Comentario eliminado correctamente!!'
                                    ]);
                    }else{
                        return redirect()->route('image.detail', ['id' => $comment->image->id])
                                    ->with([
                                        'message' => 'EL COMENTARIO NO SE HA ELIMINADO!!'
                                    ]);
                    }
                }
            }else{
                    // Comprobar si soy el dueño del comentario o de la publicación
                    if($user && ($comment->user_id == $user->id )){
                        $comment->delete();
                        
                        return redirect()->route('image.detail', ['id' => $comment->image->id])
                                    ->with([
                                        'message' => 'Comentario eliminado correctamente!!'
                                    ]);
                    }else{
                        return redirect()->route('image.detail', ['id' => $comment->image->id])
                                    ->with([
                                        'message' => 'EL COMENTARIO NO SE HA ELIMINADO!!'
                                    ]);
                    }

            }
            die();
            
     
	}
}
