<div class="card pub_image">
	<div class="card-header">

		@if($image->business->image)
		<div class="container-avatar">
			<img src="{{ route('user.avatar',['filename'=>$image->business->imagen]) }}" class="avatar" />
		</div>
		@endif

		<div class="data-user">
			<a href="{{ route('profile', ['id' => $image->business->id])}}">
				{{$image->business->nombre}}
				<span class="nickname">
					{{' | @'.$image->business->telefono}}
				</span>
			</a>
		</div>
	</div>

	<div class="card-body">
		<div class="image-container">
			<img src="{{ route('image.file',['filename' => $image->ruta]) }}" />
		</div>

		<div class="description">
			<span class="nickname">{{'@'.$image->business->nombre}} </span>
			<span class="nickname date">{{' | '.\FormatTime::LongTimeFilter($image->created_at)}}</span>
			<p>{{$image->description}}</p>
		</div>

		

		<div class="comments">
			<a href="{{ route('image.detail', ['id' => $image->id])}}" class="btn btn-sm btn-warning btn-comments">
				Comentarios ({{count($image->comments)}})
			</a>
		</div>
	</div>
</div>
