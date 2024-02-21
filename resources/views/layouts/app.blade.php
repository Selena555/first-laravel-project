<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <!--

Template 2085 Neuron

http://www.tooplate.com/view/2085-neuron

-->

    {{--    <link rel="stylesheet" href="{{ asset('resources/css/bootstrap.min.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('resources/css/font-awesome.min.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('resources/css/magnific-popup.css') }}">--}}
    {{--    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">--}}
    <!-- Main css -->
    <link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>
            <a href="index.html" class="navbar-brand">Neuron</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>

        @yield('content')

        <footer>
            <div class="container">
                <div class="row">

                    <div class="col-md-5 col-md-offset-1 col-sm-6">
                        <h3>Neuron Studio</h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        <div class="footer-copyright">
                            <p>Copyright &copy; 2017 Your Company - Design: Tooplate</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-md-offset-1 col-sm-6">
                        <h3>Talk to us</h3>
                        <p><i class="fa fa-globe"></i> 512 Delicious Street, San Francisco, CA 10880</p>
                        <p><i class="fa fa-phone"></i> 010-020-0990</p>
                        <p><i class="fa fa-save"></i> info@company.com</p>
                    </div>

                    <div class="clearfix col-md-12 col-sm-12">
                        <hr>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-dribbble"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </footer>

        <!-- Back top -->
        <a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>
    </div>
</div>

@vite([
    'resources/js/jquery.js',
    'resources/css/app.css',
    'resources/css/bootstrap.min.css',
    'resources/css/font-awesome.min.css',
    'resources/css/magnific-popup.css',
    'resources/js/app.js',
    'resources/js/custom.js',
    'resources/js/bootstrap.min.js',
    'resources/js/particles.min.js',
    'resources/js/jquery.parallax.js',
    'resources/js/smoothscroll.js',

])

<!-- SCRIPTS -->
{{--<script src="js/app.js"></script>--}}
{{--<script src="js/bootstrap.js"></script>--}}
{{--<script src="js/custom.js"></script>--}}
{{--<script src="js/smoothscroll.js"></script>--}}
{{--<script src="js/jquery.js"></script>--}}
{{--<script src="js/jquery.parallax.js"></script>--}}
{{--<script src="js/particles.min.js"></script>--}}


</body>
</html>
