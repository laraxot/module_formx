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
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
</div>