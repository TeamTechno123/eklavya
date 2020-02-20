<!DOCTYPE html>
<html>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center mt-2">
            <h1>Staff Information</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Staff Information</h3>
              </div>
              <form id="form_action" role="form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="card-body row">
                  <div class="form-group col-md-12 drop-lg">
                    <select class="form-control select2" name="staff_type" id="staff_type" title="Select Staff Type" data-placeholder="Select Staff Type" style="width: 100%;" required>
                      <option selected="selected" value="" >Select Staff Type </option>
                      <option value="Teaching Staff" <?php if(isset($staff_type) && $staff_type == 'Teaching Staff'){ echo 'selected'; } ?> >Teaching Staff</option>
                      <option value="Office Staff" <?php if(isset($staff_type) && $staff_type == 'Office Staff'){ echo 'selected'; } ?> >Office Staff</option>
                      <option value="Sports Staff" <?php if(isset($staff_type) && $staff_type == 'Sports Staff'){ echo 'selected'; } ?> >Sports Staff</option>
                      <option value="Non Teaching Staff" <?php if(isset($staff_type) && $staff_type == 'Non Teaching Staff'){ echo 'selected'; } ?> >Non Teaching Staff</option>
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control required" name="staff_name" id="staff_name" value="<?php if(isset($staff_name)){ echo $staff_name; } ?>" placeholder="Name" required>
                  </div>
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control required" name="staff_possition" id="staff_possition" value="<?php if(isset($staff_possition)){ echo $staff_possition; } ?>" placeholder="Possition">
                  </div>
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control required" name="staff_qualification" id="staff_qualification" value="<?php if(isset($staff_qualification)){ echo $staff_qualification; } ?>" placeholder="Qualification">
                  </div>
                  <div class="form-group col-md-12">
                      <label>Image Size Must Be 180px * 220px and Size Less Than 1MB </label>
                    <input type="file" name="staff_img" id="staff_img" class="form-control" id="exampleInputFile">
                  </div>
                  <?php if(isset($staff_img)){ ?>
                  <div class="form-group col-md-6">
                    <img style="height:150px; width:150px;" src="<?php echo base_url(); ?>assets/images/staff/<?php echo $staff_img; ?>" alt="">
                  </div>
                  <input type="hidden" name="img_old" value="<?php echo $staff_img; ?>">
                  <?php } ?>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <?php if(isset($update)){ ?>
                    <button id="btn_update" type="submit" class="btn btn-primary">Update </button>
                  <?php } else{ ?>
                    <button id="btn_save" type="submit" class="btn btn-success px-4">Add</button>
                  <?php } ?>
                  <a href="<?php echo base_url() ?>User/dashboard" class="btn btn-default ml-4">Cancel</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  </div>
</body>
</html>
