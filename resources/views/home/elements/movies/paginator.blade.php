

@if ($paginator->hasPages())
    {{-- Pagination Elements --}}



        @if($paginator->currentPage()!==1)
            <a class="sc-cMljjf fseGAb" href="{{str_replace("?page=".$paginator->currentPage(),'',url('/') .Request::getRequestUri())}}?page={{$paginator->currentPage()+1}}">
                <button style="border-bottom-right-radius: 0;border-top-right-radius: 0;  border-start-end-radius: 0;  border-end-end-radius: 0; "  class="sc-jWBwVP jWJdPa">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14 fa-1x " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="margin-right: 10px;">
                        <path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z">
                        </path>
                    </svg>
                </button>
            </a>
        @else
            <a class="sc-cMljjf fseGAb" style="pointer-events: none;" href="#">
                <button disabled style="border-bottom-right-radius: 0;border-top-right-radius: 0;  border-start-end-radius: 0;  border-end-end-radius: 0; "  class="sc-jWBwVP jWJdPa">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14 fa-1x " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="margin-right: 10px;">
                        <path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z">
                        </path>
                    </svg>
                </button>
            </a>
        @endif

    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            {{$element}}
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <a class="sc-cMljjf fseGAb" href="#">
                        <button style="border-radius: 0;"  class="sc-jWBwVP jWJdPa">
                            {{$page}}
                        </button>
                    </a>
                @else
                    @if($paginator->currentPage()<=$page+2&&$paginator->currentPage()>=$page-2)
                        @if(strpos(url('/') .Request::getRequestUri(),'?')== true)

                            @if(strpos(url('/') .Request::getRequestUri(),'?page')== true)
                                <a class="sc-cMljjf fseGAb" href="{{str_replace("?page=".$paginator->currentPage(),'',url('/') .Request::getRequestUri())}}?page={{$page}}">
                                    <button style="border-radius: 0;"  class="sc-jWBwVP jWJdPa">
                                        {{$page}}
                                    </button>
                                </a>
                            @else()
                                <a class="sc-cMljjf fseGAb" href="{{str_replace("?page=".$paginator->currentPage(),'',url('/') .Request::getRequestUri())}}&page={{$page}}">
                                    <button style="border-radius: 0;"  class="sc-jWBwVP jWJdPa">
                                        {{$page}}
                                    </button>
                                </a>

                            @endif()
                        @else
                            <a class="sc-cMljjf fseGAb" href="{{url('/') .Request::getRequestUri()}}?page={{$page}}">
                                <button style="border-radius: 0;"  class="sc-jWBwVP jWJdPa">
                                    {{$page}}
                                </button>
                            </a>

                        @endif
                    @endif()
                @endif
            @endforeach
        @endif

    @endforeach


        @if($paginator->currentPage()!==$paginator->lastPage())
            <a class="sc-cMljjf fseGAb" href="{{str_replace("?page=".$paginator->currentPage(),'',url('/') .Request::getRequestUri())}}?page={{$paginator->currentPage()+1}}">
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
        @else
            <a disabled="true" style="pointer-events: none;" class="sc-cMljjf fseGAb" href="#">
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

        @endif

@endif
<script>



        $('.paginator').find('a').on('click', function (e) {
            e.preventDefault();
            $.ajax({
                url: $(this).attr('href'),
                type: 'post',
                data: {'_token': "{{csrf_token()}}"},

                success: function (data) {
                    $('div.eOZwZm').html('').prepend(data['data'].map(({id, poster, url, title, rating}) => `
     <a class="sc-hMqMXs iiEklA" href="${'/movie/' + title.split(' ').join('_') + '/' + id}">
<img style="" src="${poster}" class="sc-kEYyzF WiVpM">
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
`).join(''));
                    $('.paginator').html('').prepend(data[0]);
                },
            })
        });
        $(document).on("click touchend", ".iiEklA", function (e) {
            e.preventDefault();
            ChangeUrl('Movie', $(this).attr('href'));
            $(".active").each(function (){          $(this).removeClass("active");  }     );
            $(".vKZZU").each(function (){ $(this).removeClass('vKZZU').addClass('dPEiZh');}     );
            $.ajax({
                url: $(this).attr('href'),
                type: 'POST',
                data: {'_token': "{{csrf_token()}}"},
                success: function (data) {
                    $('.container').html(data);
                },
                error: function (data) {
                    console.log('error');
                }
            });
        });

</script>