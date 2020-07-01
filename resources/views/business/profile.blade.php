@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
			
			<div class="profile-user">
			
				@if($business->imagen)
					<div class="container-avatar">
						<img src="{{ route('business.logo',['filename'=>$business->imagen]) }}" class="avatar" />
					</div>
				@endif
				
				<div class="user-info">
					<h1>{{'@'.$business->nombre}}</h1>
					<h2>{{$business->telefono}}</h2>
					<p>{{'Se unió: '.\FormatTime::LongTimeFilter($business->created_at)}}</p>
				</div>
				
				<div class="clearfix"></div>
				<hr>
			</div>
			
			<div class="clearfix"></div>
			
			@foreach($business->images as $image)
				@include('includes.image',['image'=>$image])
			@endforeach

	
        </div>

    </div>
</div>
@endsection