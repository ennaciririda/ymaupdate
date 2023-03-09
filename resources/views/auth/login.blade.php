
<!DOCTYPE html>
<html>
<head>
  <title>How to Design Login & Registration Form Transition</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/css/authstyle.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="cont">
    <form method="POST" action="{{ route('login') }}" id="loginform">
    @csrf
    <div class="form sign-in">
      <h2>Sign In</h2>
                  <div class="form-group">

        <span>Email Address</span>
        <input type="email" name="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
                        <br><span class="invalid-feedback" style="color: white;">
                            <strong style="color : red;">{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                  </div>
                  <div class="form-group">

        <span>Password</span>
        <input type="password" name="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }} " required>
        @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong style="color : red;">{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                  </div>
      <button class="submit"  type="submit">Sign In</button>
      @if (Route::has('password.request'))
                                    <a class=" forgot-pass " id="forget_pass" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif


      <div class="social-media">
        <ul>
          <li><a href="#"> <img src="images/facebook.png"></a></li>
          <li> <a href="#"><img src="images/google.png"></a></li>
          <li><a href="#"><img src="images/github.png"></a></li>

        </ul>
      </div>
    </div>
  </form>

    <div class="sub-cont">
      <div class="img">
                 </div>


    </div>
  </div>


