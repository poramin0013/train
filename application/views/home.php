<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<title>Welcome to CodeIgniter</title>
</head>

<body>

	<div id="container">


		<div id="body">
			<?php require('boot.php'); ?>
			<?php require('nav.php'); ?>
			<br>



			<div class="container ">
				<h1>ยินดีต้อนรับ</h1>
				PORAMIN JUMPHOM
				SOFTWARE ENGINEER
				<br><br><br>

				<div class="container  " align="left">
					<div class="card shadow" style="padding:20px;">
						<p></p>
						<form class="text-center  border-dark p-5" action="<?php echo site_url('Welcome/insert'); ?>" method="POST">
							<h1><b><strong> ลงทะเบียน </strong></b></h1>
							<br>
							<div class="col">
								<h3> ขบวน</h3>
								<input type="text" id="procession" name="procession" class="form-control" placeholder="">
							</div>
							<br>
							<h3>ต้นทาง</h3>
							<div class="col">
								<label>สถานี</label>
								<input type="text" id="Departure_station" name="Departure_station" class="form-control" placeholder="">
							</div>
							<div class="col">
								<label>เวลาออก</label>
								<input type="text" id="Time_out" name="Time_out" class="form-control" placeholder="">
							</div>
							<br>
							<h3>ห้วยราช</h3>
							<div class="col">
								<label>ถึง</label>
								<input type="text" id="To_huayrat" name="To_huayrat" class="form-control" placeholder="">
							</div>
							<div class="col">
								<label>ออก</label>
								<input type="text" id="Out_huayrat" name="Out_huayrat" class="form-control" placeholder="">
							</div>
							<br>
							<h3>ปลายทาง</h3>
							<div class="col">
								<label>สถานี</label>
								<input type="text" id="Terminal" name="Terminal" class="form-control" placeholder="">
							</div>
							<div class="col">
								<label>ถึงเวลา</label>
								<input type="text" id="To_terminal" name="To_terminal" class="form-control" placeholder="">
							</div>
							<div class="col">
								<br>
								<h3>หมายเหตุ</h3>
								<input type="text" id="note" name="note" class="form-control" placeholder="">
							</div>
							<br>
							<button type="submit" class="btn " style="background-color:#006666">ลงทะเบียน</button>
						</form>
					</div>


				</div>
			</div>
		</div>

	</div>

	<br><br><br>
</body>

</html>