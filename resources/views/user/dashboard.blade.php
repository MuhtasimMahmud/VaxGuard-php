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

    <div class="container">

        {{--Navbar start--}}
        <div class="row">
            <div class="col md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <img src={{ asset('images/icon1.png') }} alt="">
                    <a> VaxGuard </a>
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


        {{--background image--}}
        <div class="content">
            <div class="row">
                <div class="col-md-7 functionButtons">
                    <div class="col-md-4 box">
                        <div class="bigButton">
                            <button><img src="{{ asset('images/list2.png') }}" alt=""> VACCINE LIST </button>
                        </div>
                    </div>

                    <div class="col-md-3 box">
                        <div class="buttons">
                            <button><img src="{{ asset('images/chequeStatus.png') }}" alt=""> Cheque Status </button>
                            <button><img src="{{ asset('images/vaccineCard.png') }}" alt=""> Vaccine Card </button>
                            <button><img src="{{ asset('images/birthCertificate.png') }}" alt=""> Birth Certificate </button>
                            <button><img src="{{ asset('images/faq.png') }}" alt=""> FAQ </button>
                        </div>
                    </div>
                </div>
            </div>


        </div>




        {{--nicher bar ta--}}
        <div class="lowerBox">

        </div>

        {{-- Just headline of the process--}}
        <div class="processHeadline">
            <div class="row">
                <div class="col-md-1">
                    <div class="markBox">

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="text">
                        <h4> The process of receiving the vaccines.</h4>
                    </div>
                </div>

            </div>


        </div>

        {{--Process --}}
        <div class="process">

            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src= {{ asset('images/hospitalRegistration.png') }} >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src= {{ asset('images/birthCertificate.png') }} >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src={{ asset('images/vaccineCard.png') }}>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>

        </div>

        {{--body end--}}







    </div>



</body>
</html>
