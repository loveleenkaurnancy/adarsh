<?php
	include("header.php");
	
  if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$query = mysqli_query($con, "INSERT INTO medicine(name) values ('$name')");
		if($query)
		{
			$msg1 = "Submitted Successfully";
		}
		else
		{
			$msg2 = "Error";
		}
	}

  if(isset($_POST['update']) )
  {
    $name = $_POST['name'];
    $id = $_POST['id'];

    $query = mysqli_query($con,"update medicine set name = '$name' where id='$id'");

    if($query)
    {
        $msg1 = '<strong>Success!</strong> Data Updated Successfully.';
    }
    else
    {
        $msg2 = 'Data Not Updated';
    }
  }

  if(isset($_GET['idde']))
  {
    $id = $_GET['idde'];
    $query = mysqli_query($con, "DELETE FROM MEDICINE where id = '$id' ");
    if($query)
    {
      $msg1 = '<strong>Success!</strong> Data Deleted successfully.';
    }
    else
    {
      $msg2 = 'Data Not Deleted';
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
                  <h2>Add Medicine </h2>
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

          <!-- resp -->

                    <div class="row">

                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Medicines</h2>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>Sr. No.</th>
                              <th>Name</th>
                              <th>Edit</th>
                              <th>Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                              include("config.php");
                              $sql = mysqli_query($con, "SELECT * FROM medicine order by id desc");
                              if($sql)
                              {
                                $idd = 0;
                                $type = "medicine";
                                while($row = mysqli_fetch_array($sql))
                                {
                                  $idd++;
                            ?>
                            <tr>
                              <td><?php echo $idd ?></td>
                              <td><?php echo $row['name'] ?></td>
                              <td><?php echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal'.$row['id'].'">Edit</button>';
                              include "getUpdateInformation.php" ?>

                              <td><?php echo "<a href='medicine.php?idde=$row[id]'><button class='btn btn-danger'>Delete</button></a>" ?></td>
                            </tr>

                            <?php
                              }
                            }
                            ?>
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>


          <!-- end res -->

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
