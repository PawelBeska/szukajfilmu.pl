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
   <script async src="https://www.google.com/recaptcha/api.js?render=6LcjfK8UAAAAAHrYWXRtyr3ku9V79_hORH0VNDEZ"></script>
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
        @yield('nav')
        <div class="container" style="max-width: 100%">

            @yield('body')

        </div>
    </div>



</div>
<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
<script>
    function ChangeUrl(title, url) {
        if (typeof (history.pushState) != "undefined") {
            var obj = { Title: title, Url: url };
            history.pushState(obj, obj.Title, obj.Url);
        } else {
            alert("Browser does not support HTML5.");
        }
    }

    $(document).ready(function () {
        const Genre = ({name}) => `
          <a class="sc-EHOje hnmWer" href="/genres/${name.split(' ').join('_') }">
                <div class="sc-htpNat dPEiZh">
                    <i class="fas fa-dot-circle fa-w-16 fa-1x"></i>
                    ${name}
                </div>
            </a>
        `;
        const Item = ({id, poster, title}) => `
     <a class="sc-hMqMXs iiEklA" href="${'/movie/' + title.split(' ').join('_') + '/' + id}">

<img style="" src="${poster}" class="sc-kEYyzF WiVpM ">
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
            url: "{{route('genres.ajax')}}",
            type: 'POST',
            data: {'_token':"{{csrf_token()}}"},
            success: function (data) {
                $('div#genres').html('').prepend(data.map(Genre).join(''));
            }
        });
        $.ajax({
            url: "{{route('movies.ajax')}}",
            type: 'POST',
            data: {'_token': "{{csrf_token()}}"},
            success: function (data) {
                $('div.eOZwZm').html('').prepend(data['data'].map(Item).join(''));
                $('.paginator').html('').prepend(data[0]);
            }
        });
    });
    $('a.play').on( "click", function(e) {
        e.preventDefault();
       grecaptcha.ready(function () {
           grecaptcha.execute('6LcjfK8UAAAAAHrYWXRtyr3ku9V79_hORH0VNDEZ', {
               action: 'homepage'
           }).then(function (token) {
               $.ajax({
                   url: location.href,
                   type: 'PUT',
                   data: {
                       '_token': "{{csrf_token()}}",
                       'data': $('#hero-search').val(),
                       'token':token,
                   },
                   success: function (data) {
                       $('iframe.play').attr('src', data).show();
                       console.log(data);
                   }
               });
           });
       });
    });
    $("a.sc-EHOje").each(function (){if(this.href==window.location.href){             $(this).addClass("active"); $('.active > div').removeClass('dPEiZh').addClass('vKZZU');      }}     );
</script>