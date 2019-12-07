<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miracle Loading - main</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">

</head>

<body>
<div class="row">
    <div class="col text-center">
        <h1>Miracle Loading Cosmetics</h1>
        <p></p>
    </div>
</div>
<div class="row">
    <div class="col">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
            <div class="container"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link nav-column-border" href="{{ url('home') }}">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active nav-column-border" href="{{ url('skin-care') }}">Skin Care</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link nav-column-border" href="{{url('make-up')}}">Make-Up</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link nav-column-border" href="{{url('fragrance')}}">Perfumes</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link nav-column-border" href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="{{ url('cart') }}">CART</a></li>
                </ul>

                <form class="form-inline my-2"><input class="form-control" type="text"><button class="btn btn-primary" type="button">Search</button></form>
            </div>

        </nav>
    </div>
    <div class="container">
        <h1>Skin Care</h1>
        @foreach($skincares as $skincare)
            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="#">
                        <img src="{{$skincare->image}}" alt="{{$skincare->name}}" style="max-width:250px;max-height:250px;">
                    </a>
                    <div class="desc">{{$skincare->name}}</div>
                </div>
            </div>
        @endforeach



    </div>

</div>
</div>
</div>

<p></p>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>