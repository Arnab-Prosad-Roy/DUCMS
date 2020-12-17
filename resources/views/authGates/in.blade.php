<!DOCTYPE html>

   <html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8" />
        <title>Login and Registration Form with HTML5 and CSS3</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="{{asset('public/css/authStyle.css')}}">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
    </head>
    <body>
        <div class="container">
           
            <header>
                <h1>Login and Registration Form</h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form method="POST" action="{{ route('login') }}"  autocomplete="on">
                                @csrf
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" > Your email</label>
                                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd"> Your password </label>
                                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>
                                <p class="keeplogin">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                    <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                    </button>
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" >Your username</label>
                                    <input id="usernamesignup" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail"  > Your email</label>
                                    
                                    <input id="emailsignup" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" >Your password </label>
                                    <input id="passwordsignup" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" >Please confirm your password </label>
                                    
                                    <input id="passwordsignup_confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password">
                                </p>
                                <p class="signin button"> 
									<button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                    </button> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>