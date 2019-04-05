<?php

	include("header.php");
	
  if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $address = $_POST['address'];
    $datee = $_POST['datee'];
    $history = $_POST['history'];
    $advice = $_POST['advice'];

    $re_vision = $_POST['re_vision'];
    $le_vision = $_POST['le_vision'];
    $re_tension = $_POST['re_tension'];
    $le_tension = $_POST['le_tension'];
    $re_sac = $_POST['re_sac'];
    $le_sac = $_POST['le_sac'];

    $re_d_s = $_POST['re_d_s'];
    $re_d_c = $_POST['re_d_c'];
    $re_d_a = $_POST['re_d_a'];

    $re_n_s = $_POST['re_n_s'];
    $re_n_c = $_POST['re_n_c'];
    $re_n_a = $_POST['re_n_a'];

    $le_d_s = $_POST['le_d_s'];
    $le_d_c = $_POST['le_d_c'];
    $le_d_a = $_POST['le_d_a'];

    $le_n_s = $_POST['le_n_s'];
    $le_n_c = $_POST['le_n_c'];
    $le_n_a = $_POST['le_n_a'];

    $ot = $_POST['ot'];
    $blood_sugar = $_POST['blood_sugar'];
    $blood_pressure = $_POST['blood_pressure'];
    $k1 = $_POST['k1'];
    $k2 = $_POST['k2'];
    $axial_length = $_POST['axial_length'];
    $iol = $_POST['iol'];

		$query = mysqli_query($con, "INSERT INTO opd_details(name, age, sex, address, datee, history, advice, re_vision, le_vision, re_tension, le_tension, re_sac, le_sac, re_d_s, re_d_c, re_d_a, re_n_s, re_n_c, re_n_a, le_d_s, le_d_c, le_d_a, le_n_s, le_n_c, le_n_a, ot, blood_sugar, blood_pressure, k1, k2, axial_length, iol) values ('$name', '$age', '$sex', '$address', '$datee', '$history', '$advice', '$re_vision', '$le_vision', '$re_tension', '$le_tension', '$re_sac', '$le_sac', '$re_d_s', '$re_d_c', '$re_d_a', '$re_n_s', '$re_n_c', '$re_n_a', '$le_d_s', '$le_d_c', '$le_d_a', '$le_n_s', '$le_n_c', '$le_n_a', '$ot', '$blood_sugar', '$blood_pressure', '$k1', '$k2', '$axial_length', '$iol')");
		
    if($query)
		{
			$msg1 = "Submitted Successfully";
		}
		else
		{
			$msg2 = "Error";
		}
	}

?>




