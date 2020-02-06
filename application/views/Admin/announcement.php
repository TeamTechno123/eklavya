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
            <h1>ANNOUNCEMENT INFORMATION</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-8 offset-md-2">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Announcements Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control required" name="announcement_no" id="announcement_no" value="<?php if(isset($announcement_no)){ echo $announcement_no; } ?>" placeholder="Announcement No." required>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control required date" id="date1" data-target="#date1" data-toggle="datetimepicker" name="announcement_date" id="announcement_date" value="<?php if(isset($announcement_date)){ echo $announcement_date; } ?>" placeholder="Announcement Date" required>
                  </div>
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control required" name="announcement_title" id="announcement_title" value="<?php if(isset($announcement_title)){ echo $announcement_title; } ?>" placeholder="Announcement Title" required>
                  </div>

                  <div class="form-group col-md-12">
                    <input type="file" name="announcement_image" id="announcement_image" class="form-control" id="exampleInputFile">
                  </div>
                  <div class="form-group col-md-6">
                  <div class="form-check">
                    <input type="checkbox" name="priority"  <?php if(isset($priority)&& $priority=='1') { echo 'checked'; } ?> value="1" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Mark As Important</label>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <div class="form-check">
                    <input type="checkbox" name="announcement_status" <?php if(isset($announcement_status)&& $announcement_status=='0') { echo 'checked'; } ?> value="0" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Disable This</label>
                  </div>
                </div>
                  <?php if(isset($announcement_image)){ ?>
                  <div class="form-group col-md-6">
                    <img style="height:150px; width:150px;" src="<?php echo base_url(); ?>assets/images/announcement/<?php echo $announcement_image; ?>" alt="">
                  </div>
                  <input type="hidden" name="img_old" value="<?php echo $announcement_image; ?>">
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
          <!--/.col (left) -->
          <!-- right column -->
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  </div>

</body>
</html>
