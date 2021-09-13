<<<<<<< HEAD
<div class="dropdown">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{ LaravelLocalization::getCurrentLocaleName() }}
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
       @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            @if($localeCode!=$lang)
            @php
                //$url_panel='#';
                $url_lang=$_panel->langUrl($localeCode);
            @endphp
                <a class="dropdown-item" href="{{ $url_lang }}"  rel="alternate" hreflang="{{ $localeCode }}">{{ $properties['native'] }}</a>
            @endif
        @endforeach 
  </div>
=======
<div class="dropdown">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{ LaravelLocalization::getCurrentLocaleName() }}
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
       @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            @if($localeCode!=$lang)
            @php
                //$url_panel='#';
                $url_lang=$_panel->langUrl($localeCode);
            @endphp
                <a class="dropdown-item" href="{{ $url_lang }}"  rel="alternate" hreflang="{{ $localeCode }}">{{ $properties['native'] }}</a>
            @endif
        @endforeach 
  </div>
>>>>>>> 2393d3fda39ca4bd5aa64102bc85e8ce40f6b5ea
</div>