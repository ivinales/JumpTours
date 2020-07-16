@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	@include('includes.message')
            <div class="card">
                
                <div class="card-header">{{ __('Mis Empresas') }} 
                        <button  type="submit" class="btn btn-primary" onclick="window.location.href='/registrar'">Crear Empresa </button>
                </div>
            </div>
        

    @foreach($business as $busine)
			<div class="profile-user">

				@if($busine->imagen)
				<div class="container-avatar">
					<img src="{{ route('business.logo',['filename'=>$busine->imagen]) }}" class="avatar" />
				</div>
				@endif

				<div class="user-info">
					<h2>{{'@'.$busine->nombre}}</h2>
					<h3>{{$busine->telefono }}</h3>
                    <p>{{'Se unió: '.\FormatTime::LongTimeFilter($busine->created_at)}}</p>
                    <div>
                        <a href="{{ route('profileBusiness', ['id' => $busine->id])}}" class="btn btn-success">Ver perfil</a>
                        <a href="{{ route('business.edit', ['id' => $busine->id])}}" class="btn btn-warning">Modificar</a>
                        <a href="{{ route('image.create',['id'=>$busine->id]) }}" class="btn btn-secondary">Subir foto</a>
                        <a href="{{ route('business.delete',['id'=>$busine->id]) }}" class="btn btn-danger">Eliminar</a>

                    </div>
				</div>

				<div class="clearfix"></div>
				<hr>
			</div>
			@endforeach
</div>
</div>
</div>
@endsection
