<?php

  include("header.php");
  $_SESSION['id'] = "";

  // if(isset($_POST['submit']))
  // {
  //  $name = $_POST['name'];
  //     $age = $_POST['age'];
  //     $sex = $_POST['sex'];
  //     $address = $_POST['address'];
  //     $datee = $_POST['datee'];
  //     $history = $_POST['history'];
 //      $diagnosis = $_POST['diagnosis'];
      
 //      if($_POST['advice'])
 //      {
 //        $advice = $_POST['advice'];
 //      }
 //      else
 //      {
 //        $advice = "N/A";
 //      }
      
  //     $re_vision = $_POST['re_vision'];
  //     $le_vision = $_POST['le_vision'];

 //      if($_POST['re_tension'])
 //      {
 //        $re_tension = $_POST['re_tension'];
 //      }
 //      else
 //      {
 //        $re_tension = "N/A";
 //      }

 //      if($_POST['le_tension'])
 //      {
 //        $le_tension = $_POST['le_tension'];
 //      }
 //      else
 //      {
 //        $le_tension = "N/A";
 //      }

 //      if($_POST['re_sac'])
 //      {
 //        $re_sac = $_POST['re_sac'];
 //      }
 //      else
 //      {
 //        $re_sac = "N/A";
 //      }

 //      if($_POST['le_sac'])
 //      {
 //        $le_sac = $_POST['le_sac'];
 //      }
 //      else
 //      {
 //        $le_sac = "N/A";
 //      }

 //      if($_POST['re_fundus'])
 //      {
 //        $re_fundus = $_POST['re_fundus'];
 //      }
 //      else
 //      {
 //        $re_fundus = "N/A";
 //      }

 //      if($_POST['le_fundus'])
 //      {
 //        $le_fundus = $_POST['le_fundus'];
 //      }
 //      else
 //      {
 //        $le_fundus = "N/A";
 //      }

 //      if(isset($_POST['glasses']))
 //      {
 //        $glasses = $_POST['glasses'];
 //        $re_d_s = $_POST['re_d_s'];
 //        $re_d_c = $_POST['re_d_c'];
 //        $re_d_a = $_POST['re_d_a'];

 //        $re_n_s = $_POST['re_n_s'];
 //        $re_n_c = $_POST['re_n_c'];
 //        $re_n_a = $_POST['re_n_a'];

 //        $le_d_s = $_POST['le_d_s'];
 //        $le_d_c = $_POST['le_d_c'];
 //        $le_d_a = $_POST['le_d_a'];

 //        $le_n_s = $_POST['le_n_s'];
 //        $le_n_c = $_POST['le_n_c'];
 //        $le_n_a = $_POST['le_n_a'];
 //      }
 //      else
 //      {
 //        $glasses = "";
 //        $re_d_s = "";
 //        $re_d_c = "";
 //        $re_d_a = "";

 //        $re_n_s = "";
 //        $re_n_c = "";
 //        $re_n_a = "";

 //        $le_d_s = "";
 //        $le_d_c = "";
 //        $le_d_a = "";

 //        $le_n_s = "";
 //        $le_n_c = "";
 //        $le_n_a = "";
 //      }

 //      if($_POST['m_name'])
 //      {
 //        $m_name = $_POST['m_name'];
 //        $m_time = $_POST['m_time'];
 //        $m_duration = $_POST['m_duration'];
 //        $m_pills = $_POST['m_pills'];
 //      }
 //      else
 //      {
 //        $m_name = "";
 //        $m_time = "";
 //        $m_duration = "";
 //        $m_pills = "";
 //      }

 //      if($_POST['e_name'])
 //      {
 //        $e_name = $_POST['e_name'];
 //        $e_time = $_POST['e_time'];
 //        $e_duration = $_POST['e_duration'];
 //        $e_drops = $_POST['e_drops'];
 //      }
 //      else
 //      {
 //        $e_name = "";
 //        $e_time = "";
 //        $e_duration = "";
 //        $e_drops = "";
 //      }

  //     if(isset($_POST['ot']))
  //     {
  //       $ot = $_POST['ot'];
  //       $blood_sugar = $_POST['blood_sugar'];
  //       $blood_pressure = $_POST['blood_pressure'];
  //       $k1 = $_POST['k1'];
  //       $k2 = $_POST['k2'];
  //       $axial_length = $_POST['axial_length'];
  //       $iol = $_POST['iol'];
  //     }
  //     else
  //     {
  //       $ot = "";
  //       $blood_sugar = "";
  //       $blood_pressure = "";
  //       $k1 = "";
  //       $k2 = "";
  //       $axial_length = "";
  //       $iol = "";
  //     }

  //  $query = mysqli_query($con, "INSERT INTO opd_details(name, age, sex, address, datee, history, diagnosis, advice, re_vision, le_vision, re_tension, le_tension, re_sac, le_sac, re_fundus, le_fundus, glasses, re_d_s, re_d_c, re_d_a, re_n_s, re_n_c, re_n_a, le_d_s, le_d_c, le_d_a, le_n_s, le_n_c, le_n_a, ot, blood_sugar, blood_pressure, k1, k2, axial_length, iol) values ('$name', '$age', '$sex', '$address', '$datee', '$history', '$diagnosis', '$advice', '$re_vision', '$le_vision', '$re_tension', '$le_tension', '$re_sac', '$le_sac', '$re_fundus', '$le_fundus', '$glasses', '$re_d_s', '$re_d_c', '$re_d_a', '$re_n_s', '$re_n_c', '$re_n_a', '$le_d_s', '$le_d_c', '$le_d_a', '$le_n_s', '$le_n_c', '$le_n_a', '$ot', '$blood_sugar', '$blood_pressure', '$k1', '$k2', '$axial_length', '$iol')");
    
 //    if($query)
  //  {
  //    $q = mysqli_query($con, "SELECT * FROM opd_details order by id desc limit 1 ");
  //    $data = mysqli_fetch_array($q);

  //    for($i=0;$i<sizeof($m_name);$i++)
  //    {
  //      if(!($m_name[0] == ""))
  //      {
  //        mysqli_query($con, "INSERT INTO prescribed_medicine(opd_details_id, m_name, m_time, m_duration, m_pills) values ('$data[id]', '$m_name[$i]', '$m_time[$i]', '$m_duration[$i]', '$m_pills[$i]')");
  //      }
  //    }

  //    for($i=0;$i<sizeof($e_name);$i++)
  //    {
  //      if(!($e_name[0] == ""))
  //      {
  //        mysqli_query($con, "INSERT INTO prescribed_eye_drops(opd_details_id, e_name, e_time, e_duration, e_drops) values ('$data[id]', '$e_name[$i]', '$e_time[$i]', '$e_duration[$i]', '$e_drops[$i]')");
  //      }
  //    }

 //      //echo "<script>window.open('preview.php'); </script>";
 //      // echo "<script>window.open("", "", 'width=200,height=100'); </script>";
 //  //     echo '<script>var myWindow = window.open("", "MsgWindow", "width=200,height=100");
 //  // myWindow.document.write("<p>This is MsgWindow. I am 200px wide and 100px tall!</p>");</script>';
      
  //    $msg1 = "Submitted Successfully";
  //  }
  //  else
  //  {
 //      echo mysqli_error($query);
  //    $msg2 = "Error";
  //  }
  // }

