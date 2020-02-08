<section class="gallery-page"  style="height:100vh;">
  <div class="container">
    <div class="col-md-12">
      <h1 class="page-heading text-center"> CBSC <?php echo $title; ?></h1>
    </div>

    <div class="row">
      <table class="table table-hover">
        <thead>
          <tr>
            <th class="w-90" scope="col">#</th>
            <th scope="col">Title</th>
            <th class="w-90" scope="col">Download</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=0; foreach ($cbsc_notification_list as $list1) { $i++; ?>
            <tr>
              <th class="w-90"scope="row"><?php echo $i; ?></th>
              <td><?php echo $list1->notification_title; ?></td>
              <td class="w-90" > <a target="_blank" href="<?php echo base_url(); ?>assets/images/notification/<?php echo $list1->notification_image; ?>"><i class="fa fa-download"></i></a> </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</section>
