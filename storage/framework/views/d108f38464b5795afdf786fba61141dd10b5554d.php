<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ATG - Task 1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<div class="container" ><br><br>
		<h2 class="text-center"> ATG Task 2	</h2><br><br>
		<?php if(Session::has('error')): ?>
			<div class="alert alert-danger col-lg-6 mx-auto small">
				<li> <?php echo e(session('error')); ?> </li>
			</div>
		<?php endif; ?>
		<?php if(Session::has('success')): ?>
			<div class="alert alert-success col-lg-6 mx-auto small">
				<?php echo session('success'); ?>

			</div>
		 <?php endif; ?>
		<form action="<?php echo e(URL::to('/')); ?>/store" method="POST">
			<div class="col-lg-6 mx-auto">
				<?php echo csrf_field(); ?>
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control form-control-sm" value="<?php echo e(old('name')); ?>" id="name"><br>
				<label for="email">Email</label>
				<input type="text" name="email" class="form-control form-control-sm" id="newpasswd" value="<?php echo e(old('email')); ?>"><br>
				<label for="pin">PinCode</label>
				<input type="number" name="pin" class="form-control form-control-sm" id="pin" value="<?php echo e(old('pin')); ?>"><br>
				<div class="text-center">
					<input type="submit" class="btn btn-sm btn-success" value="Submit" onclick="submit()">	
				</div>
			</div>
		</form><br><br><br>
</body>
</html>

<?php /**PATH /opt/lampp/htdocs/atg/resources/views/Atg.blade.php ENDPATH**/ ?>