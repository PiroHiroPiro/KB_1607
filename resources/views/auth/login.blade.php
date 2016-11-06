<!DOCTYPE html>
<html lang="ja">

<head>
    <title>募金Tech - Login</title>
    <meta charset="UTF-8">
    <meta name="Author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{{asset('css/auth.css')}}}">
</head>

<body>
    <div>
        <button type="button" class="btn btn-default btn-circle btn-xl" onclick="location.href='/'">
            <i class="fa fa-mail-reply"></i>
        </button>
    </div>

    <!-- login -->
    <div class="login_inner">
       <img class="logo" src="/img/logo-sample.png">
       <form method="POST" action="/auth/login">
           <div class="form_inner">
               {!! csrf_field() !!}
               <div class="input-group input-group-lg">
                   <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="&#xf0e0; E-mail">
               </div>
               <div class="input-group input-group-lg">
                   <input type="password" class="form-control" name="password" id="password" placeholder="&#xf084;  Pass Word">
               </div>
               <div class="btn-group" role="group">
                   <button type="submit" class="btn btn-default">Login</button>
               </div>
           </div>
       </form>
        <p><a href="/auth/register">新規登録はこちら</a></p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>
