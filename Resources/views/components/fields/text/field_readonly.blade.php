<<<<<<< HEAD
@php
    //https://italia.github.io/bootstrap-italia/docs/form/input/#readonly

    /*
    <div class="form-group">
        <input class="form-control" type="text" id="input-text-read-only" readonly>
        <label for="input-text-read-only">Contenuto in sola lettura</label>
    </div>
    */

    /*esempio di utilizzo
      <x-formx::input 
        type="text_readonly" 
        name="input-text-read-only" 
        label="input-text-read-only" 
        class="form-control" //utilizzare la classe "form-control-plaintext" per la forma stilizzata come testo normale
        id="input-text-read-only"
        value="contenuto di sola lettura"
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
        <input type="text" {{ $attributes }} readonly>
    @endslot
=======
@php
    //https://italia.github.io/bootstrap-italia/docs/form/input/#readonly

    /*
    <div class="form-group">
        <input class="form-control" type="text" id="input-text-read-only" readonly>
        <label for="input-text-read-only">Contenuto in sola lettura</label>
    </div>
    */

    /*esempio di utilizzo
      <x-formx::input 
        type="text_readonly" 
        name="input-text-read-only" 
        label="input-text-read-only" 
        class="form-control" //utilizzare la classe "form-control-plaintext" per la forma stilizzata come testo normale
        id="input-text-read-only"
        value="contenuto di sola lettura"
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
        <input type="text" {{ $attributes }} readonly>
    @endslot
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
@endcomponent