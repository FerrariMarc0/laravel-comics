{{-- footer --}}
<footer>
    <section class="text-light d-flex" id="footer_top">
        <div class="d-flex py-5" id="footer_list">
            <div>
                <div>
                    <h3>DC Comics</h3>
                    @each('partials.footer-links', $dc_comics , 'link')
                </div>
                <div>
                    <h3>Shop</h3>
                    @each('partials.footer-links', $shop , 'link')
                </div>
            </div>
            <div>
                <div class="mx-4">
                    <h3>DC</h3>
                    @each('partials.footer-links', $dc , 'link')
                </div>
            </div>
            <div>
                <div>
                    <h3>Sites</h3>
                    @each('partials.footer-links', $sites , 'link')
                </div>
            </div>
        </div>
        <div id="logo_box">
            <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="dc-logo-bg">
        </div>
    </section>
    <section id="footer_bottom">
        <div class="d-flex justify-content-around align-items-center">
            <div class="py-4"><button class="p-2 bg-transparent border-primary text-light text-uppercase">Sign-up now!</button></div>
            <div class="d-flex align-items-center gap-3">
                <h5 class="text-primary text-uppercase me-3">Follow us</h5>
                @foreach ($footer_icons as $item)
                    <div id="footer_icons"><a href=""><img src="{{ Vite::asset($item)}}" alt="#"></a></div>
                @endforeach

            </div>
        </div>
    </section>
</footer>
{{-- footer --}}
