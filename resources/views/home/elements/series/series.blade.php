<head>
    <meta charset="utf-8">

    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,maximum-scale=1,user-scalable=0">
    <meta name="theme-color" content="#000000">
    <meta content="website" property="og:type">
    <meta content="/preview.jpg" property="og:image">
    <meta content="Movie Library" property="og:title">
    <title>Popular Movies</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('assets/home/css/series.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/home/css/elements.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <meta name="description"
          content="A Movie Library where you can check all your favorite movies, as well as the cast of it, and so mucnh more! Made with ❤️ by Fidalgo"
          data-react-helmet="true">
    <meta charset="utf-8" data-react-helmet="true">
</head>
<style>
    .sc-htpNat i{
        margin-right: 10px;
    }
    .hKouvO {

        position: relative;
        display: flex;
        -moz-box-align: center;
        align-items: center;
        -moz-box-pack: center;
        justify-content: center;
        box-shadow: 0 4px 8px var(--shadow-color);
        background-color: var(--color-primary-dark);
        border: 1px solid var(--color-primary);
        width: 30rem;
        cursor: auto;
        padding: 2rem;
        height: 2rem;
        outline: currentcolor none medium;
        border-radius: 10rem;
        transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1) 0s;

    }
    .ujvev {

        line-height: 1;
        pointer-events: auto;
        cursor: pointer;
        background-color: transparent;
        border: medium none;
        outline: currentcolor none medium;
        color: var(--text-color);

    }
    .fjXCUh:focus, .fjXCUh:active {

        outline: currentcolor none medium;

    }
    .fjXCUh {

        font-size: 14px;
        line-height: 1;
        font-weight: 300;
        background-color: transparent;
        width: 100%;
        margin-left: 1rem;
        color: var(--text-color);
        border: medium none;
        transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1) 0s;

    }
</style>
<div id="root">
    <div class="sc-gxMtzJ htGafD">
        <div style="position: sticky; top: 0px;">
            <div class="sc-bxivhb olYXk">
                <a class="sc-bdVaJa hJxGrr" href="/">
                    <img src="{{URL::asset('assets/series/logo.svg')}}"  class="sc-bwzfXH jJRFFH">
                </a>
                <h2 class="sc-ifAKCX eqSXoD">Szukaj</h2>
                <input class="search" type="text">
                <h2 class="sc-ifAKCX eqSXoD">Odkrywaj</h2>
                <a class="sc-EHOje hnmWer active" href="/discover/Popular">
                    <div class="sc-htpNat vKZZU">
                        <i class="fas fa-heart fa-w-16 fa-1x"></i>
                       Popularne
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/discover/Top Rated">
                    <div class="sc-htpNat dPEiZh">
                        <i class="fas fa-poll fa-w-14 fa-1x "></i>
                        Najlepiej oceniane
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/discover/Upcoming">
                    <div class="sc-htpNat dPEiZh">
                       <i class="fas fa-calendar fa-w-14 fa-1x"></i>
                        Najnowsze
                    </div>
                </a>
                <h2 class="sc-ifAKCX eqSXoD">Gatunki</h2><a class="sc-EHOje hnmWer" href="/genres/Action">
                    <div class="sc-htpNat dPEiZh">
                        <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                        Action
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/genres/Adventure">
                    <div class="sc-htpNat dPEiZh">
                          <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                        Adventure
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/genres/Animation">
                    <div class="sc-htpNat dPEiZh">
                          <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                        Animation
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/genres/Comedy">
                    <div class="sc-htpNat dPEiZh">
                          <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                        Comedy
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/genres/Crime">
                    <div class="sc-htpNat dPEiZh">
                          <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                        Crime
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/genres/Documentary">
                    <div class="sc-htpNat dPEiZh">
                          <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                        Documentary
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/genres/Drama">
                    <div class="sc-htpNat dPEiZh">
                          <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                        Drama
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/genres/Family">
                    <div class="sc-htpNat dPEiZh">
                          <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                        Family
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/genres/Fantasy">
                    <div class="sc-htpNat dPEiZh">
                          <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                        Fantasy
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/genres/History">
                    <div class="sc-htpNat dPEiZh">
                          <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                        History
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/genres/Horror">
                    <div class="sc-htpNat dPEiZh">
                          <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                        Horror
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/genres/Music">
                    <div class="sc-htpNat dPEiZh">
                          <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                        Music
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/genres/Mystery">
                    <div class="sc-htpNat dPEiZh">
                          <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                        Mystery
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/genres/Romance">
                    <div class="sc-htpNat dPEiZh">
                          <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                        Romance
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/genres/Science Fiction">
                    <div class="sc-htpNat dPEiZh">
                          <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                        Science Fiction
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/genres/TV Movie">
                    <div class="sc-htpNat dPEiZh">
                          <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                        TV Movie
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/genres/Thriller">
                    <div class="sc-htpNat dPEiZh">
                          <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                        Thriller
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/genres/War">
                    <div class="sc-htpNat dPEiZh">
                          <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                        War
                    </div>
                </a><a class="sc-EHOje hnmWer" href="/genres/Western">
                    <div class="sc-htpNat dPEiZh">
                          <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                        Western
                    </div>
                </a></div>
        </div>
        <div class="container" style="max-width: 100%;">

            <div class="sc-dfVpRl ctiErJ">
                <div class="sc-iRbamj lgPkKI">
                    <div class="sc-ckVGcZ JffLV">
                        <div class="col-md-12">
                            <h1 class="sc-kpOJdX fJXXPI">Popularne</h1>
                            <h2 class="sc-dxgOiQ hcybVV">seriale</h2>
                        </div>

                    </div>
                    <div class="sc-jAaTju eOZwZm">

                    </div>

                    <div class="sc-brqgnP jPAWwh">
                        <a class="sc-cMljjf fseGAb" href="/discover/Popular?page=2">
                            <button style="
    border-bottom-right-radius: 0;
    border-top-right-radius: 0;
                            border-start-end-radius: 0;

                            border-end-end-radius: 0;

                         "  class="sc-jWBwVP jWJdPa">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14 fa-1x " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="margin-right: 10px;">
                                    <path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z">

                                    </path>
                                </svg>
                            </button>
                        </a>
                        <a class="sc-cMljjf fseGAb" href="/discover/Popular?page=2">
                            <button style="border-radius: 0;"  class="sc-jWBwVP jWJdPa">
                             2
                            </button>
                        </a>
                        <a class="sc-cMljjf fseGAb" href="/discover/Popular?page=2">
                            <button style="border-radius: 0;"  class="sc-jWBwVP jWJdPa">
                               3
                            </button>
                        </a>
                        <a class="sc-cMljjf fseGAb" href="/discover/Popular?page=2">
                            <button style="border-radius: 0;" class="sc-jWBwVP jWJdPa">
                                4
                            </button>
                        </a>
                        <a class="sc-cMljjf fseGAb" href="/discover/Popular?page=2">
                            <button style="border-start-start-radius: 0;


