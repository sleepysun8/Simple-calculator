<!DOCTYPE html>
<html>
<head>
	<title> kalkulator </title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway&display=swap">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<style type="text/css">
	.box{
		width: 360px;
		height: 360px;
		/*color: white;*/
		background-color: grey;
		margin: 50px auto;
		padding: 20px;
		border-radius: 12px;
		opacity: 0.9;
		/*background-blend-mode: lighten;*/

	}
</style>
</head>
<body background="cal.jpg" ">
	
	<div class="container-fluid" >
		<div class="row">
			<div class="box">
				<form action="#" method="POST"  role=form>
					<legend style="text-align: center; font-family: 'Raleway'sans serif; ">- C A L C U L A T O R -</legend>
					<div class="form-group" style="color: white">
						<legend style="font-size: 9pt ">enter first number</legend>
						<input class="form-control" style="border-color: #969595; background-color: transparent; border-radius: 20px;  font-size: 11pt; font-family:'Raleway'" type="number" name="bil1">
					</div>
					
					<div class="form-group" style="color: white">
						<legend style="font-size: 9pt ">enter second number</legend>
						<input class="form-control" style="border-color: #969595; background-color: transparent; border-radius: 20px; font-size:11pt;font-family:'Raleway" type="number" name="bil2">
					</div>
					<div class="form-group" style="color: white;">
						<legend style="font-size: 9pt ">choose a calculation</legend>
						<select class="form-control" name="menu" style="color: black; border-color: #969595; background-color: transparent; border-radius:20px; font-size: 11pt; font-family: 'Raleway' ">
							<option > </option>
							<option value="-">-</option>
							<option value="+">+</option>
							<option value="/">:</option>
							<option value="x">x</option>
						</select>
					</div>
					<div class="form-group">
						
						<input class="form-control" style="color: #969595; border-color: #969595; background-color: white; opacity: 0.7; border-radius: 20px; width: 80px;" type="submit" name="submit" value="submit">
						<?php 
						if (isset($_POST["submit"])) {
							$loc1 = $_POST["bil1"];
							$loc2 = $_POST["bil2"];
							$operator = $_POST['menu'];

							if ($operator=='-'){
								$hasil = $loc1-$loc2;
							}
							elseif ($operator=='+') {
								$hasil = $loc1+$loc2;
							}
							elseif ($operator=='/') {
								$hasil = $loc1/$loc2;
							}
							elseif ($operator=='x') {
								$hasil= $loc1*$loc2;
							}
						}else {
							$hasil= "";
						}
						?>
					</div>
					<div class="form-group">
						<input class="form-control" style="border-color: #969595; background-color: transparent; border-radius: 20px; color: white; font-family: 'Raleway'; font-size: 11pt"placeholder="hasil" type="text" name="hasil" value="<?php echo $hasil ?>">
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
