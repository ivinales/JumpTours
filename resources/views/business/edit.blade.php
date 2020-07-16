@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulario de Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('updateBusiness') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_empresa" value="{{$business->id}}">

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{$business->nombre}}" required autocomplete="nombre" autofocus>

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input pattern="+[0-9]{3}+[0-9]{8}" id="telefono" type="tel" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{$business->telefono}}" required autocomplete="telefono">

                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de negocio') }}</label>

                            <div class="col-md-6">
                                <select class="selectpicker" name="tipoNegocio">

                                    <option value="restaurant"  
                                    @if($business->tipoNegocio == 'restaurant') selected="selected"}}
                                    @endif
                                    >Restaurant
                                    </option>
                                    <option value="hoteleria"
                                    @if($business->tipoNegocio == 'hoteleria') selected="selected"}}
                                    @endif
                                    >Hoteleria</option>
                                    <option value="entretencion"
                                    @if($business->tipoNegocio == 'entretencion') selected="selected"}}
                                    @endif
                                    >Entretencion</option>
                                  </select>
                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="region" class="col-md-4 col-form-label text-md-right">{{ __('Region') }}</label>
                            <div class="col-md-6">
                                <select class="selectpicker" name="region">
                                    <option value="Coquimbo">Coquimbo</option>
                                </select>
                                 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="comuna" class="col-md-4 col-form-label text-md-right">{{ __('Comuna') }}</label>
                            <div class="col-md-6">
                                <select class="selectpicker" name="comuna">
                                    <option value="La Serena"
                                    @if($business->tipoNegocio == 'La Serena') selected="selected"}}
                                    @endif
                                    >La Serena</option>
                                    <option value="Coquimbo"
                                    @if($business->tipoNegocio == 'Coquimbo') selected="selected"}}
                                    @endif
                                    >Coquimbo</option>
                                    <option value="Andacollo"
                                    @if($business->comuna == 'Andacollo') selected="selected"}}
                                    @endif
                                    >Andacollo</option>
                                    <option value="La Higuera"
                                    @if($business->comuna == 'La Higuera') selected="selected"}}
                                    @endif
                                    >La Higuera</option>
                                    <option value="Paiguano"
                                    @if($business->comuna == 'Paiguano') selected="selected"}}
                                    @endif
                                    >Paiguano</option>
                                    <option value="Vicuña"
                                    @if($business->comuna == 'Vicuña') selected="selected"}}
                                    @endif
                                    >Vicuña</option>
                                    <option value="Illapel"
                                    @if($business->comuna == 'Illapel') selected="selected"}}
                                    @endif
                                    >Illapel</option>
                                    <option value="Canela"
                                    @if($business->comuna == 'Canela') selected="selected"}}
                                    @endif
                                    >Canela</option>
                                    <option value="Los Vilos"
                                    @if($business->comuna == 'Los Vilos') selected="selected"}}
                                    @endif
                                    >Los Vilos</option>
                                    <option value="Salamanca"
                                    @if($business->comuna == 'Salamanca') selected="selected"}}
                                    @endif
                                    >Salamanca</option>
                                    <option value="Ovalle"
                                    @if($business->comuna == 'hoteleOvalleria') selected="selected"}}
                                    @endif
                                    >Ovalle</option>
                                    <option value="Combarbalá"
                                    @if($business->comuna == 'Combarbalá') selected="selected"}}
                                    @endif
                                    >Combarbalá</option>
                                    <option value="Monte Patria"
                                    @if($business->comuna == 'Monte Patria') selected="selected"}}
                                    @endif
                                    >Monte Patria</option>
                                    <option value="Punitaqui"
                                    @if($business->comuna == 'Punitaqui') selected="selected"}}
                                    @endif
                                    >Punitaqui</option>
                                    <option value="Río Hurtado"
                                    @if($business->comuna == 'Río Hurtado') selected="selected"}}
                                    @endif
                                    >Río Hurtado</option>                                        
                                </select>
                                 
                            </div>
                        </div>

                        <div class="form-group row">

							
                            <label for="image_path" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}</label>

                            <div class="col-md-6">
                                <div class="container-avatar">
                                    <img src="{{ route('business.logo',['filename'=>$business->imagen]) }}" class="avatar" />
                                </div>
                                <input id="image_path" type="file" class="form-control{{ $errors->has('image_path') ? ' is-invalid' : '' }}" name="image_path">

                                @if ($errors->has('image_path'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image_path') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">Dirección</label>
                            <input class="form-control map-input {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{$business->address}}">
                            <input type="hidden" name="address_latitude" id="address-latitude" value="{{ ($business->address_latitude) ?? '0' }}" />
                            <input type="hidden" name="address_longitude" id="address-longitude" value="{{ ($business->address_longitude) ?? '0' }}" />
                            @if($errors->has('address'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div id="address-map-container" class="mb-2" style="width:100%;height:400px; ">
                            <div style="width: 100%; height: 100%" id="address-map"></div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Actualizar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    @parent
    <script src="{{ asset('js/main.js') }}"></script>
     <script src="{{ asset('js/app.js') }}" ></script>
    <script src="/js/mapInput.js"></script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
@stop

