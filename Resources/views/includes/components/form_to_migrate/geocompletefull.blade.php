<<<<<<< HEAD
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    {{ Form::label($name,   trans($view.'.field.'.$name), ['class' => 'sr-only control-label']) }}
    <div class="form-group search_container">
        {{ Form::text($name, $value, array_merge([
                    'class' => 'form-control form-control-lg geocompletefull search-input'
                    ,'placeholder'=> 'inserisci l\'indirizzo..','id'=>'pac-input'
                    ], $attributes)) }}
    </div>
    @if ( $errors->has($name) )
        <span class="help-block">
            <strong>{{ $errors->first($name) }}</strong>
        </span>
    @endif
</div>

{{  Theme::addScript('http://maps.googleapis.com/maps/api/js?libraries=places&key='.config('xra.google.maps.api') ) }}
{{  Theme::add('backend::js/bsGeoCompleteFull.js') }}
{{--
@push('scripts')
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap" async defer></script>
@endpush
--}}
=======
<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    {{ Form::label($name,   trans($view.'.field.'.$name), ['class' => 'sr-only control-label']) }}
    <div class="form-group search_container">
        {{ Form::text($name, $value, array_merge([
                    'class' => 'form-control form-control-lg geocompletefull search-input'
                    ,'placeholder'=> 'inserisci l\'indirizzo..','id'=>'pac-input'
                    ], $attributes)) }}
    </div>
    @if ( $errors->has($name) )
        <span class="help-block">
            <strong>{{ $errors->first($name) }}</strong>
        </span>
    @endif
</div>

{{  Theme::addScript('http://maps.googleapis.com/maps/api/js?libraries=places&key='.config('xra.google.maps.api') ) }}
{{  Theme::add('backend::js/bsGeoCompleteFull.js') }}
{{--
@push('scripts')
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap" async defer></script>
@endpush
--}}
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
    