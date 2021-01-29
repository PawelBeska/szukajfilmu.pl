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
@yield('body')
<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        const Item = ({id, poster, url, title, rating}) => `
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
            url: "{{route('movies.ajax')}}",
            type: 'POST',
            data: {'_token': "{{csrf_token()}}"},
            success: function (data) {
                $('div.eOZwZm').html('').prepend(data['data'].map(Item).join(''));
                $('.paginator').html('').prepend(data[0]);
            },
            error: function (data) {
                console.log('error');
            }
        });
    });
    $("a").each(function (){if(this.href==window.location.href){             $(this).addClass("active"); $('.active > div').removeClass('dPEiZh').addClass('vKZZU');      }}     );
</script>