border-end-start-radius: 0;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
" class="sc-jWBwVP dkfWMn">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-right"
                                     class="svg-inline--fa fa-arrow-right fa-w-14 fa-1x " role="img"
                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="margin-left: 10px;">
                                    <path fill="currentColor"
                                          d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        const Item = ({id, imagePath, url, title, rating}) => `
     <a class="sc-hMqMXs iiEklA" href="${'/movie/' + title.split(' ').join('_') + '/' + id}">

<img style="" src="${imagePath}" class="sc-kEYyzF WiVpM">
                            <div class="sc-hSdWYo ccoIji"><h2 class="sc-iAyFgw iRKDtX">${title}</h2>
                                <div class="sc-eHgmQL fNEQwt">
                                <span style="display: inline-block; direction: ltr;" class="sc-jKJlTe ewZBfm">
                                    <span style="cursor: inherit; display: inline-block; position: relative;">
                                          <i class="fas fa-star fa-w-18 fa-lg sc-eNQAEJ drxNqG"></i>
                                              <i class="fas fa-star fa-w-18 fa-lg sc-eNQAEJ drxNqG"></i>
                                               <i class="fas fa-star fa-w-18 fa-lg sc-eNQAEJ drxNqG"></i>
                                               <i class="fas fa-star fa-w-18 fa-lg sc-eNQAEJ drxNqG"></i>
                                               <i class="fas fa-star fa-w-18 fa-lg sc-eNQAEJ drxNqG"></i>
                                    </span>
                                  </span>

                                </div>
                            </div>
                        </a>
`;

        $.ajax({
            url: "{{route('series.ajax')}}",
            type: 'POST',
            data: {'_token': "{{csrf_token()}}"},
            success: function (data) {
                console.log(data)
                $('div.eOZwZm').html('').prepend(data.map(Item).join(''));
                $('ul.paginator').html(data[0]);
            },
            error: function (data) {
                console.log('error');
            }
        });
    });
</script>