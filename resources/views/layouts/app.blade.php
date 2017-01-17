<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <base href="{{URL::to('/')}}/">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font-circle-video.css" rel="stylesheet">

    <!-- font-family: 'Hind', sans-serif; -->
    <link href='https://fonts.googleapis.com/css?family=Hind:400,300,500,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css\easy-autocomplete.min.css">
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.easy-autocomplete.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/waitMe.min.js"></script>
    <link rel="stylesheet" href="css/waitMe.min.css">

    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>
<!-- logo, menu, search, avatar -->
<div class="container-fluid">
    <div class="row">
        <div class="navbar-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-sm-2 col-xs-2">
                        <a class="navbar-brand" href="/"><img src="images/logo.png" alt="Project name" class="logo" /></a>
                    </div>
                    <div class="col-lg-3 col-sm-10 col-xs-10">

                    </div>
                    <div class="visible-xs visible-sm clearfix"></div>
                    <div class="col-lg-6 col-sm-8 col-xs-12">
                        <form action="search.html" method="post">
                            <div class="topsearch">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Search" aria-describedby="sizing-addon2">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="cv cvicon-cv-video-file"></i>&nbsp;&nbsp;&nbsp;<span class="caret"></span></button>/
                                        <ul class="dropdown-menu">
                                            <li><a href="index.html#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                            <li><a href="index.html#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                            <li><a href="index.html#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                            <li><a href="index.html#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                            <li><a href="index.html#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="visible-xs clearfix"></div>
                    <div class="col-lg-2 col-sm-4  col-xs-8">
                        <div class="avatar pull-left">
                            @if (!Auth::guest())
                            <img style="width: 50px;height: 50px" src="{{ asset('images/avatar/'.$avatar->avatar_url) }}" alt="avatar" />
                            @endif
                            <span class="status"></span>
                        </div>
                        <div class="selectuser pull-left">
                            <div class="btn-group pull-right dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Üye
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    @if (Auth::guest())
                                        <li><a href="/register">Kayıt Ol</a></li>
                                        <li><a href="/login">Giriş Yap</a></li>
                                    @else
                                        <li><a href="">Profilim</a></li>
                                    @endif

                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /logo -->

<!-- goto -->
<div class="container-fluid">
    <div class="row">
        <div class="navbar-container2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-sm-2 col-xs-12">
                        <div class="goto">
                            Go to:
                        </div>
                    </div>
                    <div class="col-lg-3  col-sm-10 col-xs-12">
                        <div class="h-icons">
                            <a href="index.html#"><i class="cv cvicon-cv-liked" data-toggle="tooltip" data-placement="top" title="Liked Videos"></i></a>
                            <a href="index.html#"><i class="cv cvicon-cv-watch-later" data-toggle="tooltip" data-placement="top" title="Watch Later"></i></a>
                            <a href="index.html#"><i class="cv cvicon-cv-play-circle" data-toggle="tooltip" data-placement="top" title="Saved Playlist"></i></a>
                            <a href="index.html#"><i class="cv cvicon-cv-purchased" data-toggle="tooltip" data-placement="top" title="Purchased Videos"></i></a>
                            <a href="index.html#"><i class="cv cvicon-cv-history" data-toggle="tooltip" data-placement="top" title="History"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-10 col-xs-12">
                        <div class="h-resume">
                            <div class="play-icon">
                                <a href="index.html#"><i class="cv cvicon-cv-play"></i></a>
                            </div>
                            Resume:  <span class="color-default">Daredevil Season 2 : Episode 6 </span>
                        </div>
                    </div>
                    <div class="col-lg-1 col-sm-2 hidden-xs">
                        <div class="h-grid">
                            <a href="index.html#"><i class="cv cvicon-cv-grid-view"></i></a>
                            <a href="index.html#"><i class="cv cvicon-cv-list-view"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /goto -->

<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if(count($errors))
                    @foreach($errors->all() as $error)

                        <script>
                            toastr.error('{{ $error }}');
                        </script>

                    @endforeach
                @endif
                @if (session('success'))
                        <script>
                            toastr.success('{{session('success')}}');
                        </script>
                @endif




        @yield('content')
            </div>
        </div>
    </div>
</div>


<!-- footer -->
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="container padding-def">
                <div class="col-lg-1  col-sm-2 col-xs-12 footer-logo">
                    <a class="navbar-brand" href="index.html"><img src="images/logo.svg" alt="Project name" class="logo" /></a>
                </div>
                <div class="col-lg-7  col-sm-7 col-xs-12">
                    <div class="f-links">
                        <ul class="list-inline">
                            <li><a href="index.html#">About</a></li>
                            <li><a href="index.html#">Press</a></li>
                            <li><a href="index.html#">Copyright</a></li>
                            <li><a href="index.html#">Advertise</a></li>
                            <li><a href="index.html#">Help</a></li>
                        </ul>
                    </div>
                    <div class="delimiter"></div>
                    <div class="f-copy">
                        <ul class="list-inline">
                            <li><a href="index.html#">Terms</a></li>
                            <li><a href="index.html#">Privacy</a></li>
                            <li>Copyrights 2016 <a href="http://azyrusthemes.com/circlevideo/azyrusthemes.com">azyrusthemes.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-offset-1 col-lg-3 col-sm-3 col-xs-12">
                    <div class="f-icon pull-left">
                        <a href="index.html#"><i class="fa fa-facebook-square"></i></a>
                        <a href="index.html#"><i class="fa fa-twitter"></i></a>
                        <a href="index.html#"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <div class="f-lang pull-right">
                        <!-- Small button group -->
                        <div class="btn-group dropup pull-right">
                            <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Language <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="index.html#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                <li><a href="index.html#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                <li><a href="index.html#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                <li><a href="index.html#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                <li><a href="index.html#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /footer -->



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

</body>
</html>