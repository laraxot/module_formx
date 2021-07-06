<<<<<<< HEAD
@error($field->key . '.' . $key . '.' . $array_field->name)
    <div class="invalid-feedback d-block" role="alert">
        <strong>{{ $this->errorMessage($message) }}</strong>
    </div>
@elseif($array_field->help)
    <small class="form-text text-muted">{{ $array_field->help }}</small>
@enderror
=======
@error($field->key . '.' . $key . '.' . $array_field->name)
    <div class="invalid-feedback d-block" role="alert">
        <strong>{{ $this->errorMessage($message) }}</strong>
    </div>
@elseif($array_field->help)
    <small class="form-text text-muted">{{ $array_field->help }}</small>
@enderror
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
