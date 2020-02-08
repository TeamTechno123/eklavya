<!DOCTYPE html>
<html>
<style>
  td{
    padding:2px 10px !important;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 mt-1">
            <h4>Enquiry Information</h4>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
            <div class="card-header">
              <h3 class="card-title"><i class="fa fa-list"></i> List Enquiry Information</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Name.</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Subject</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i = 0;
                  foreach ($contact_emails_list as $list) {
                    $i++; ?>
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td class="name_<?php echo $i; ?>" ><?php echo $list->name; ?></td>
                    <td class="email_<?php echo $i; ?>" ><?php echo $list->email; ?></td>
                    <td class="mobile_<?php echo $i; ?>" ><?php echo $list->mobile; ?></td>
                    <td class="subject_<?php echo $i; ?>" ><?php echo $list->subject; ?></td>
                    <td>
                      <input type="hidden" class="msg_<?php echo $i; ?>" value="<?php echo $list->message; ?>">
                      <a href="#" num="<?php echo $i; ?>" class="view_mail" data-toggle="modal" data-target=".bd-example-modal-lg"> <i class="fa fa-eye"></i> Details</a>
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
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Email Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6 offset-md-3">
                <p>Name : <span id="name"></span>  </p>
                <p>Email : <span id="email"></span>  </p>
                <p>Mobile : <span id="mobile"></span>  </p>
                <p>Subject : <span id="subject"></span>  </p>
                <p>Message : <span id="msg"></span>  </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- /Modal -->
  </div>

  <script type="text/javascript">
    $('.view_mail').on('click', function(){
      var id = $(this).attr('num');
      name = $('.name_'+id).text();
      email = $('.email_'+id).text();
      mobile = $('.mobile_'+id).text();
      subject = $('.subject_'+id).text();
      msg = $('.msg_'+id).val();

      $('#name').text(name);
      $('#email').text(email);
      $('#mobile').text(mobile);
      $('#subject').text(subject);
      $('#msg').text(msg);



      // alert(msg);
    })
  </script>

</body>
</html>
