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
            <h1>Achievement Information</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Achievement Information</h3>
              </div>
              <form id="form_action" role="form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="card-body row">
                  <div class="form-group col-md-12 drop-lg">
                    <select class="form-control select2" name="achievement_type" id="achievement_type" title="Select Achievement Type" data-placeholder="Select Achievement Type" style="width: 100%;" required>
                      <option selected="selected" value="" >Select Achievement Type </option>
                      <option value="School" <?php if(isset($achievement_type) && $achievement_type == 'School'){ echo 'selected'; } ?> >School Achievement</option>
                      <option value="Teacher" <?php if(isset($achievement_type) && $achievement_type == 'Teacher'){ echo 'selected'; } ?> >Teacher Achievement</option>
                      <option value="Student" <?php if(isset($achievement_type) && $achievement_type == 'Student'){ echo 'selected'; } ?> >Student Achievement</option>
                    </select>
                  </div>
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control required" name="achievement_title" id="achievement_title" value="<?php if(isset($achievement_title)){ echo $achievement_title; } ?>" placeholder="Achievement Title" required>
                  </div>
                  <div class="form-group col-md-6">
                  </div>
                  <div class="form-group text-right col-md-6">
                      <button type="button"  id="add_row" class="btn btn-sm btn-primary px-4">Add More </button>
                  </div>

                  <table id="myTable" class="table table-bordered mb-4 tbl_cust1">
                    <?php if(isset($update)){
                      foreach ($achievement_details_list as $list) { ?>
                        <input type="hidden" name="achievement_details_id[]" value="<?php echo $list->achievement_details_id; ?>">
                      <tr>
                        <td>
                          <div class="form-group col-md-12 m-0 p-0">
                            <input type="text" class="form-control form-control-sm" name="achievement_details_title[]" value="<?php echo $list->achievement_details_title; ?>" placeholder="Achievement Title" required>
                          </div>
                        </td>
                        <td>
                          <div class="form-group col-md-12 m-0 p-0">
                            <input type="text" class="form-control form-control-sm" name="achievement_details_name[]" value="<?php echo $list->achievement_details_name; ?>" placeholder="Name of Achiever" required>
                          </div>
                        </td>
                        <td class="w-25">
                          <div class="form-group col-md-12 m-0 p-0">
                            <img width="40%" src="<?php echo base_url(); ?>assets/images/achievement/<?php echo $list->achievement_details_img; ?>"  alt="">
                            <input type="hidden" name="old_achievement_details_img[]" value="<?php echo $list->achievement_details_img; ?>">
                            <input type="file" name="achievement_details_img[]" class="form-control form-control-sm">
                          </div>
                        </td>
                        <td width="80"><a class="rem_img" achievement_details_img="<?php echo $list->achievement_details_img; ?>" achievement_details_id="<?php echo $list->achievement_details_id; ?>" ><i class="fa fa-trash text-danger"></i></a></td>
                      </tr>
                    <?php } } else{ ?>
                      <tr>
                        <td>
                          <div class="form-group col-md-12 m-0 p-0">
                            <input type="text" class="form-control form-control-sm" name="achievement_details_title[]" placeholder="Achievement Title" required>
                          </div>
                        </td>
                        <td>
                          <div class="form-group col-md-12 m-0 p-0">
                            <input type="text" class="form-control form-control-sm" name="achievement_details_name[]" placeholder="Name of Achiever" required>
                          </div>
                        </td>
                        <td class="w-25">
                          <div class="form-group col-md-12 m-0 p-0">
                            <input type="file" name="achievement_details_img[]" class="form-control form-control-sm" required>
                          </div>
                        </td>
                        <td width="80"></td>
                      </tr>
                    <?php } ?>
                  </table>

                  <div class="form-group col-md-6">
                    <div class="form-check">
                      <input type="checkbox" name="achievement_status" <?php if(isset($achievement_status)&& $achievement_status=='0') { echo 'checked'; } ?> value="0" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Disable This</label>
                    </div>
                  </div>
                </div>
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
      </div>
    </section>
  </div>
</body>
</html>

<script type="text/javascript">
var i=0;
$('#add_row').click(function(){
  i++;
  var row = ''+
    '<tr>'+
    '<td>'+
      '<div class="form-group col-md-12 m-0 p-0">'+
        '<input type="text" class="form-control form-control-sm" name="achievement_details_title[]" placeholder="Achievement Title" required>'+
      '</div>'+
    '</td>'+
    '<td>'+
      '<div class="form-group col-md-12 m-0 p-0">'+
        '<input type="text" class="form-control form-control-sm" name="achievement_details_name[]" placeholder="Name of Achiever" required>'+
      '</div>'+
    '</td>'+
    '<td class="w-25">'+
      '<div class="form-group col-md-12 m-0 p-0">'+
        '<input type="file" name="achievement_details_img[]" class="form-control form-control-sm">'+
      '</div>'+
    '</td>'+
    '<td width="80"><a><i class="fa fa-trash text-danger rem_row"></i></a></td>'+
  '</tr>';
  $('#myTable').append(row);
 });

 $('#myTable').on('click', '.rem_row', function () {
  $(this).closest('tr').remove();
 });

 $('#myTable').on('click', '.rem_img', function () {
    var achievement_details_img = $(this).attr('achievement_details_img');
    var achievement_details_id = $(this).attr('achievement_details_id');
    $.ajax({
      url: '<?php echo base_url(); ?>Admin/delete_achievement_details',
      method:'post',
      data:{ 'achievement_details_img':achievement_details_img,
             'achievement_details_id':achievement_details_id, },
      context: this,
      success:function(){
        $(this).closest('tr').remove();
      }
    });
  });
</script>
