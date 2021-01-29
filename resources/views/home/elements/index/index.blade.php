<div class="uk-section section-hero" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
    <div class="uk-container uk-container-small">

        <p class="hero-image uk-text-center"><img src="{{URL::asset('assets/home/posts/imac.svg')}}" alt="SzukajFilmu.pl"></p>

        <h1 class="uk-heading-hero uk-text-center uk-margin-remove-top">Nudny wieczór?</h1>
        <p class="subtitle uk-text-lead uk-text-center"></p>


        <div class="hero-search">

            <!-- Html Elements for Search -->
            <div class="uk-position-relative">
                <form class="uk-search uk-search-default uk-width-1-1" name="search-hero" onsubmit="return false;">
                    <span data-uk-search-icon></span>
                    <input id="hero-search" class="uk-search-input" type="search" placeholder="Wpisz tytuł..." value="">
                </form>
                <ul id="hero-search-results" class="uk-position-absolute uk-width-1-1 uk-list"></ul>
            </div>
            <script>
                new TypeIt('p.subtitle', {
                    strings: ['Posiadamy tysiące ciekawych materiałów, znajdź swój!',"Nie zapomnij polubić nas na facebook'u","Życzymy miłego seansu!"],
                    speed: 80,
                    breakLines: false,
                    waitUntilVisible: true
                }).go();

                        $('#hero-search').keyup(function(e) {
                            if (this.value.length >=3) {
                               // grecaptcha.ready(function () {
                                 //   grecaptcha.execute('6LeVM5wUAAAAAEUIx4bFTUqLV3rJ9sjvZMBrXInP', {action: 'homepage'
                                  //  }).then(function (token) {
                                        $.ajax({
                                            url: '{{route("home.search")}}',
                                            type: 'POST',
                                            data: {
                                                '_token': "{{csrf_token()}}",
                                                'data': $('#hero-search').val(),
                                               // token
                                            },
                                            success: function (data) {
                                                let s = SimpleJekyllSearch({
                                                    searchInput: document.getElementById('hero-search'),
                                                    resultsContainer: document.getElementById('hero-search-results'),
                                                    noResultsText: '<li>Niczego nie znaleziono</li>',
                                                    searchResultTemplate: "<li><a href='{url_short}'>{name} ({quality}) ({version})</a></li>",
                                                    json: data,
                                                });
                                                s.search($('#hero-search').val())
                                            }
                                        });
                                   // });
                                //});
                            }



                    });
            </script>
        </div>


    </div>
</div>
