<header class="uk-background-secondary">
    <div data-uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky" class="uk-sticky uk-sticky-fixed" style="position: fixed; top: 0px; width: 1904px;">
        <nav class="uk-navbar-container">
            <div class="uk-container">
                <div data-uk-navbar>
                    <div class="uk-navbar-left">
                        <a class="uk-navbar-item uk-logo uk-visible@m" href="/"><div style="font-family: system-ui;font-weight: bolder;">SzukajFilmu
                            </div></a>



                    </div>
                    <div class="uk-navbar-center uk-hidden@m">
                        <a class="uk-navbar-item uk-logo" href="/"><div style="font-family: system-ui;font-weight: bolder;">SzukajFilmu
                            </div></a>
                    </div>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li><a href="{{route('home.index')}}" >Home</a></li>
                            <li><a href="{{route('home.help')}}" >Pomoc</a></li>
                            <li><a href="{{route('home.contact')}}" >Kontakt</a></li>
                            @guest()
                            <li><a href="{{route('home.register')}}" >Rejestracja</a></li>
                            <li><a href="{{route('home.login')}}" >Logowanie</a></li>
                                @else
                                <li><a href="{{route('home.logout')}}" >Wyloguj</a></li>
                            @endguest()
                        </ul>




                        <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-toggle><span data-uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span></a>



                    </div>
                </div>
            </div>

        </nav>
    </div>
</header>
<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true" class="uk-offcanvas uk-offcanvas-overlay">
    <div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">

        <button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close="">
            <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                <line fill="none" stroke="#000" stroke-width="1.1" x1="1" y1="1" x2="13" y2="13"></line><line fill="none" stroke="#000" stroke-width="1.1" x1="13" y1="1" x2="1" y2="13"></line></svg></button>

        <ul class="uk-nav uk-nav-default">

            <li><a href="{{route('home.index')}}" >Home</a></li>
            <li><a href="{{route('home.help')}}" >Pomoc</a></li>
            <li><a href="{{route('home.contact')}}" >Kontakt</a></li>
            @guest()
                <li><a href="{{route('home.register')}}" >Rejestracja</a></li>
                <li><a href="{{route('home.login')}}" >Logowanie</a></li>
            @else
                <li><a href="{{route('home.logout')}}" >Wyloguj</a></li>
            @endguest()
        </ul>


    </div>
    <div></div></div>