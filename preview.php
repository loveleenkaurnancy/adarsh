<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/bootstrap4.min.css">
	<style type="text/css">
		body
		{
			font-size: 14px;
		}

		.tcenter
		{
			text-align: center;
		}

		td
		{
		    padding-left: 40px;
		    padding-right: 20px;
		    padding-top: 2px;
		    padding-bottom: 2px;
		}

		.table th
		{
			border-top : 0px solid white;
			padding-top: 4px;
			padding-bottom: 4px;
			/*padding-bottom: 4px;
			padding-top: 4px;*/
		}

		.table td
		{
			border-top : 0px solid white;
			padding-top: 4px;
			padding-bottom: 4px;
		}
	</style>
</head>
<body>
	<div style="text-align: center;">
		<br><img src="images/header.jpg" width="1000px">
	</div>

	<br>

	<div class="row" style="width: 1000px; margin-left: auto; margin-right: auto;">
		<?php
			include("config.php");
			$query = mysqli_query($con, "SELECT * FROM opd_details order by id desc limit 1");
			$row = mysqli_fetch_array($query);
			$opd_details_id = $row['id'];
			$ot = $row['ot'];
			$glasses = $row['glasses'];
		?>
		<!-- <div class="row"> -->
			<!-- <div class="col-md-12"> -->
				<!-- Patient Details -->
				<div class="col-md-6">
					<b>Patient Details</b><br>
					<?php 
						echo "Name : ".$row['name']."<br>"; 
						echo "Age : ".$row['age']."<br>"; 
						echo "Sex : ".$row['sex']."<br>";
						echo "Address : ".$row['address']."<br>"; 
						echo "Appointment : ".$row['datee']."<br><br>";
					?>

					<b>Chief Complaint History</b><br>
					<?php echo $row['history']; ?>
				</div>
				<!-- End Patient Details -->

				<!-- Examination -->
				<div class="col-md-6">
					<b>Examination</b>
					<table>
						<tr>
							<th rowspan="2" style="vertical-align: middle;">Vision</th>
							<td>R/E</td>
							<td><?php echo $row['re_vision']; ?>
						</tr>
						<tr>
							<td class="tpadding">L/E</td>
							<td class="tpadding"><?php echo $row['le_vision']; ?>
						</tr>
						
						<tr>
							<th rowspan="2" style="vertical-align: middle;">Tension</th>
							<td>R/E</td>
							<td><?php echo $row['re_tension']; ?>
						</tr>
						<tr>
							<td>L/E</td>
							<td><?php echo $row['le_tension']; ?>
						</tr>

						<tr>
							<th rowspan="2" style="vertical-align: middle;">SAC</th>
							<td>R/E</td>
							<td><?php echo $row['re_sac']; ?>
						</tr>
						<tr>
							<td>L/E</td>
							<td><?php echo $row['le_sac']; ?>
						</tr>

						<tr>
							<th rowspan="2" style="vertical-align: middle;">Fundus</th>
							<td>R/E</td>
							<td><?php echo $row['re_fundus']; ?>
						</tr>
						<tr>
							<td>L/E</td>
							<td><?php echo $row['re_fundus']; ?>
						</tr>
					</table>

					<!-- <table class="table table-bordered">
						<tr>
							<th></th>
							<th>R/E</th>
							<th>L/E</th>
						</tr>
						<tr>
							<td>Vision</td>
							<td><?php echo $row['re_vision']; ?>
							<td><?php echo $row['le_vision']; ?>
						</tr>
						<tr>
							<td>Tension</td>
							<td><?php echo $row['re_tension']; ?>
							<td><?php echo $row['le_tension']; ?>
						</tr>
						<tr>
							<td>SAC</td>
							<td><?php echo $row['re_sac']; ?>
							<td><?php echo $row['le_sac']; ?>
						</tr>
						<tr>
							<td>Fundus</td>
							<td><?php echo $row['re_fundus']; ?>
							<td><?php echo $row['le_fundus']; ?>
						</tr>
					</table> -->
				</div>
				<!-- End Examination -->
			<!-- </div> -->
		<!-- </div> -->

			<div class="col-md-12">
				<b>Diagnosis</b><br>
				<?php echo $row['diagnosis']."<br><br>"; ?> 
			</div>

			<div class="col-md-12">
				<b>Advice</b><br>
				<?php echo $row['advice']."<br><br>"; ?> 
			</div>


			<!-- Medicine Prescription -->
			<div class="col-md-8" style="margin-right: 200px;">
				<b>Medicine</b><br>
				<table class="table">
					<tr>
						<th width="70%">Name</th>
						<th>Times</th>
						<th>Duration</th>
						<th>Pills</th>
					</tr>

					<?php
						$query = mysqli_query($con, "SELECT * FROM prescribed_medicine where opd_details_id = '$opd_details_id'");
						while($row = mysqli_fetch_array($query))
						{
					?>

					<tr>
						<td><?php echo $row['m_name']; ?></td>
						<td style="text-align: center;"><?php echo $row['m_time']; ?></td>
						<td style="text-align: center;"><?php echo $row['m_duration']; ?></td>
						<td style="text-align: center;"><?php echo $row['m_pills']; ?></td>
					</tr>
					
					<?php
						}
					?>

				</table>
			</div>
			<!-- End Medicine Prescription -->

			<div class="col-md-12" >
				<br>	
			</div>

			<!-- Medicine Prescription -->
			<div class="col-md-8" style="margin-right: 200px;">
				<b>Eye Drops</b><br>
				<table class="table">
					<tr>
						<th width="70%">Name</th>
						<th>Times</th>
						<th>Duration</th>
						<th>Drops</th>
					</tr>

					<?php
						$query = mysqli_query($con, "SELECT * FROM prescribed_eye_drops where opd_details_id = '$opd_details_id'");
						while($row = mysqli_fetch_array($query))
						{
					?>

					<tr>
						<td><?php echo $row['e_name']; ?></td>
						<td style="text-align: center;"><?php echo $row['e_time']; ?></td>
						<td style="text-align: center;"><?php echo $row['e_duration']; ?></td>
						<td style="text-align: center;"><?php echo $row['e_drops']; ?></td>
					</tr>
					
					<?php
						}
					?>

				</table>
			</div>
			<!-- End Medicine Prescription -->

			<div class="col-md-12">
				<br>	
			</div>

			<?php
			if($glasses == "")
			{

			}
			else
			{
			?>
			<!-- Glasses -->
			<div class="col-md-8" style="width: 400px">
				<b>Glasses</b><br>
				<?php
					$query = mysqli_query($con, "SELECT * FROM opd_details order by id desc limit 1");
					$row = mysqli_fetch_array($query);
				?>
				<table class="table" style="text-align: center;">
					<tr>
						<th></th>
						<th colspan="3" class="tcenter">Right</th>
						<th colspan="3" class="tcenter">Left</th>
					</tr>
					<tr>
						<td></td>
						<th>Sph</th>
						<th>Cyl</td>
						<th>Axis</th>
						<th>Sph</th>
						<th>Cyl</th>
						<th>Axis</th>
					</tr>
					<tr>
						<th>Distance</th>
						<td><?php echo $row['re_d_s']; ?></td>
						<td><?php echo $row['re_d_c']; ?></td>
						<td><?php echo $row['re_d_a']; ?></td>
						<td><?php echo $row['le_d_s']; ?></td>
						<td><?php echo $row['le_d_c']; ?></td>
						<td><?php echo $row['le_d_a']; ?></td>
					</tr>
					<tr>
						<th>Near</th>
						<td><?php echo $row['re_n_s']; ?></td>
						<td><?php echo $row['re_n_c']; ?></td>
						<td><?php echo $row['re_n_a']; ?></td>
						<td><?php echo $row['le_n_s']; ?></td>
						<td><?php echo $row['le_n_c']; ?></td>
						<td><?php echo $row['le_n_a']; ?></td>
					</tr>
				</table>
			</div>
			<!-- End Glasses -->
			<?php
			}
			?>
			
			
			<div class="col-md-12">
				<br>	
			</div>

			<?php
			if($ot == "")
			{

			}
			else
			{
			?>

			<!-- OT Purposes -->
			<div class="col-md-8">
				<b>Operation Details</b><br>
				<table class="table" style="border-color: white; text-align: center;">
					<tr>
						<th>Blood Sugar</th>
						<th>Blood Pressure</th>
						<th>K1</th>
						<th>K2</th>
						<th>Axial Length</th>
						<th>Iol1</th>
					</tr>
					<tr>
						<td><?php echo $row['blood_sugar']; ?></td>
						<td><?php echo $row['blood_pressure']; ?></td>
						<td><?php echo $row['k1']; ?></td>
						<td><?php echo $row['k2']; ?></td>
						<td><?php echo $row['axial_length']; ?></td>
						<td><?php echo $row['iol']; ?></td>
					</tr>
				</table>
				<!-- <table class="table table-bordered">
					<tr>
						<td>Blood Sugar</td>
						<td><?php echo $row['blood_sugar']; ?></td>
					</tr>
					<tr>
						<td>Blood Pressure</td>
						<td><?php echo $row['blood_pressure']; ?></td>
					</tr>
					<tr>
						<td>K1</td>
						<td><?php echo $row['k1']; ?></td>
					</tr>
					<tr>
						<td>K2</td>
						<td><?php echo $row['k2']; ?></td>
					</tr>
					<tr>
						<td>Axial Length</td>
						<td><?php echo $row['axial_length']; ?></td>
					</tr>
					<tr>
						<td>Iol1</td>
						<td><?php echo $row['iol']; ?></td>
					</tr>
				</table> -->
			</div>
			<!-- End OT Purposes -->
			<?php
			}
			?>


			<div class="col-md-12" style="text-align: right;">
				<br><br><b>Signature</b>
			</div>

		</div>
</body>
</html>