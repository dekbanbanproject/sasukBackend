<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | sasuk</title>
    <link rel="stylesheet" href="{{ asset('assets/css/dis.css') }}">

</head>
<body>
    <div class="login-form-wrap">
      <div class="left-section">
        <div class="title">
          <h1>sign in Sasuk!</h1>
          <p>sign in to your account!</p>
        </div>
        <div class="form">
            <form class="" action="{{route('auth.check')}}" method="post">
                @csrf
                  <input type="text" placeholder="Username" name="username" class="form-control">
                  <span class="text-danger">@error('username'){{ $message }} @enderror</span>

                  <input type="text" placeholder="Password" name="password" class="form-control">
                  <span class="text-danger">@error('password'){{ $message }} @enderror</span>

                  {{-- <span class="floatleft"><input type="checkbox"> Remember me</span> --}}
                  <span class="floatright"><a href="#">Forgot Password?</a></span>
                  <input type="submit" value="Sign In">
            </form>
           
            {{-- <div class="col-sm-12">
                <a href="{{ route('login.facebook') }}">
                  <input type="submit" value="Facebook"> 
                </a>
            </div>

            <div class="col-sm-12">
              <a href="{{ route('login.google') }}">
                <input type="submit" value="Google">  
              </a>
          </div> --}}
      
          <div class="create-account">
            Don,t have an Account? <a href="{{url('register')}}">Create</a>
          </div>
        </div>
      </div>
      {{-- <div class="right-section" style="background-image: url(../img/log.png); height: 540px; width: 597px;"> --}}
        <div class="right-section" style="background-image: url('{{ asset('img/log.jpg') }}" width="597px;" height="540px;">
        <div class="welcome-text">
          {{-- <h1>Welcome Back</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p> --}}
        </div>
      </div>
    </div>
  </body>
</html>