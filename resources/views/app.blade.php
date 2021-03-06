<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulario A3BPO</title>

        <link href="{{ asset('bs3/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/bootstrap-reset.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="{{asset('/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('/css/style-responsive.css')}}" rel="stylesheet" />

        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        @yield('scripts')

    </head>
    <body class="login-body">
        @if (Auth::check())    
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/') }}">Inicio</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                        <li><a href="{{ url('/auth/login') }}">Iniciar Sesion</a></li>
                        <li><a href="{{ url('/auth/register') }}">Regitrar</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/auth/logout') }}">Salir</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @endif
        <div class="container">

            @yield('content')

        </div>
    </body>
    <body>




        <!-- Scripts -->
        <script src="/js/jquery-2.1.4.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <link href='/css/jquery-ui.min.css' rel='stylesheet' type='text/css'>
        <link href='/css/jquery-ui.min.css' rel='stylesheet' type='text/css'>
        <link href='/css/styles.css' rel='stylesheet' type='text/css'>                       
        <script src="/js/jquery-ui.min.js"></script>
        <script src="/js/main.js"></script>
        <script src="/js/date.js"></script>        
        <script src="/js/jFormslider.js"></script>


    </body>
</html>
