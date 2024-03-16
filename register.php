<?php 
include("./partials/guest/header.html")
?>
<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
    <span class="login100-form-title-1">
        Sign Up
    </span>
</div>

<form action="./form.php" class="login100-form validate-form" id="myForm" method="post">
    <div class="wrap-input100 validate-input m-b-26" data-validate="Last-Name is required">
        <span class="label-input100">Last-Name</span>
        <input class="input100" type="text" name="nom" placeholder="Enter your Last-Name">
        <span class="focus-input100"></span>
    </div>

    <div class="wrap-input100 validate-input m-b-26" data-validate="First-Name is required">
        <span class="label-input100">First-Name</span>
        <input class="input100" type="text" name="prenom" placeholder="Enter your First-Name">
        <span class="focus-input100"></span>
    </div>
    <div class="wrap-input100 validate-input m-b-26" data-validate="Number is required">
		<span class="label-input100">Number</span>
		<input class="input100" type="tel" name="tel" placeholder="Enter your Number">
		<span class="focus-input100"></span>
	</div>

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
    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
        <span class="label-input100">Confirm your password</span>
        <input class="input100" type="password" name="pass" placeholder="Enter password">
        <span class="focus-input100"></span>
    </div>


    <div class="flex-sb-m w-full p-b-30">
        <div>
            <a href="./index.php" class="txt1">
                Already have account ?
            </a>
        </div>
    </div>

    <div class="container-login100-form-btn">
    <input type="submit" class="login100-form-btn" value="register" name="register_form" >
    </div>
</form>
<!-- <script>
    let myForm = $("#myForm")

</script> -->
<?php 
include("./partials/guest/footer.html")
?>