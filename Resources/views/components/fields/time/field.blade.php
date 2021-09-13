<<<<<<< HEAD
<<<<<<< HEAD
@php
  //https://italia.github.io/bootstrap-italia/docs/form/input/#esempi-di-campi-di-input

  /*original
    <div class="form-group">
      <input type="time" class="form-control" id="exampleInputTime" min="9:00" max="18:00">
      <label for="exampleInputTime">Campo di tipo ora</label>
    </div>  
  */

  /*esempio utilizzo
      <x-formx::input 
        type="time" 
        name="time" 
        label="time" 
        class="form-control" 
        id="exampleInputTime"
        min="9:00"
        max="18:00"
        />
  */
@endphp


@component($input_component)
    @slot('label')
        <label>
            {{ $label }}
        </label>
    @endslot
    @slot('input')
        <input type="time" {{ $attributes }} />
    @endslot
=======
@php
  //https://italia.github.io/bootstrap-italia/docs/form/input/#esempi-di-campi-di-input

  /*original
    <div class="form-group">
      <input type="time" class="form-control" id="exampleInputTime" min="9:00" max="18:00">
      <label for="exampleInputTime">Campo di tipo ora</label>
    </div>  
  */

  /*esempio utilizzo
      <x-formx::input 
        type="time" 
        name="time" 
        label="time" 
        class="form-control" 
        id="exampleInputTime"
        min="9:00"
        max="18:00"
        />
  */
@endphp


@component($input_component)
    @slot('label')
        <label>
            {{ $label }}
        </label>
    @endslot
    @slot('input')
        <input type="time" {{ $attributes }} />
    @endslot
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
=======
@php
  //https://italia.github.io/bootstrap-italia/docs/form/input/#esempi-di-campi-di-input

  /*original
    <div class="form-group">
      <input type="time" class="form-control" id="exampleInputTime" min="9:00" max="18:00">
      <label for="exampleInputTime">Campo di tipo ora</label>
    </div>  
  */

  /*esempio utilizzo
      <x-formx::input 
        type="time" 
        name="time" 
        label="time" 
        class="form-control" 
        id="exampleInputTime"
        min="9:00"
        max="18:00"
        />
  */
@endphp


@component($input_component)
    @slot('label')
        <label>
            {{ $label }}
        </label>
    @endslot
    @slot('input')
        <input type="time" {{ $attributes }} />
    @endslot
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
@endcomponent