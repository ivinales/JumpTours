@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulario de Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('storeBusiness') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

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
                                <input pattern="+[0-9]{3}+[0-9]{8}" id="telefono" type="tel" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono">

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
                                    <option value="restaurant">Restaurant</option>
                                    <option value="hoteleria">Hoteleria</option>
                                    <option value="entretencion">Entretencion</option>
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
                                    <option value="La Serena">La Serena</option>
                                    <option value="Coquimbo">Coquimbo</option>
                                    <option value="Andacollo">Andacollo</option>
                                    <option value="La Higuera">La Higuera</option>
                                    <option value="Paiguano">Paiguano</option>
                                    <option value="Vicuña">Vicuña</option>
                                    <option value="Illapel">Illapel</option>
                                    <option value="Canela">Canela</option>
                                    <option value="Los Vilos">Los Vilos</option>
                                    <option value="Salamanca">Salamanca</option>
                                    <option value="Ovalle">Ovalle</option>
                                    <option value="Combarbalá">Combarbalá</option>
                                    <option value="Monte Patria">Monte Patria</option>
                                    <option value="Punitaqui">Punitaqui</option>
                                    <option value="Río Hurtado">Río Hurtado</option>                                        
                                </select>
                                 
                            </div>
                        </div>

                        <div class="form-group row">

							
                            <label for="image_path" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}</label>

                            <div class="col-md-6">
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
                            <input class="form-control map-input {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address') }}">
                            <input type="hidden" name="address_latitude" id="address-latitude" value="{{ old('latitude') ?? '0' }}" />
                            <input type="hidden" name="address_longitude" id="address-longitude" value="{{ old('longitude') ?? '0' }}" />
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
                                    {{ __('Registrar') }}
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

    