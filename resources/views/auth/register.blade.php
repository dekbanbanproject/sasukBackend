<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | sasukphonthong</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dis.css') }}">

</head>
<body>
    <div class="login-form-wrap">
      <div class="left-section">
        <div class="title">
          <h1>Sasuk Phonthong!</h1>
          <p>Register to your account!</p>
        </div>
        <div class="form">
          <form class="" action="{{route('auth.create')}}" method="post">
            @csrf

            <div results>
              @if (Session::get('success'))
              <div class="alert alert-success">
                {{ Session::get('success')}}
              </div>                 
              @endif
              @if (Session::get('fail'))
              <div class="alert alert-danger">
                {{ Session::get('fail')}}
              </div>                 
              @endif

            </div>
            <br>


            <input type="text" placeholder="Name" name="name" class="form-control">
            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
            <input type="text" placeholder="Username" name="username" class="form-control">
            <span class="text-danger">@error('username'){{ $message }} @enderror</span>
            <input type="text" placeholder="Password" name="password" class="form-control">
            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            {{-- <span class="floatleft"><input type="checkbox"> Remember me</span>
            <span class="floatright"><a href="#">Forgot Password?</a></span> --}}
            <input type="submit" value="Register">
          </form>
          <div class="create-account">
            Yuo have an Account? <a href="{{url('login')}}">Login</a>
          </div>
        </div>
      </div>
      <div class="right-section" style="background-image: url(../img/ris.png); height: 540px; width: 597px;">
        <div class="welcome-text">
          <h1>Welcome Back</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
        </div>
      </div>
    </div>
  </body>
</html>



