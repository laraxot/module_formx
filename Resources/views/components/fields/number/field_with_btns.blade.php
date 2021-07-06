<<<<<<< HEAD
{{--
<label>
    {{ $label }}
</label>
<input type="text" {{ $attributes->merge(['class'=>'input-number']) }} />
--}}
<div class="w-100">
  <label for="{{-- $name --}}" class="input-number-label">{{ $label }}</label>
  <span class="input-number">
    <input type="number" value="100">
    <button class="input-number-add">
      <span class="sr-only">Aumenta valore</span>
    </button>
    <button class="input-number-sub">
      <span class="sr-only">Diminuisci valore</span>
    </button>
  </span>
</div>

{{ Theme::add($comp_ns.'/js/input-numer.js') }}
=======
{{--
<label>
    {{ $label }}
</label>
<input type="text" {{ $attributes->merge(['class'=>'input-number']) }} />
--}}
<div class="w-100">
  <label for="{{-- $name --}}" class="input-number-label">{{ $label }}</label>
  <span class="input-number">
    <input type="number" value="100">
    <button class="input-number-add">
      <span class="sr-only">Aumenta valore</span>
    </button>
    <button class="input-number-sub">
      <span class="sr-only">Diminuisci valore</span>
    </button>
  </span>
</div>

{{ Theme::add($comp_ns.'/js/input-numer.js') }}
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
