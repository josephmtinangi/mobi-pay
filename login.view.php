<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h2>Login</h2>

			<?php if(isset($_SESSION['errors'])): ?>
				<div class="alert alert-danger">
					<?php foreach($_SESSION['errors'] as $error): ?>
						<li><?=$error?></li>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

			<form action="/login.php" method="POST">
				<div class="form-group">
					<label for="phone_number">Phone number</label>
					<input type="tel" name="phone_number" id="phone_number" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary">Login</button>
			</form>

		</div>
	</div>
</div>