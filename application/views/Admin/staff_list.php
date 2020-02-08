<!DOCTYPE html>
<html>
<style>
  td{
    padding:2px 10px !important;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mt-1">
            <h4>Staff Information</h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fa fa-list"></i> List Staff Information</h3>
              <div class="card-tools">
                <a href="<?php echo base_url() ?>Admin/staff" class="btn btn-sm btn-block btn-primary">Add Staff</a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Staff Type</th>
                  <th>Name</th>
                  <th>Qualification</th>
                  <th>Possition</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                    foreach ($staff_list as $list) {
                    $i++; ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $list->staff_type ?></td>
                      <td><?php echo $list->staff_name ?></td>
                      <td><?php echo $list->staff_qualification ?></td>
                      <td><?php echo $list->staff_possition ?></td>
                      <td>
                        <a href="<?php echo base_url(); ?>Admin/edit_staff/<?php echo $list->staff_id; ?>"> <i class="fa fa-edit"></i> </a>
                        <a href="<?php echo base_url(); ?>Admin/delete_staff/<?php echo $list->staff_id; ?>" onclick="return confirm('Delete this User');" class="ml-4"> <i class="fa fa-trash"></i> </a>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
  </div>

</body>
</html>
