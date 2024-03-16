<?php 
session_start();
include("./partials/guest/header.html")
?>
<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
	<span class="login100-form-title-1">
		Sign In
	</span>
</div>
   <?php 
		if (isset($_SESSION["errors"])) {
	?>
			<div class="alert bg-danger text-white text-center">
            	<?php echo $_SESSION["errors"]; ?>
			</div>
	<?php
			unset($_SESSION["errors"]);
		}
	?>
	

<form action="./form.php" class="login100-form validate-form" method="post">
	<div class="wrap-input100 validate-input m-b-26" data-validate="email is required">
		<span class="label-input100">Email</span>
		<input class="input100" type="email" name="email" placeholder="Enter your email">
		<span class="focus-input100"></span>
	</div>

	<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
		<span class="label-input100">Password</span>
		<input class="input100" type="password" name="pass" placeholder="Enter password">
		<span class="focus-input100"></span>
	</div>

	<div class="flex-sb-m w-full p-b-30">
		<div class="contact100-form-checkbox">
			<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
			<label class="label-checkbox100" for="ckb1">
				Remember me
			</label>
		</div>

		<div>
			<a href="./register.php" class="txt1">
				Create an account 
			</a>
		</div>
	</div>

	<div class="container-login100-form-btn">
		<input type="submit" class="login100-form-btn" value="login" name="login_form" >
	</div>
</form>
<?php 
include("./partials/guest/footer.html")
?>