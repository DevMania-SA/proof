<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>{!! $subject !!}</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            {!! $msg !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
    </body>
</html>
