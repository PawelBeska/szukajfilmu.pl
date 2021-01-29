<div class="uk-section">
    <div class="uk-container uk-container-xsmall">
        <h3 class="uk-margin-medium-top">Logowanie</h3>

        {!! Form::open(['class'=>'uk-form-stacked uk-margin-medium-top sign__form','url'=>route('home.login.ajax')]) !!}
        <div id="error"></div>
        <div class="uk-margin-medium-bottom">
            {!! Form::label('login','Login:',['class'=>'uk-form-label uk-margin-small-bottom']) !!}
                <div class="uk-form-controls">
                    {!! Form::text('login',null,['class'=>"uk-input uk-form-large uk-border-rounded",'required']) !!}
                </div>
            </div>
            <div class="uk-margin-medium-bottom">
                {!! Form::label('password','Hasło:',['class'=>'uk-form-label uk-margin-small-bottom']) !!}
                <div class="uk-form-controls">
                    {!! Form::password('password',['class'=>"uk-input uk-form-large uk-border-rounded",'required']) !!}
                </div>
            </div>



               {!! Form::submit('Zaloguj',['class'=>"uk-button uk-button-primary uk-button-large uk-width-1-1 uk-border-rounded"]) !!}
            </div>
        {!! Form::close() !!}

    <script>
        let sign__form = $("form.sign__form");
        sign__form.submit(function (e) {
            e.preventDefault();
            $.ajax({
                url: sign__form.attr('action'),
                type: 'POST',
                data: sign__form.serialize(),
                success: function (data) {
                    $('#error').empty();
                    if(data['error'])
                    {
                        $('#error').prepend('<div class="bar info">' + data['error'] + ' </div>');
                    }
                    if(data['success']) {
                        $('#error').prepend('<div class="bar info">' + data['success'] + ' </div>');
                        location.reload();
                    }
                },
                error: function (data) {
                    $('#error').empty();
                    let l = JSON.parse(data.responseText);
                    let i = 0;
                    $.each(l['errors'], function (heading, text) {
                        i++;
                        $('#error').prepend('<div class="bar info">' +text + ' </div>');
                    });
                }
            });
        });
    </script>

    </div>
</div>