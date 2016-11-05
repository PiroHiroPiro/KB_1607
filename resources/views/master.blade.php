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
    <div class="header">
        <div class="nav">
            <div class="header_inner">
                <!-- <h1><a href="/" class="logo">募金Tech</a></h1> -->
                <img class="logo" src="/img/logo-sample.png" href="">
                <ul>
                    <li><a href="/"><i class="fa fa-home"></i> Top</a></li>
                    <li id="last"><a href="/timeline"><i class="fa fa-th-large"></i> TimeLine</a></li>
                </ul>
                <div class="user_info">
                    <p>
                        @if (Auth::guest())
                        @else
                            <i class="fa fa-user"></i> <?php echo "Ian"; ?>
                        @endif
                    </p>
                    <p id="log_info">
                        @if (Auth::guest())
                            <a href="/auth/login"><i class="fa fa-sign-in"></i> Login</a>
                        @else
                            <a href="/auth/logout"><i class="fa fa-sign-out"></i> Logout</a>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>

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
