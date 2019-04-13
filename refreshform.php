<?php
include("config.php");

		$name = $_POST['name1'];
	    $age = $_POST['age1'];
	    $sex = $_POST['sex1'];
	    $address = $_POST['address1'];
	    $datee = $_POST['datee1'];
	    $history = $_POST['history1'];
      $diagnosis = $_POST['diagnosis1'];
	    
      if($_POST['advice1'])
      {
        $advice = $_POST['advice1'];
      }
      else
      {
        $advice = "N/A";
      }
      
	    $re_vision = $_POST['re_vision1'];
	    $le_vision = $_POST['le_vision1'];

      if($_POST['re_tension1'])
      {
        $re_tension = $_POST['re_tension1'];
      }
      else
      {
        $re_tension = "N/A";
      }

      if($_POST['le_tension1'])
      {
        $le_tension = $_POST['le_tension1'];
      }
      else
      {
        $le_tension = "N/A";
      }

      if($_POST['re_sac1'])
      {
        $re_sac = $_POST['re_sac1'];
      }
      else
      {
        $re_sac = "N/A";
      }

      if($_POST['le_sac1'])
      {
        $le_sac = $_POST['le_sac1'];
      }
      else
      {
        $le_sac = "N/A";
      }

      if($_POST['re_fundus1'])
      {
        $re_fundus = $_POST['re_fundus1'];
      }
      else
      {
        $re_fundus = "N/A";
      }

      if($_POST['le_fundus1'])
      {
        $le_fundus = $_POST['le_fundus1'];
      }
      else
      {
        $le_fundus = "N/A";
      }

      if(isset($_POST['glasses1']))
      {
        $glasses = $_POST['glasses1'];
        $re_d_s = $_POST['re_d_s1'];
        $re_d_c = $_POST['re_d_c1'];
        $re_d_a = $_POST['re_d_a1'];

        $re_n_s = $_POST['re_n_s1'];
        $re_n_c = $_POST['re_n_c1'];
        $re_n_a = $_POST['re_n_a1'];

        $le_d_s = $_POST['le_d_s1'];
        $le_d_c = $_POST['le_d_c1'];
        $le_d_a = $_POST['le_d_a1'];

        $le_n_s = $_POST['le_n_s1'];
        $le_n_c = $_POST['le_n_c1'];
        $le_n_a = $_POST['le_n_a1'];
      }
      else
      {
        $glasses = "";
        $re_d_s = "";
        $re_d_c = "";
        $re_d_a = "";

        $re_n_s = "";
        $re_n_c = "";
        $re_n_a = "";

        $le_d_s = "";
        $le_d_c = "";
        $le_d_a = "";

        $le_n_s = "";
        $le_n_c = "";
        $le_n_a = "";
      }

      if($_POST['m_name1'])
      {
        $m_name = $_POST['m_name1'];
        $m_time = $_POST['m_time1'];
        $m_duration = $_POST['m_duration1'];
        $m_pills = $_POST['m_pills1'];
      }
      else
      {
        $m_name = "";
        $m_time = "";
        $m_duration = "";
        $m_pills = "";
      }

      if($_POST['e_name1'])
      {
        $e_name = $_POST['e_name1'];
        $e_time = $_POST['e_time1'];
        $e_duration = $_POST['e_duration1'];
        $e_drops = $_POST['e_drops1'];
      }
      else
      {
        $e_name = "";
        $e_time = "";
        $e_duration = "";
        $e_drops = "";
      }

	    if(isset($_POST['ot1']))
	    {
	      $ot = $_POST['ot1'];
	      $blood_sugar = $_POST['blood_sugar1'];
	      $blood_pressure = $_POST['blood_pressure1'];
	      $k1 = $_POST['k11'];
	      $k2 = $_POST['k21'];
	      $axial_length = $_POST['axial_length1'];
	      $iol = $_POST['iol1'];
	    }
	    else
	    {
	      $ot = "";
	      $blood_sugar = "";
	      $blood_pressure = "";
	      $k1 = "";
	      $k2 = "";
	      $axial_length = "";
	      $iol = "";
	    }


 session_start();
 @$id=$_SESSION['id'];

