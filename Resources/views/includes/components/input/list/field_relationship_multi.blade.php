@php
    //dddx(get_defined_vars());
    $field=transFields(get_defined_vars());//in xot helper
    $row=Form::getModel();
    $related_model = Theme::xotModel($field->related_name);
    $related_panel=Panel::get($related_model);
    $all=$related_model->get();
    //dddx($all);

@endphp
<input type="text" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}">
@foreach($all as $v)
    {{ $related_panel->optionLabel($v) }}
    <input type="checkbox" class="{{ $name }}_list" value="{{ $related_panel->optionId($v) }}">
@endforeach

@push('scripts')
<script>
    $(function() {
        $('.{{ $name }}_list').change(function() {
             $('.{{ $name }}_list').val('');
            $('.{{ $name }}_list').each(function( index ) {
                var old_val=$('#{{ $name }}').val();
                $('#{{ $name }}').val(old_val+','+$(this).val());

            });
        });
    });
</script>
@endpush