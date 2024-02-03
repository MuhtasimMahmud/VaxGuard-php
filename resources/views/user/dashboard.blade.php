<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="">

        {{--Navbar start--}}
        <div class="row">
            <div class="col md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <img src={{ asset('images/icon1.png') }} alt="">
                    <div class="collapse navbar-collapse mr-5" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                            <a class="nav-item nav-link" href="#">Features</a>
                            <a class="nav-item nav-link" href="#">Pricing</a>
                            <a class="nav-item nav-link disabled" href="#">Disabled</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        {{--Navbar end--}}

        {{--<img src={{ asset('images/bg.jpg') }} alt="">--}}


        {{--body start--}}
        <div class="content">

        </div>


        {{--body end--}}



    </div>

</body>
</html>
