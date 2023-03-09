

<link rel="stylesheet" type="text/css" href="assets/css/authstyle.css">



<div class="cont" >

<div class="sub-cont">
<div class="img">
</div>
</div>
    <form method="POST" action="{{ route('register') }}" class="form" >
    @csrf
        <h2>Sign Up</h2>
        <div class="form-group">
            <span class="label" >{{ __('Name') }}</span>


                <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

        </div>

        <div class="form-group ">
            <span class="label">{{ __('E-Mail Address') }}</span>


                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

        </div>

        <div class="form-group ">
            <span class="label">{{ __('Password') }}</span>


                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

        </div>

        <div class="form-group ">
            <span class="label">{{ __('Confirm Password') }}</span>

                <input id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password">

        </div>



                <button type="submit" class="submit">
                    {{ __('Register') }}
                </button>


    </form>
</div>