if($id  == "")
{
	// $query = mysqli_query($con, "insert into opd_details(name, age, sex, address, datee, history, diagnosis, advice, re_vision, le_vision) values ('$name2', '$age2', '$sex2', '$address2', '$datee2', '$history2', '$diagnosis2', '$advice2', '$re_vision2', '$le_vision2')"); //Insert query
  echo "fisrt block";

	$query = mysqli_query($con, "INSERT INTO opd_details(name, age, sex, address, datee, history, diagnosis, advice, re_vision, le_vision, re_tension, le_tension, re_sac, le_sac, re_fundus, le_fundus, glasses, re_d_s, re_d_c, re_d_a, re_n_s, re_n_c, re_n_a, le_d_s, le_d_c, le_d_a, le_n_s, le_n_c, le_n_a, ot, blood_sugar, blood_pressure, k1, k2, axial_length, iol) values ('$name', '$age', '$sex', '$address', '$datee', '$history', '$diagnosis', '$advice', '$re_vision', '$le_vision', '$re_tension', '$le_tension', '$re_sac', '$le_sac', '$re_fundus', '$le_fundus', '$glasses', '$re_d_s', '$re_d_c', '$re_d_a', '$re_n_s', '$re_n_c', '$re_n_a', '$le_d_s', '$le_d_c', '$le_d_a', '$le_n_s', '$le_n_c', '$le_n_a', '$ot', '$blood_sugar', '$blood_pressure', '$k1', '$k2', '$axial_length', '$iol')");

	if($query)
	{
    echo "<script>Super frst block</script>";
		$q = mysqli_query($con, "SELECT * FROM opd_details order by id desc limit 1 ");
		$data = mysqli_fetch_array($q);
		$opd_details_id = $data['id'];
		

		for($i=0 ; $i<sizeof($m_name) ; $i++)
		{
			if(!($m_name[0] == ""))
			{
				mysqli_query($con, "INSERT INTO prescribed_medicine(opd_details_id, m_name, m_time, m_duration, m_pills) values ('$data[id]', '$m_name[$i]', '$m_time[$i]', '$m_duration[$i]', '$m_pills[$i]')");
			}
		}

		for($i=0 ; $i<sizeof($e_name) ; $i++)
		{
			if(!($e_name[0] == ""))
			{
				mysqli_query($con, "INSERT INTO prescribed_eye_drops(opd_details_id, e_name, e_time, e_duration, e_drops) values ('$data[id]', '$e_name[$i]', '$e_time[$i]', '$e_duration[$i]', '$e_drops[$i]')");
			}
		}

		$_SESSION['id'] = $data['id'];

		// echo "<script>window.open('preview.php'); </script>";
		//echo "Data Submitted succesfully";
	//echo "$id"."session";
	}	
} 
else
{
  // echo "DELETE FROM opd_details where id = '$id' ";
  // echo "<script>First block</script>";
 
  mysqli_query($con, "DELETE FROM prescribed_medicine where opd_details_id = '$id' ");
  mysqli_query($con, "DELETE FROM prescribed_eye_drops where opd_details_id = '$id' ");
	mysqli_query($con, "DELETE FROM opd_details where id = '$id' ");

	$query = mysqli_query($con, "INSERT INTO opd_details(name, age, sex, address, datee, history, diagnosis, advice, re_vision, le_vision, re_tension, le_tension, re_sac, le_sac, re_fundus, le_fundus, glasses, re_d_s, re_d_c, re_d_a, re_n_s, re_n_c, re_n_a, le_d_s, le_d_c, le_d_a, le_n_s, le_n_c, le_n_a, ot, blood_sugar, blood_pressure, k1, k2, axial_length, iol) values ('$name', '$age', '$sex', '$address', '$datee', '$history', '$diagnosis', '$advice', '$re_vision', '$le_vision', '$re_tension', '$le_tension', '$re_sac', '$le_sac', '$re_fundus', '$le_fundus', '$glasses', '$re_d_s', '$re_d_c', '$re_d_a', '$re_n_s', '$re_n_c', '$re_n_a', '$le_d_s', '$le_d_c', '$le_d_a', '$le_n_s', '$le_n_c', '$le_n_a', '$ot', '$blood_sugar', '$blood_pressure', '$k1', '$k2', '$axial_length', '$iol')");
	
	if($query)
	{
		$q = mysqli_query($con, "SELECT * FROM opd_details order by id desc limit 1 ");
		$da = mysqli_fetch_array($q);
		$opd_details_id = $da['id'];
		$_SESSION['id'] = $da['id'];

		for($i=0 ; $i<sizeof($m_name) ; $i++)
		{
			if(!($m_name[0] == ""))
			{
				mysqli_query($con, "INSERT INTO prescribed_medicine(opd_details_id, m_name, m_time, m_duration, m_pills) values ('$da[id]', '$m_name[$i]', '$m_time[$i]', '$m_duration[$i]', '$m_pills[$i]')");
			}
		}

		for($i=0 ; $i<sizeof($e_name) ; $i++)
		{
			if(!($e_name[0] == ""))
			{
				mysqli_query($con, "INSERT INTO prescribed_eye_drops(opd_details_id, e_name, e_time, e_duration, e_drops) values ('$da[id]', '$e_name[$i]', '$e_time[$i]', '$e_duration[$i]', '$e_drops[$i]')");
			}
		}

		// echo "<script>window.open('preview.php');</script>";
		//echo "Data Submitted succesfully";
	}	
}


// $q = mysqli_query($connection, "SELECT id FROM form_element ORDER BY id desc LIMIT 1");
// $d = mysqli_fetch_array($q);

// $_SESSION['id'] = $d['id'];

// echo "$_SESSION[id]";


//mysqli_close($con); // Connection Closed.
?>