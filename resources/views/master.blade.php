<!-- resources/views/master.blade.phpに保存 -->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>募金Tech - @yield('title')</title>
    <meta name="Author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{{asset('css/style.css')}}}">
    @yield('head')
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo-around" href="">
                    <img alt="募金Tech" src="/img/logo-sample.png" id="logo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="menu-list"><a href="/"><i class="fa fa-home"></i> Top</a></li>
                    <li class="menu-list"><a href="/timeline"><i class="fa fa-th-large"></i> TimeLine</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="/auth/register"><i class="fa fa-user-plus"></i> Sign Up</a></li>
                    @else
                        <li id="user-info">
                            <i class="fa fa-user"></i> ようこそ {{ Auth::user()->name }} さん
                        </li>
                    @endif
                    <li id="log-info">
                        @if (Auth::guest())
                            <a href="/auth/login"><i class="fa fa-sign-in"></i> Login</a>
                        @else
                            <a href="/auth/logout"><i class="fa fa-sign-out"></i> Logout</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- container -->
    <div class="container">
        @yield('content')
    </div>

    <!-- footer -->
    <div class="footer">
        <small class="copyright"><a href="" style="text-decoration: none"><!-- &copy; --><i class="fa fa-copyright"></i>ハルウララ</a></small>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>
