<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h2>Register</h2>

			<?php if(isset($_SESSION['errors'])): ?>
				<div class="alert alert-danger">
					<?php foreach($_SESSION['errors'] as $error): ?>
						<li><?=$error?></li>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

			<form action="/register.php" method="POST">
				<div class="form-group">
					<label for="first_name">First name</label>
					<input type="text" name="first_name" id="first_name" class="form-control">
				</div>
				<div class="form-group">
					<label for="last_name">Last name</label>
					<input type="text" name="last_name" id="last_name" class="form-control">
				</div>
				<div class="form-group">
					<label for="phone_number">Phone number</label>
					<input type="tel" name="phone_number" id="phone_number" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary">Register</button>
			</form>

		</div>
	</div>
</div>