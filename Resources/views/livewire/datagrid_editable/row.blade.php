<<<<<<< HEAD
<tr wire:ignore>
    @if (session()->has('error_message'))
        <div class="alert alert-danger" style="margin-top:30px;">x
          {{ session('error_message') }}
        </div>
    @endif
      @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
    @foreach($fields as $field)
        @php
            //dddx($field);
        @endphp
        <td>

            {{-- $field->setPrefix('rows.'.$index)->html($form_data,$row) --}}
            {{--

            --}}

            {{-- $field->setPrefix('rows.'.$index)->html() --}}
                {{ $field->html() }}
            {{--
            
            --}}
        </td>
    @endforeach
    <td>
        <button wire:click="rowUpdate()">
            <i class="fas fa-save"></i>
        </button>
    </td>
</tr>
=======
<tr wire:ignore>
    @if (session()->has('error_message'))
        <div class="alert alert-danger" style="margin-top:30px;">x
          {{ session('error_message') }}
        </div>
    @endif
      @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
    @foreach($fields as $field)
        @php
            //dddx($field);
        @endphp
        <td>

            {{-- $field->setPrefix('rows.'.$index)->html($form_data,$row) --}}
            {{--

            --}}

            {{-- $field->setPrefix('rows.'.$index)->html() --}}
                {{ $field->html() }}
            {{--
            
            --}}
        </td>
    @endforeach
    <td>
        <button wire:click="rowUpdate()">
            <i class="fas fa-save"></i>
        </button>
    </td>
</tr>
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
