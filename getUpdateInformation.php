<?php 
if($type==="medicine")
{
  ?>
<!--   <style type="text/css">
    .form-control{
      border-radius: 0;
      width: 100%;
    }
  </style> -->
<div class="modal fade" id="modal<?php echo $row['id']; ?>" 
  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" 
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Medicine</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal form-label-left" method="post">
          
          <div class="col-md-12">
            <div class="form-group col-md-12">
              <label class="control-label col-md-3" for="first-name">Medicine <span class="required">*</span>
              </label>
              <div class="col-md-9">
                <input type="text" id="name" name="name" required="required"  
                value="<?php echo $row['name']; ?>" class="form-control col-md-7 col-xs-12"  />
                <input type="hidden" name="id" required="required" value="<?php echo $row['id']; ?>" class="form-control col-md-7 col-xs-12" />
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group col-md-12" style="padding-top: 15px;">
              <div class="col-md-9 col-md-offset-3">
                <button type="submit" name="update" id="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <?php
}
?>


<?php 
if($type==="eyedrops")
{
  ?>
<div class="modal fade" id="modal<?php echo $row['id']; ?>" 
  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" 
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Eye Drops</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal form-label-left" method="post">
          
          <div class="col-md-12">
            <div class="form-group col-md-12">
              <label class="control-label col-md-3" for="first-name">Eye Drops <span class="required">*</span>
              </label>
              <div class="col-md-9">
                <input type="text" id="name" name="name" required="required"  
                value="<?php echo $row['name']; ?>" class="form-control col-md-7 col-xs-12"  />
                <input type="hidden" name="id" required="required" value="<?php echo $row['id']; ?>" class="form-control col-md-7 col-xs-12" />
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group col-md-12" style="padding-top: 15px;">
              <div class="col-md-9 col-md-offset-3">
                <button type="submit" name="update" id="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <?php
}
?>


<?php 
if($type==="history")
{
  ?>
<div class="modal fade" id="modal<?php echo $row['id']; ?>" 
  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" 
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit History</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal form-label-left" method="post">
          
          <div class="col-md-12">
            <div class="form-group col-md-12">
              <label class="control-label col-md-3" for="first-name">History <span class="required">*</span>
              </label>
              <div class="col-md-9">
                <input type="text" id="name" name="name" required="required"  
                value="<?php echo $row['name']; ?>" class="form-control col-md-7 col-xs-12"  />
                <input type="hidden" name="id" required="required" value="<?php echo $row['id']; ?>" class="form-control col-md-7 col-xs-12" />
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group col-md-12" style="padding-top: 15px;">
              <div class="col-md-9 col-md-offset-3">
                <button type="submit" name="update" id="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <?php
}
?>