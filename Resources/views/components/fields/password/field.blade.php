<<<<<<< HEAD
@php
    //https://italia.github.io/bootstrap-italia/docs/form/input/#input-password

    Theme::add($comp_ns.'/css/forms.scss');
    Theme::add($comp_ns.'/css/form-password.scss');
    Theme::add($comp_ns.'/js/password-strength-meter.js');

@endphp
@component($input_component)
    @slot('label')
        <label {{-- $label_attributes --}}>
            {{ $label }}
        </label>
    @endslot
    @slot('input')
        <input type="password" {{ $attributes }} />
    @endslot
=======
@php
    //https://italia.github.io/bootstrap-italia/docs/form/input/#input-password

    Theme::add($comp_ns.'/css/forms.scss');
    Theme::add($comp_ns.'/css/form-password.scss');
    Theme::add($comp_ns.'/js/password-strength-meter.js');

@endphp
@component($input_component)
    @slot('label')
        <label {{-- $label_attributes --}}>
            {{ $label }}
        </label>
    @endslot
    @slot('input')
        <input type="password" {{ $attributes }} />
    @endslot
>>>>>>> 1200272d778a2826f908f04c7e5060dc0a04f291
@endcomponent