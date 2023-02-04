
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Halaman Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{asset('template_login')}}/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{asset('template_login')}}/css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('{{asset('template_login')}}/images/bg.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="{{asset('template_login')}}/images/bg ok.jpg" alt="">
				</div>
				<form method="POST" action="{{ route('login') }}">
                    @csrf
					<h3>Login Admin</h3>
                    <h4>Selamat Datang di Aplikasi Simonev Dokrenda</h4>

					<div class="form-wrapper">
						<input  placeholder="email" id="email" type="email" name="email" class="form-control" required>
						<i class="zmdi zmdi-email"></i>
					</div>

					<div class="form-wrapper">
						<input type="password" id="password" placeholder="Password" name="password" class="form-control" required>
						<i class="zmdi zmdi-lock"></i>
					</div>

					<button>

                        {{ __('Login') }}
					</button>
				</form>
			</div>
		</div>

	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