?>

<style type="text/css">
  input::-webkit-calendar-picker-indicator {
  display: none;
}
</style>
<script>
  $(function() {
    $( "#history" ).autocomplete({
      source: 'search.php?history=1'
    });
  });

  $(function() {
    $( "#medicine" ).autocomplete({
      source: 'search.php?medicine=1'
    });
  });

  $(function() {
    $( "#eye_drops" ).autocomplete({
      source: 'search.php?eye_drops=1'
    });
  });
</script>

<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui.js"></script> 


<link href="js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />






  <!-- <script src="js/refreshform.js"></script> -->
  <script type="text/javascript">
    $(document).ready(function()
    {
      $("#submit").click(function()
      {
        var name = $("#name").val();
        var age = $("#age").val();
        
        var sex = $("input[name='sex']:checked").val();

        var address = $("#address").val();
        var datee = $("#datee").val();

        var history = $("#history").val();
        var diagnosis = $("#diagnosis").val();
        var advice = $("#advice").val();

        var re_vision = $("#re_vision").val();
        var le_vision = $("#le_vision").val();
        var re_tension = $("#re_tension").val();
        var le_tension = $("#le_tension").val();
        var re_sac = $("#re_sac").val();
        var le_sac = $("#le_sac").val();
        var re_fundus = $("#re_fundus").val();
        var le_fundus = $("#le_fundus").val();

        // var glasses = $("#glasses").val();
        var checkBoxGlass = document.getElementById("glasses");
        if (checkBoxGlass.checked == true)
        {
          var glasses = "glasses";
        } 
        else
        {
          var glasses = "";
        }

        var re_d_s = $("#re_d_s").val();
        var re_d_c = $("#re_d_c").val();
        var re_d_a = $("#re_d_a").val();
        var re_n_s = $("#re_n_s").val();
        var re_n_c = $("#re_n_c").val();
        var re_n_a = $("#re_n_a").val();
        var le_d_s = $("#le_d_s").val();
        var le_d_c = $("#le_d_c").val();
        var le_d_a = $("#le_d_a").val();
        var le_n_s = $("#le_n_s").val();
        var le_n_c = $("#le_n_c").val();
        var le_n_a = $("#le_n_a").val();
        
        
        var text1 = new Array();
        $("input[name='m_name[]']").each(function(){
            text1.push($(this).val());
        });

        var text2 = new Array();
        $("input[name='m_time[]']").each(function(){
            text2.push($(this).val());
        });

        var text3 = new Array();
        $("input[name='m_duration[]']").each(function(){
            text3.push($(this).val());
        });

        var text4 = new Array();
        $("input[name='m_pills[]']").each(function(){
            text4.push($(this).val());
        });

        // var m_name = $("#m_name").val();
        // var m_time = $("#m_time").val();
        // var m_duration = $("#m_duration").val();
        // var m_pills = $("#m_pills").val();

        var text5 = new Array();
        $("input[name='e_name[]']").each(function(){
            text5.push($(this).val());
        });

        var text6 = new Array();
        $("input[name='e_time[]']").each(function(){
            text6.push($(this).val());
        });

        var text7 = new Array();
        $("input[name='e_duration[]']").each(function(){
            text7.push($(this).val());
        });

        var text8 = new Array();
        $("input[name='e_drops[]']").each(function(){
            text8.push($(this).val());
        });

        // var e_name = $("#e_name").val();
        // var e_time = $("#e_time").val();
        // var e_duration = $("#e_duration").val();
        // var e_drops = $("#e_drops").val();

        // var ot = $("#ot").val();
        var checkBoxOt = document.getElementById("ot");
        if (checkBoxOt.checked == true)
        {
          var ot = "ot";
        } 
        else
        {
          var ot = "";
        }
        var blood_sugar = $("#blood_sugar").val();
        var blood_pressure = $("#blood_pressure").val();
        var k1 = $("#k1").val();
        var k2 = $("#k2").val();
        var axial_length = $("#axial_length").val();
        var iol = $("#iol").val();

        if (name == '') 
        {
          alert("Insertion Failed Some Fields are Blank....!!");
        }
        else
        {
          // Returns successful data submission message when the entered information is stored in database.
          $.post("refreshform.php",
          {
            name1: name,
            age1: age,
            sex1: sex,
            address1: address,
            datee1: datee,

            history1: history,
            diagnosis1:diagnosis,
            advice1: advice,

            re_vision1: re_vision,
            le_vision1: le_vision,
            re_tension1: re_tension,
            le_tension1: le_tension,
            re_sac1: re_sac,
            le_sac1: le_sac,
            re_fundus1: re_fundus,
            le_fundus1: le_fundus,

            glasses1: glasses,
            re_d_s1: re_d_s,
            re_d_c1: re_d_c,
            re_d_a1: re_d_a,
            re_n_s1: re_n_s,
            re_n_c1: re_n_c,
            re_n_a1: re_n_a,
            le_d_s1: le_d_s,
            le_d_c1: le_d_c,
            le_d_a1: le_d_a,
            le_n_s1: le_n_s,
            le_n_c1: le_n_c,
            le_n_a1: le_n_a,

            m_name1: text1,
            m_time1: text2,
            m_duration1: text3,
            m_pills1: text4,

            e_name1: text5,
            e_time1: text6,
            e_duration1: text7,
            e_drops1: text8,

            ot1: ot,
            blood_sugar1: blood_sugar,
            blood_pressure1: blood_pressure,
            k11: k1,
            k21: k2,
            axial_length1: axial_length,
            iol1: iol,

          },

          function(data)
          {
            console.log(data);
           // alert(data);
            // $('#form')[0].reset(); // To reset form fields
            //window.open('preview.php');
            <?php
              $q = mysqli_query($con, "SELECT * FROM opd_details order by id desc limit 1 ");
              $da = mysqli_fetch_array($q);
              $a = $da['id'];
            ?>
    
            var a = "<?php echo ($a); ?>";
            var myWindow = window.open("preview.php?a=" + data, "MsgWindow", "width=1100 ,height=750");
          });
        }
      });
    });
  </script>












      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">


          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>OPD Form </h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a href="opd.php"><button class="btn btn-primary">New OPD</button></a></li>
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form class="form-horizontal form-label-left" method="POST">

                    <?php
                      if(isset($msg1))
                      {
                    ?>
                      <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <div class="alert alert-success alert-dismissible fade in" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                              </button>
                              <strong></strong><?php echo $msg1 ?>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>

                    <?php
                      if(isset($msg2))
                      {
                    ?>
                      <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                              </button>
                              <strong></strong><?php echo $msg2 ?>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="name" name="name"  class="form-control col-md-7 col-xs-12" required="required">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Age
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-6">
                        <input type="text" id="age" name="age"  class="form-control col-md-7 col-xs-12" required="required">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sex 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" id="sex" name="sex" value="Male" required="required"> &nbsp; Male &nbsp;
                          </label>
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" id="sex" name="sex" value="Female"> Female
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Address
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control" id="address" name="address" rows="3" ></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Date
                      </label>
                      <div class="col-md-3 col-sm-3 col-xs-6">
                        <input id="datee" name="datee" class="date-picker form-control col-md-7 col-xs-12" type="text" required="required">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Chief Complaint History
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control" id="history" name="history" rows="3" required="required"></textarea>
                      </div>
                    </div>


                    <!-- Examination -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Examination
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <table class="table">
                          <tbody>
                            <tr>
                              <th scope="row">Vision</th>
                              <td>
                                <input type="text" id="re_vision" name="re_vision"  class="form-control col-md-4 col-xs-4" placeholder="R/E" required="required">
                              </td>
                              <td>
                                <input type="text" id="le_vision" name="le_vision"  class="form-control col-md-4 col-xs-4" placeholder="L/E" required="required">
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">Tension</th>
                              <td>
                                <input type="text" id="re_tension" name="re_tension"  class="form-control col-md-4 col-xs-4" placeholder="R/E">
                              </td>
                              <td>
                                <input type="text" id="le_tension" name="le_tension"  class="form-control col-md-4 col-xs-4" placeholder="L/E">
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">SAC</th>
                              <td>
                                <input type="text" id="re_sac" name="re_sac"  class="form-control col-md-4 col-xs-4" placeholder="R/E">
                              </td>
                              <td>
                                <input type="text" id="le_sac" name="le_sac"  class="form-control col-md-4 col-xs-4" placeholder="L/E">
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">Fundus</th>
                              <td>
                                <input type="text" id="re_fundus" name="re_fundus"  class="form-control col-md-4 col-xs-4" placeholder="R/E">
                              </td>
                              <td>
                                <input type="text" id="le_fundus" name="le_fundus"  class="form-control col-md-4 col-xs-4" placeholder="L/E">
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- End Examination -->


                    <!-- Diagnosis -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Diagnosis
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="diagnosis" name="diagnosis"  class="form-control col-md-7 col-xs-12" required="required">
                      </div>
                    </div>
                    <!-- End DIagnosis -->



                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Advice
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control" id="advice" name="advice" rows="3"></textarea>
                      </div>
                    </div>


                    <!-- OT -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                        <input id="ot" type="checkbox" name="ot" onchange="toggleStatus()" value="ot" />&nbsp;For OT Purpose 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12" id="elementsToOperateOn">
                        <div class="form-group" id="elementsToOperateOn">
                          <table class="table">
                            <tbody>
                              <tr>
                                <th scope="row">Blood Sugar</th>
                                <td colspan="3">
                                  <input type="text" id="blood_sugar" name="blood_sugar"  class="form-control col-md-4 col-xs-4">
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">Blood Pressure</th>
                                <td colspan="3">
                                  <input type="text" id="blood_pressure" name="blood_pressure"  class="form-control col-md-4 col-xs-4">
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">K1</th>
                                <td>
                                  <input type="text" id="k1" name="k1"  class="form-control col-md-4 col-xs-4">
                                </td>
                                <th scope="row">K2</th>
                                <td>
                                  <input type="text" id="k2" name="k2"  class="form-control col-md-4 col-xs-4">
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">Axial Length</th>
                                <td colspan="3">
                                  <input type="text" id="axial_length" name="axial_length"  class="form-control col-md-4 col-xs-4">
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">Intraocular Lens</th>
                                <td colspan="3">
                                  <input type="text" id="iol" name="iol"  class="form-control col-md-4 col-xs-4">
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <!-- End OT -->

                    <!-- Prescription Eye Drops -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Prescription
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <table class="table">
                          <thead>
                            <tr>
                              <th colspan="4" align="center">Eye Drops</th>
                            </tr>
                          </thead>
                          <tbody id="dynamic_field2">
                            <tr>
                              <td>
                                <input type="text" id="e_name[]" name="e_name[]"  class="form-control col-md-4 col-xs-4" list="browsers2"placeholder="Name">
                                  <datalist id="browsers2">
                                    <?php
                                      $query = mysqli_query($con, "SELECT * FROM eye_drops WHERE name LIKE '%".$searchTerm."%' ORDER BY name ASC");
                                      while ($row = mysqli_fetch_array($query)) {
                                        echo "<option value='".$row['name']."'>";
                                      }
                                    ?>
                                  </datalist>
                              </td>
                              <td>
                                <input type="text" id="e_time[]" name="e_time[]"  class="form-control col-md-4 col-xs-4" placeholder="Times">
                              </td>
                              <td>
                                <input type="text" id="e_duration[]" name="e_duration[]"  class="form-control col-md-4 col-xs-4" placeholder="Duration">
                              </td>
                              <td>
                                <input type="text" id="e_drops[]" name="e_drops[]"  class="form-control col-md-4 col-xs-4" placeholder="Drops">
                              </td>
                              <td>
                                <button type="button" id="add2" name="add2" class="btn btn-success">Add More</button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- End Eye Drops -->

                    <!-- Prescription Medicine -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <table class="table" id="dynamic_field">
                          <thead>
                            <tr>
                              <th colspan="4" align="center">Medicine</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <input type="text" id="m_name[]" name="m_name[]"  class="form-control col-md-4 col-xs-4" list="browsers" placeholder="Name">
                                  <datalist id="browsers">
                                    <?php
                                      $query = mysqli_query($con, "SELECT * FROM medicine WHERE name LIKE '%".$searchTerm."%' ORDER BY name ASC");
                                      while ($row = mysqli_fetch_array($query)) {
                                        echo "<option value='".$row['name']."'>";
                                      }
                                    ?>
                                  </datalist>
                              </td>
                              <td>
                                <input type="text" id="m_time[]" name="m_time[]"  class="form-control col-md-4 col-xs-4" placeholder="Times">
                              </td>
                              <td>
                                <input type="text" id="m_duration[]" name="m_duration[]"  class="form-control col-md-4 col-xs-4" placeholder="Duration">
                              </td>
                              <td>
                                <input type="text" id="m_pills[]" name="m_pills[]"  class="form-control col-md-4 col-xs-4" placeholder="Pills">
                              </td>
                              <td>
                                <button type="button" id="add" name="add" class="btn btn-success">Add More</button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- End Prescription -->


                    <!-- Glasses -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                        <input id="glasses" type="checkbox" name="glasses" onchange="toggleStatus2()" value="glasses" />&nbsp;Glasses
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12" id="elementsToOperateOn2">
                        <table class="table">
                          <thead>
                            <tr>
                              <th colspan="4" align="center">R/E</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">Distance</th>
                              <td>
                                <input type="text" id="re_d_s" name="re_d_s"  class="form-control col-md-4 col-xs-4" placeholder="Sph">
                              </td>
                              <td>
                                <input type="text" id="re_d_c" name="re_d_c"  class="form-control col-md-4 col-xs-4" placeholder="Cyl.">
                              </td>
                              <td>
                                <input type="text" id="re_d_a" name="re_d_a"  class="form-control col-md-4 col-xs-4" placeholder="Axis">
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">Near</th>
                              <td>
                                <input type="text" id="re_n_s" name="re_n_s"  class="form-control col-md-4 col-xs-4" placeholder="Sph">
                              </td>
                              <td>
                                <input type="text" id="re_n_c" name="re_n_c"  class="form-control col-md-4 col-xs-4" placeholder="Cyl.">
                              </td>
                              <td>
                                <input type="text" id="re_n_a" name="re_n_a"  class="form-control col-md-4 col-xs-4" placeholder="Axis">
                              </td>
                            </tr>
                          </tbody>
                        </table>

                        <table class="table">
                          <thead>
                            <tr>
                              <th colspan="4" align="center">L/E</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">Distance</th>
                              <td>
                                <input type="text" id="le_d_s" name="le_d_s"  class="form-control col-md-4 col-xs-4" placeholder="Sph">
                              </td>
                              <td>
                                <input type="text" id="le_d_c" name="le_d_c"  class="form-control col-md-4 col-xs-4" placeholder="Cyl.">
                              </td>
                              <td>
                                <input type="text" id="le_d_a" name="le_d_a"  class="form-control col-md-4 col-xs-4" placeholder="Axis">
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">Near</th>
                              <td>
                                <input type="text" id="le_n_s" name="le_n_s"  class="form-control col-md-4 col-xs-4" placeholder="Sph">
                              </td>
                              <td>
                                <input type="text" id="le_n_c" name="le_n_c"  class="form-control col-md-4 col-xs-4" placeholder="Cyl.">
                              </td>
                              <td>
                                <input type="text" id="le_n_a" name="le_n_a"  class="form-control col-md-4 col-xs-4" placeholder="Axis">
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- End Glasses -->
                    

                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="button" id="submit" name="submit" class="btn btn-success">Preview</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <!-- Add More Button Medicine -->
          <script type="text/javascript">
            $(document).ready(function(){   
              var i=1;  

              $('#add').click(function(){  
                   i++;  
                   $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" id="m_name[]" name="m_name[]"  class="form-control col-md-4 col-xs-4"  list="browsers" placeholder="Name"></td><td><input type="text" id="m_time[]" name="m_time[]"  class="form-control col-md-4 col-xs-4" placeholder="Time"></td><td><input type="text" id="m_duration[]" name="m_duration[]"  class="form-control col-md-4 col-xs-4" placeholder="Duration"></td><td><input type="text" id="m_pills[]" name="m_pills[]"  class="form-control col-md-4 col-xs-4" placeholder="Pills"></td><td> <button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
              });

              $(document).on('click', '.btn_remove', function(){  
                   var button_id = $(this).attr("id");   
                   $('#row'+button_id+'').remove();  
              });  
            });  
        </script>
        <!-- End More Button Medicine -->

          <script type="text/javascript">
            $(document).ready(function() {
              $('#datee').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_4"
              }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
              });
            });
          </script>


          <!-- For OT purpose -->
          <script type="text/javascript">
            $('#elementsToOperateOn :input').attr('disabled', true);
            
            $(document).ready(function() {
 
              handleStatusChanged();
              
            });

            function handleStatusChanged() {
                $('#ot').on('change', function () {
                  toggleStatus();   
                });
            }

            function toggleStatus() {
                if ($('#ot').is(':checked')) {
                    $('#elementsToOperateOn :input').removeAttr('disabled');
                } else {
                  $('#elementsToOperateOn :input').attr('disabled', true);  
                }   
            }
          </script>
          <!-- End For OT Purpose -->


          <!-- For Glasses -->
          <script type="text/javascript">
            $('#elementsToOperateOn2 :input').attr('disabled', true);
            
            $(document).ready(function() {
 
              handleStatusChanged2();
              
            });

            function handleStatusChanged2() {
                $('#glasses').on('change', function () {
                  toggleStatus2();   
                });
            }

            function toggleStatus2() {
                if ($('#glasses').is(':checked')) {
                    $('#elementsToOperateOn2 :input').removeAttr('disabled');
                } else {
                  $('#elementsToOperateOn2 :input').attr('disabled', true);  
                }   
            }
          </script>
          <!-- End For Glasses -->


        <!-- Add More Button Eye Drops -->
          <script type="text/javascript">
            $(document).ready(function(){  
              var i=1;  

              $('#add2').click(function(){  
                   i++;  
                   $('#dynamic_field2').append('<tr id="row'+i+'"><td><input type="text" id="e_name[]" name="e_name[]"  class="form-control col-md-4 col-xs-4" list="browsers2" placeholder="Name"></td><td><input type="text" id="e_time[]" name="e_time[]"  class="form-control col-md-4 col-xs-4" placeholder="Time"></td><td><input type="text" id="e_duration[]" name="e_duration[]"  class="form-control col-md-4 col-xs-4" placeholder="Duration"></td><td><input type="text" id="e_drops[]" name="e_drops[]"  class="form-control col-md-4 col-xs-4" placeholder="Drops"></td><td> <button type="button" name="remove2" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
              });

              $(document).on('click', '.btn_remove2', function(){  
                   var button_id = $(this).attr("id");   
                   $('#row'+button_id+'').remove();  
              });  
            });  
        </script>
        <!-- End More Button Eye Drops -->

          <!-- <script type="text/javascript">
            $(document).ready(function() {
              $('#birthday').daterangepicker({
                singleDatePicker: true,
                calender_style: "picker_4"
              }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
              });
            });
          </script> -->
        </div>
        <!-- /page content -->

