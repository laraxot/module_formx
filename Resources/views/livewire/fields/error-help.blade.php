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
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
