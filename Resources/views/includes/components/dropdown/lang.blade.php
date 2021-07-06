<<<<<<< HEAD
<li class="nav-item dropdown">
    <a id="docsDropdownMenuLink" href="index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle ">
                {{ LaravelLocalization::getCurrentLocaleName() }}
    </a>
    <div aria-labelledby="docsDropdownMenuLink" class="dropdown-menu dropdown-menu-right">
        {{--
        <h6 class="dropdown-header font-weight-normal">Documentation</h6>
            --}}
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            @if($localeCode!=$lang)
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"  
            class="dropdown-item">
                {{ $properties['native'] }}
            </a>
            @endif
        @endforeach

    </div>
</li>
=======
<li class="nav-item dropdown">
    <a id="docsDropdownMenuLink" href="index.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle ">
                {{ LaravelLocalization::getCurrentLocaleName() }}
    </a>
    <div aria-labelledby="docsDropdownMenuLink" class="dropdown-menu dropdown-menu-right">
        {{--
        <h6 class="dropdown-header font-weight-normal">Documentation</h6>
            --}}
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            @if($localeCode!=$lang)
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"  
            class="dropdown-item">
                {{ $properties['native'] }}
            </a>
            @endif
        @endforeach

    </div>
</li>
>>>>>>> 84b1e510c2e9ebc238a2d8cf0355c08037f3cc0b
