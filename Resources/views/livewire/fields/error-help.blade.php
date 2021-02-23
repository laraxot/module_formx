<<<<<<< HEAD
@error($field->key)
    <div class="invalid-feedback d-block" role="alert">
        <strong>{{ $this->errorMessage($message) }}</strong>
    </div>
@elseif($field->help)
    <small class="form-text text-muted">{{ $field->help }}</small>
@enderror
=======
@error($field->key)
    <div class="invalid-feedback d-block" role="alert">
        <strong>{{ $this->errorMessage($message) }}</strong>
    </div>
@elseif($field->help)
    <small class="form-text text-muted">{{ $field->help }}</small>
@enderror
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
