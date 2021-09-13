<<<<<<< HEAD
<<<<<<< HEAD
<!-- checkbox field -->

<div @include('crud::inc.field_wrapper_attributes') >
    @include('crud::inc.field_translatable_icon')
    <div class="checkbox">
    	<label>
    	  <input type="hidden" name="{{ $field['name'] }}" value="0">
    	  <input type="checkbox" value="1"

          name="{{ $field['name'] }}"

          @if (old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? false)
                 checked="checked"
          @endif

          @if (isset($field['attributes']))
              @foreach ($field['attributes'] as $attribute => $value)
    			{{ $attribute }}="{{ $value }}"
        	  @endforeach
          @endif
          > {!! $field['label'] !!}
    	</label>

        {{-- HINT --}}
        @if (isset($field['hint']))
            <p class="help-block">{!! $field['hint'] !!}</p>
        @endif
    </div>
</div>
=======
<!-- checkbox field -->

<div @include('crud::inc.field_wrapper_attributes') >
    @include('crud::inc.field_translatable_icon')
    <div class="checkbox">
    	<label>
    	  <input type="hidden" name="{{ $field['name'] }}" value="0">
    	  <input type="checkbox" value="1"

          name="{{ $field['name'] }}"

          @if (old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? false)
                 checked="checked"
          @endif

          @if (isset($field['attributes']))
              @foreach ($field['attributes'] as $attribute => $value)
    			{{ $attribute }}="{{ $value }}"
        	  @endforeach
          @endif
          > {!! $field['label'] !!}
    	</label>

        {{-- HINT --}}
        @if (isset($field['hint']))
            <p class="help-block">{!! $field['hint'] !!}</p>
        @endif
    </div>
</div>
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
<!-- checkbox field -->

<div @include('crud::inc.field_wrapper_attributes') >
    @include('crud::inc.field_translatable_icon')
    <div class="checkbox">
    	<label>
    	  <input type="hidden" name="{{ $field['name'] }}" value="0">
    	  <input type="checkbox" value="1"

          name="{{ $field['name'] }}"

          @if (old(square_brackets_to_dots($field['name'])) ?? $field['value'] ?? $field['default'] ?? false)
                 checked="checked"
          @endif

          @if (isset($field['attributes']))
              @foreach ($field['attributes'] as $attribute => $value)
    			{{ $attribute }}="{{ $value }}"
        	  @endforeach
          @endif
          > {!! $field['label'] !!}
    	</label>

        {{-- HINT --}}
        @if (isset($field['hint']))
            <p class="help-block">{!! $field['hint'] !!}</p>
        @endif
    </div>
</div>
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
