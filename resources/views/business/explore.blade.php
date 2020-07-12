@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
			<h1>Empresas</h1>
			<form method="GET" action="{{ route('business.explore') }}" id="buscador">
				<div class="row">
					<div class="form-group col">
						<input type="text" id="search" class="form-control" />
					</div>
					<div class="form-group col btn-search">
						<input type="submit" value="Buscar" class="btn btn-success"/>
					</div>
				</div>
			</form>
			<hr>

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
					<a href="{{ route('profileBusiness', ['id' => $busine->id])}}" class="btn btn-success">Ver perfil</a>

				</div>

				<div class="clearfix"></div>
				<hr>
			</div>
			@endforeach

			<!-- PAGINACION -->
			<div class="clearfix"></div>
			{{$business->links()}}
        </div>

    </div>
</div>
@endsection
