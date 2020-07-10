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
			
			<div class="clearfix">
				@if($business->address_latitude && $business->address_longitude)
								<div id="map-canvas" style="height: 425px; width: 100%; position: relative; overflow: hidden;">
								</div>
						@endif
			</div>
			
			@foreach($business->images as $image)
				@include('includes.image',['image'=>$image])
			@endforeach

	
        </div>

    </div>
</div>
@endsection
@section('scripts')

@if($business->address_latitude && $business->address_longitude)
    <script type='text/javascript' src='https://maps.google.com/maps/api/js?language=en&key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&region=GB'></script>
    <script defer>
        function initialize() {
            var latLng = new google.maps.LatLng({{ $business->address_latitude}}, {{ $business->address_longitude }});
            var mapOptions = {
                zoom: 14,
                minZoom: 6,
                maxZoom: 17,
                zoomControl:true,
                zoomControlOptions: {
                    style:google.maps.ZoomControlStyle.DEFAULT
                },
                center: latLng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false,
                panControl:false,
                mapTypeControl:false,
                scaleControl:false,
                overviewMapControl:false,
                rotateControl:false
            }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            var image = new google.maps.MarkerImage("{{ asset('assets/img/pin.png') }}", null, null, null, new google.maps.Size(40,52));

            var content = `
            <div class="gd-bubble" style="">
                <div class="gd-bubble-inside">
                    <div class="geodir-bubble_desc">
                    <div class="geodir-bubble_image">
                        <div class="geodir-post-slider">
                            <div class="geodir-image-container geodir-image-sizes-medium_large ">
                                <div id="geodir_images_5de53f2a45254_189" class="geodir-image-wrapper" data-controlnav="1">
                                    <ul class="geodir-post-image geodir-images clearfix">
                                        <li>
                                            <div class="geodir-post-title">
                                                <h4 class="geodir-entry-title">
                                                    <a href="https://maps.google.com/?q= {{ $business->address_latitude}},{{ $business->address_longitude}}" target="__blank" title="View: {{ $business->nombre }}">{{ $business->nombre }}</a> 
                                                </h4>
                                            </div>
                                             	 <a href="https://maps.google.com/?q= {{ $business->address_latitude}},{{ $business->address_longitude}}"><img src="{{ route('business.logo',['filename'=>$business->imagen]) }}" alt="{{ $business->nombre }}" class="align size-medium_large avatar" width="50%"></a> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="geodir-bubble-meta-side">
                    <div class="geodir-output-location">
                    <div class="geodir-output-location geodir-output-location-mapbubble">
                        <div class="geodir_post_meta  geodir-field-post_title"><span class="geodir_post_meta_icon geodir-i-text">
                            <i class="fa fa-minus" aria-hidden="true"></i>
                            <span class="geodir_post_meta_title">Nombre : </span></span>{{ $business->nombre }}</div>
                        <div class="geodir_post_meta  geodir-field-address" itemscope="" itemtype="http://schema.org/PostalAddress">
                            <span class="geodir_post_meta_icon geodir-i-address"><i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span class="geodir_post_meta_title">Dirección: </span></span><span itemprop="streetAddress">{{ $business->address }}</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            </div>`;
            var marker = new google.maps.Marker({
                position: latLng,
                icon:image,
                map: map,
                title: '{{ $business->nombre }}'
            });
            var infowindow = new google.maps.InfoWindow();
            google.maps.event.addListener(marker, 'click', (function (marker) {
                return function () {
                    infowindow.setContent(content)
                    infowindow.open(map, marker);
                }
            })(marker));
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endif
@endsection

