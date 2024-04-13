                              

<?php 

$signup = false;
print_r($_POST);
if(isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email_address']) and isset($_POST['phone']))
{
$user = $_POST['username'];
$pass = $_POST['password']; 
$mail = $_POST['email_address'];
$num = $_POST['phone'];
$result = signup($user,$pass,$mail,$num);
$signup = true;
echo "hello";
}
?>

<?php

if($signup)
{
	if($result){
		?>
		<main class="container">
	<div class="bg-body-tertiary p-5 rounded">
		<h1>Signup successful</h1>
		<p class="lead">Now you can login from <a href="/login.php">here</a>.</p>
		<a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar/" role="button">View navbar docs »</a>
	</div>
</main>
		
	


<?php
	} 
	else{
	?>

<main class="container">
	<div class="bg-body-tertiary p-5 rounded">
		<h1>Signup failed</h1>
		<a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar/" role="button">View navbar docs »</a>
	</div>
</main> 


<?php
	}
}
else
{
	?>

<main class="form-signup">
	<form class="forms" method="post" action="signup.php">
		<img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
		<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

		<div class="form-floating">
			<input name="username" type="text" class="form-control" id="floatingInputUsername"
				placeholder="name@example.com">
			<label for="floatingInputUsername">Username</label>
		</div>

		<div class="form-floating">
			<input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
			<label for="floatingPassword">Password</label>
		</div>

		<div class="form-floating">
			<input name="phone" type="text" class="form-control" id="floatingInputUsername"
				placeholder="name@example.com">
			<label for="floatingInputUsername">Phone</label>
		</div>

		<div class="form-floating">
			<input name="email_address" type="email" class="form-control" id="floatingInput"
				placeholder="name@example.com">
			<label for="floatingInput">Email address</label>
		</div>
		

		<div class="form-check text-start my-3">
			<input name="check" class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
			<label class="form-check-label" for="flexCheckDefault">
				Remember me
			</label>
		</div>


		<button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
		<p class="mt-5 mb-3 text-body-secondary">© 2017–2024</p>
	</form>
</main>

<?php } ?>