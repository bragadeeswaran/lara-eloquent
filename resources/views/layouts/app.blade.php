<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="canonical" href="https://mdbootstrap.com/components/progress-bars/" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta property="og:url" content="https://mdbootstrap.com/components/progress-bars/" />

    <meta property="og:image" content="http://mdbootstrap.com/wp-content/uploads/2016/05/progress-bars-min.jpg" />

    <meta name="twitter:title" content="Bootstrap Progress Bar - Material Design for Bootstrap" />

    <meta name="twitter:image" content="http://mdbootstrap.com/wp-content/uploads/2016/05/progress-bars-min.jpg" />

    <link rel="alternate" type="application/json+oembed" href="https://mdbootstrap.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmdbootstrap.com%2Fcomponents%2Fprogress-bars%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://mdbootstrap.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmdbootstrap.com%2Fcomponents%2Fprogress-bars%2F&#038;format=xml" />
    <title>Eloquent Model</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="https://mdbootstrap.com/live/_MDB4/docs/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="https://mdbootstrap.com/live/_MDB4/docs/css/mdb.min.css" rel="stylesheet">

    <!-- Custom Style -->
    <link href="https://mdbootstrap.com/live/_MDB4/docs/css/style.min.css" rel="stylesheet">

    <!-- Prism -->
    <link href="https://mdbootstrap.com/live/_MDB4/docs/css/prism.min.css" rel="stylesheet">

    <!-- To manage cards-->
    <link rel="canonical" href="https://mdbootstrap.com/components/cards/" />

    <meta property="og:title" content="Bootstrap Cards - Material Design for Bootstrap" />

    <meta property="og:url" content="https://mdbootstrap.com/components/cards/" />

    <meta name="twitter:description" content="Cards include options for headers and footers, a variety of content, background colors, and display." />
    <meta name="twitter:title" content="Bootstrap Cards - Material Design for Bootstrap" />

    <link rel="alternate" type="application/json+oembed" href="https://mdbootstrap.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmdbootstrap.com%2Fcomponents%2Fcards%2F" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="Bootstrap Dropdown - Material Design for Bootstrap" />

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://mdbootstrap.com/components/dropdowns/" />
    <meta property="og:url" content="https://mdbootstrap.com/components/dropdowns/" />

    <meta property="og:image" content="http://mdbootstrap.com/wp-content/uploads/2016/05/dropdown-min.jpg" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <meta name="twitter:image" content="http://mdbootstrap.com/wp-content/uploads/2016/05/dropdown-min.jpg" />
    <link rel="alternate" type="application/json+oembed" href="https://mdbootstrap.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmdbootstrap.com%2Fcomponents%2Fdropdowns%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://mdbootstrap.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmdbootstrap.com%2Fcomponents%2Fdropdowns%2F&#038;format=xml" />
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}


    <style>

        html { height: 100%; }
        body {
            font-family: 'Lato';
            height:100%;
        }

        .fa-btn {
            margin-right: 6px;
        }
       #app-layout label{
            font-size: 14px;
        }
        #app-layout .custom-footer{
            position:fixed;
            bottom:0;
            margin-bottom: 0;
            width:100%;
            height:60px;   /* Height of the footer */
        }
        .panel-shadow{
            -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
        }
        div.post-time{
            font-size: 15px;
            font-style: italic;
            font-weight: bold;
        }
        div.uname{
            text-transform: capitalize;
            font-size: 17px;
            font-style: italic;
            font-weight: bold;
        }
        div.comment-details{
            font-size: 15px;
        }
        div.card-wrapper{
            margin-bottom: 50%;
        }
        table#comments-table td{
            background: #FFFFFF;
            -webkit-box-shadow: 10px 10px 5px 0 #79b9f2;
            -moz-box-shadow: 10px 10px 5px 0 #79b9f2;
            box-shadow: 10px 10px 5px 0 #79b9f2;
        }
        div.panel-custom-heading{
            font-size:18px;
            font-weight:bold;
            text-decoration: underline;
            background: #79b9f2;
        }
       #app-layout ul.navbar-nav li a{
            font-size: 15px;
            font-weight: bold;
            color: #FFFFFF;
        }
        #app-layout ul{
            margin-top:10px;
        }
        #app-layout ul.navbar-nav li a:hover{
            background: #008000;
            color:#FFFFFF;
        }
        #app-layout i.user-image{
            font-size: 30px;
            margin:15px;
        }
        textarea#task-name{
            min-height: 200px;
            resize: none;
            padding:20px;
            font-size: 16px;
        }
        #app-layout div.card-rotating{
            height: 530px;
        }
        #app-layout #___follow_0{
            margin-top: 25px !important;
        }
        #app-layout .card-wrapper .card-up{
            height: 46% !important;
        }
    </style>
</head>
<body id="app-layout" background="http://www.publicdomainpictures.net/pictures/30000/velka/stone-background-1351849670HOg.jpg">
<nav class="navbar navbar-dark bg-primary">

    <div class="container">

        <!--Navbar Brand-->
        <a class="navbar-brand" href="#">Interest List</a>
        <!--Links-->
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/contact-us') }}">Feedback</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/comments') }}">Comments</a>
            </li>
        </ul>
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}" style="color: #ffffff;">Login</a></li>
                    <li><a href="{{ url('/register') }}" style="color: #ffffff;">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="login-user" data-toggle="" role="button" aria-expanded="false" style="color: #ffffff;">
                            {{ Auth::user()->name }} <span class=""></span>
                        </a>
                    </li>
                    @if(Auth::user())<li> <a href="{{ url('/logout') }}" style="color: #ffffff;"><i class="fa fa-btn fa-sign-out" style="color: #ffffff;"></i>Logout</a></li> @endif
                @endif
            </ul>



        </div>
 {{--       <!--Search form-->
        <form class="form-inline pull-xs-right">
            <input class="form-control" type="text" placeholder="Search">
        </form>--}}

    </div>

</nav>

@yield('content')

    <!-- JavaScripts -->
   {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>--}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- SCRIPTS -->

    <!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript" src="https://mdbootstrap.com/live/_MDB4/docs/js/jquery-2.2.1.min.js"></script>

<!-- Tooltips and Popups -->
<script type="text/javascript" src="https://mdbootstrap.com/live/_MDB4/docs/js/tether.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://mdbootstrap.com/live/_MDB4/docs/js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://mdbootstrap.com/live/_MDB4/docs/js/mdb.min.js"></script>

<!-- Prism -->
<script type="text/javascript" src="https://mdbootstrap.com/live/_MDB4/docs/js/prism.min.js"></script>


    <script type="text/javascript">
        Waves.attach('.btn, .btn-floating', ['waves-light']);
        Waves.attach('.view .mask', ['waves-light']);
        Waves.attach('.waves-light', ['waves-light']);
        Waves.attach('.navbar li', ['waves-light']);
        Waves.init();
    </script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
<nav class="navbar navbar-dark bg-primary custom-footer">

    <div class="container row">
        <p class="col-md-offset-6">© 2015 Copyright: bragadeeswaran@mail.asahitechnologies.com</p>
    </div>

</nav>
</body>
</html>
