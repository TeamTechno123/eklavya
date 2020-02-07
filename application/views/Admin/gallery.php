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
            <h1>PHOTO GALLERY INFORMATION</h1>
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
                <h3 class="card-title">Photo Gallery Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="form_action" role="form" action="" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="card-body row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control required" name="gallery_no" id="gallery_no" value="<?php if(isset($gallery_no)){ echo $gallery_no; } ?>" placeholder="Gallery No." required>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control required date" id="date1" data-target="#date1" data-toggle="datetimepicker" name="gallery_date" id="gallery_date" value="<?php if(isset($gallery_date)){ echo $gallery_date; } ?>" placeholder="Date" required>
                  </div>
                  <div class="form-group col-md-12">
                    <input type="text" class="form-control required" name="gallery_title" id="gallery_title" value="<?php if(isset($gallery_title)){ echo $gallery_title; } ?>" placeholder="Gallery Title" required>
                  </div>
                  <div class="form-group col-md-6">
                  </div>
                  <div class="form-group text-right col-md-6">
                      <button type="button"  id="add_row" class="btn btn-sm btn-primary px-4">Add More </button>
                  </div>
                  <table id="myTable" class="table table-bordered mb-4 tbl_cust1">
                    <?php if(isset($update)){
                      foreach ($gallery_photo_list as $list) { ?>
                      <tr>
                        <td>
                          <div class="form-group col-md-12">
                            <img width="40%" src="<?php echo base_url(); ?>assets/images/gallery/<?php echo $list->gallery_photo_name; ?>"  alt="">

                          </div>
                        </td>
                        <td width="80"><a class="rem_img" gallery_photo_name="<?php echo $list->gallery_photo_name; ?>" gallery_photo_id="<?php echo $list->gallery_photo_id; ?>" ><i class="fa fa-trash text-danger"></i></a></td>
                      </tr>
                    <?php } } else{ ?>
                      <tr>
                        <td>
                          <div class="form-group col-md-12">
                            <input type="file" name="gallery_photo_name[]" id="gallery_photo_name" class="form-control form-control-sm" id="exampleInputFile">
                          </div>
                        </td>
                        <td width="80"></td>
                      </tr>
                    <?php } ?>

                  </table>
                  <div class="form-group col-md-6">
                  <div class="form-check">
                    <input type="checkbox" name="gallery_status" <?php if(isset($gallery_status)&& $gallery_status=='0') { echo 'checked'; } ?> value="0" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Disable This</label>
                  </div>
                </div>

                  <?php if(isset($gallery_photo_name)){ ?>
                  <div class="form-group col-md-6">
                    <img style="height:150px; width:150px;" src="<?php echo base_url(); ?>assets/images/product/<?php echo $gallery_photo_name; ?>" alt="">
                  </div>
                  <input type="hidden" name="img_old" value="<?php echo $gallery_photo_name; ?>">
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

<script type="text/javascript">
// $(document).ready(function(){
//   $('#add_row').prop('readonly',true);
// });

var i=0;
$('#add_row').click(function(){
  i++;
  var row = '<tr>'+
           '<td>'+
             '<div class="form-group col-md-12">'+
                 '<input type="file" name="gallery_photo_name[]" id="gallery_photo_name" class="form-control form-control-sm" id="exampleInputFile">'+
               '</div>'+
           '</td>'+
            '<td><a><i class="fa fa-trash text-danger rem_row"></i></a></td>'+
         '</tr>';
  $('#myTable').append(row);
 });

 $('#myTable').on('click', '.rem_row', function () {
  $(this).closest('tr').remove();
 });

  $('#myTable').on('click', '.rem_img', function () {

    var gallery_photo_name = $(this).attr('gallery_photo_name');
    var gallery_photo_id = $(this).attr('gallery_photo_id');
    // alert(gallery_photo_name);
    $.ajax({
      url: '<?php echo base_url(); ?>Admin/delete_gallery_photo',
      method:'post',
      data:{ 'gallery_photo_name':gallery_photo_name,
             'gallery_photo_id':gallery_photo_id, },
      context: this,
      success:function(){
        $(this).closest('tr').remove();
      }
    });
  });
</script>
