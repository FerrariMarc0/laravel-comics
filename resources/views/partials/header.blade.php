{{-- header --}}
<header>
    <div class="d-flex justify-content-end pe-5 bg-primary">
        <span>Dc Power Visa</span>
        <span>Addictional Dc sites</span>
    </div>
    <div class="d-flex justify-content-center align-items-center py-2">
        <div>
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="dc-logo">
        </div>
        <div class="d-flex">
            @each('partials.menu', $menu, 'item')
        </div>
    </div>
</header>
{{-- header --}}