<link href="js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />

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
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form class="form-horizontal form-label-left" method="POST">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Age
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="age" name="age" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Gender 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div id="gender" class="btn-group" data-toggle="buttons">
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="sex" value="male"> &nbsp; Male &nbsp;
                          </label>
                          <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                            <input type="radio" name="sex" value="female" checked=""> Female
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Address
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control" name="address" rows="3"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Date
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="datee" class="date-picker form-control col-md-7 col-xs-12" name="datee" required="required" type="text">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cheif Complaint History
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control" name="history" rows="3"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Advice
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea class="form-control" name="advice" rows="3"></textarea>
                      </div>
                    </div>

                    <!-- Diagnosis -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Diagnosis
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <table class="table">
                          <tbody>
                            <tr>
                              <th scope="row">Vision</th>
                              <td>
                                <input type="text" id="re_vision" name="re_vision" required="required" class="form-control col-md-4 col-xs-4" placeholder="R/E">
                              </td>
                              <td>
                                <input type="text" id="le_vision" name="le_vision" required="required" class="form-control col-md-4 col-xs-4" placeholder="L/E">
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">Tension</th>
                              <td>
                                <input type="text" id="re_tension" name="re_tension" required="required" class="form-control col-md-4 col-xs-4" placeholder="R/E">
                              </td>
                              <td>
                                <input type="text" id="le_tension" name="le_tension" required="required" class="form-control col-md-4 col-xs-4" placeholder="L/E">
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">SAC</th>
                              <td>
                                <input type="text" id="re_sac" name="re_sac" required="required" class="form-control col-md-4 col-xs-4" placeholder="R/E">
                              </td>
                              <td>
                                <input type="text" id="le_sac" name="le_sac" required="required" class="form-control col-md-4 col-xs-4" placeholder="L/E">
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- End Diagnosis -->

                    <!-- Glasses -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Glasses
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
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
                                <input type="text" id="r_d_s" name="re_d_s" required="required" class="form-control col-md-4 col-xs-4" placeholder="Sph">
                              </td>
                              <td>
                                <input type="text" id="r_d_c" name="re_d_c" required="required" class="form-control col-md-4 col-xs-4" placeholder="Cyl.">
                              </td>
                              <td>
                                <input type="text" id="r_d_a" name="re_d_a" required="required" class="form-control col-md-4 col-xs-4" placeholder="Axis">
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">Near</th>
                              <td>
                                <input type="text" id="r_n_s" name="re_n_s" required="required" class="form-control col-md-4 col-xs-4" placeholder="Sph">
                              </td>
                              <td>
                                <input type="text" id="r_n_c" name="re_n_c" required="required" class="form-control col-md-4 col-xs-4" placeholder="Cyl.">
                              </td>
                              <td>
                                <input type="text" id="r_n_a" name="re_n_a" required="required" class="form-control col-md-4 col-xs-4" placeholder="Axis">
                              </td>
                            </tr>
                          </tbody>
                        </table>

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
                                <input type="text" id="l_d_s" name="le_d_s" required="required" class="form-control col-md-4 col-xs-4" placeholder="Sph">
                              </td>
                              <td>
                                <input type="text" id="l_d_c" name="le_d_c" required="required" class="form-control col-md-4 col-xs-4" placeholder="Cyl.">
                              </td>
                              <td>
                                <input type="text" id="l_d_a" name="le_d_a" required="required" class="form-control col-md-4 col-xs-4" placeholder="Axis">
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">Near</th>
                              <td>
                                <input type="text" id="l_n_s" name="le_n_s" required="required" class="form-control col-md-4 col-xs-4" placeholder="Sph">
                              </td>
                              <td>
                                <input type="text" id="l_n_c" name="le_n_c" required="required" class="form-control col-md-4 col-xs-4" placeholder="Cyl.">
                              </td>
                              <td>
                                <input type="text" id="l_n_a" name="le_n_a" required="required" class="form-control col-md-4 col-xs-4" placeholder="Axis">
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- End Glasses -->

                    <!-- OT -->
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> <input type="checkbox" name="ot" id="ot" value="ot" data-parsley-mincheck="2" class="flat" /> For OT Purpose 
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       

                        <div class="form-group">
                          <table class="table">
                            <tbody>
                              <tr>
                                <th scope="row">Blood Sugar</th>
                                <td colspan="3">
                                  <input type="text" id="blood_sugar" name="blood_sugar" required="required" class="form-control col-md-4 col-xs-4">
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">Blood Pressure</th>
                                <td colspan="3">
                                  <input type="text" id="blood_pressure" name="blood_pressure" required="required" class="form-control col-md-4 col-xs-4">
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">K1</th>
                                <td>
                                  <input type="text" id="k1" name="k1" required="required" class="form-control col-md-4 col-xs-4">
                                </td>
                                <th scope="row">K2</th>
                                <td>
                                  <input type="text" id="k2" name="k2" required="required" class="form-control col-md-4 col-xs-4">
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">Axial Length</th>
                                <td colspan="3">
                                  <input type="text" id="axial_length" name="axial_length" required="required" class="form-control col-md-4 col-xs-4">
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">IoL1</th>
                                <td colspan="3">
                                  <input type="text" id="iol" name="iol" required="required" class="form-control col-md-4 col-xs-4">
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <!-- End OT -->

                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>

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

                  </form>
                </div>
              </div>
            </div>
          </div>

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
