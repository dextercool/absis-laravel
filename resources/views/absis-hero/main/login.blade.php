@css('css/bootstrap.min.css')
@css('plugins/font-awesome/css/font-awesome.min.css')
@css('css/style.css')
@css('css/style-responsive.css')
@js('js/jquery.min.js')
@js('js/bootstrap.min.js')
@js('plugins/retina/retina.min.js')
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Cache-control" content="public">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<title>ABSIS | Aplikasi Akademik</title>
		{!!Asset::styles()!!}
	</head>
	<body class="login tooltips bg-info">
		<div class="login-header text-center">
			<img src="/absis-hero/img/logo-login.png" class="logo" alt="Logo">
		</div>
		<div class="login-wrapper">
			<div class="alert alert-warning alert-bold-border fade in text-center">	
			  	<p style="font-size:20px;">
			  	<strong>A B S I S</strong>				
			  	</p>
			  	<p style="font-size:15px;">
			  	<strong>Aplikasi Akademik</strong>				
			  	</p>
			</div>
			<form role="form" action="?meet=login" method="post">
				<div class="form-group has-feedback lg left-feedback no-label">
				  <input type="text" name="username" id="username" class="form-control no-border input-lg rounded" placeholder="Enter username" autofocus>
				  <span class="fa fa-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback lg left-feedback no-label">
				  <input type="password" name="password" id="password" class="form-control no-border input-lg rounded" placeholder="Enter password">
				  <span class="fa fa-unlock-alt form-control-feedback"></span>
				</div>
				<input type="hidden" name="redirect" value="<?php $a = $_SERVER["REQUEST_URI"]; echo $a;?>">
				<div class="form-group">
					<button type="submit" class="btn btn-warning btn-lg btn-block" onclick="this.disabled=true;this.form.submit();">LOGIN</button>
				</div>
			</form>
		</div>
		{!!Asset::scripts()!!}
	</body>
</html>