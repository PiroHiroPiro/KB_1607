<!DOCTYPE html>
<html lang="ja">

<head>
    <title>募金Tech - Sign Up</title>
    <meta charset="UTF-8">
    <meta name="Author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{{asset('css/auth.css')}}}">
</head>

<body>
    <!-- sign up -->
    <div class="signup_inner">
       <img class="logo" src="/img/logo-sample.png">
       <form method="POST" action="/auth/register">
           <div class="form_inner">
               {!! csrf_field() !!}
               <div class="input-group input-group-lg">
                   <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="&#xf007; Name">
               </div>
               <div class="input-group input-group-lg">
                   <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="&#xf0e0; E-mail">
               </div>
               <div class="input-group input-group-lg">
                   <input type="password" class="form-control" name="password" id="password" placeholder="&#xf084;  Password">
               </div>
               <div class="input-group input-group-lg">
                   <input type="password" class="form-control" name="password_confirmation" id="password" placeholder="&#xf084;  Confirm Password">
               </div>
               <div class="btn-group" role="group">
                   <button type="submit" class="btn btn-default">Sign Up</button>
               </div>
           </div>
       </form>
       <p><a href="/auth/login">ログインはこちら</a></p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>

</html>