<?php
include("footer.php");
?>

<!-- Datatables-->
        <script src="js/datatables/jquery.dataTables.min.js"></script>
        <script src="js/datatables/dataTables.bootstrap.js"></script>
        <script src="js/datatables/dataTables.buttons.min.js"></script>
        <script src="js/datatables/buttons.bootstrap.min.js"></script>
        <script src="js/datatables/jszip.min.js"></script>
        <script src="js/datatables/pdfmake.min.js"></script>
        <script src="js/datatables/vfs_fonts.js"></script>
        <script src="js/datatables/buttons.html5.min.js"></script>
        <script src="js/datatables/buttons.print.min.js"></script>
        <script src="js/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="js/datatables/dataTables.keyTable.min.js"></script>
        <script src="js/datatables/dataTables.responsive.min.js"></script>
        <script src="js/datatables/responsive.bootstrap.min.js"></script>
        <script src="js/datatables/dataTables.scroller.min.js"></script>

        <!-- pace -->
        <script src="js/pace/pace.min.js"></script>
        <script>
          var handleDataTableButtons = function() {
              "use strict";
              0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
                dom: "Bfrtip",
                buttons: [{
                  extend: "copy",
                  className: "btn-sm"
                }, {
                  extend: "csv",
                  className: "btn-sm"
                }, {
                  extend: "excel",
                  className: "btn-sm"
                }, {
                  extend: "pdf",
                  className: "btn-sm"
                }, {
                  extend: "print",
                  className: "btn-sm"
                }],
                responsive: !0
              })
            },
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
              keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable({
              ajax: "js/datatables/json/scroller-demo.json",
              deferRender: true,
              scrollY: 380,
              scrollCollapse: true,
              scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
              fixedHeader: true
            });
          });
          TableManageButtons.init();
        </script>

</body>

</html>
