<section class="gallery-page">
  <div class="container">
    <div class="col-md-12">
      <h1 class="page-heading text-center">Non</h1>
    </div>
    <div class="row">
      <?php foreach ($staff_list as $list) { ?>
        <div class="col-md-3">
          <div class="card">
            <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/staff/<?php echo $list->staff_img; ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title text-center mb-1"><?php echo $list->staff_name; ?></h5>
              <p class="card-text text-center"><?php echo $list->staff_qualification; ?></p>
            </div>
          </div>
        </div>
      <?php } ?>
      <!-- <div class="col-md-3">
        <img class="gallery-img"  src="<?php echo base_url(); ?>assets/images/gallery01.jpg" width="100%" alt="">
      </div>
      <div class="col-md-3">
        <img class="gallery-img" src="<?php echo base_url(); ?>assets/images/gallery02.jpg" width="100%" alt="">
      </div>
      <div class="col-md-3">
        <img class="gallery-img" src="<?php echo base_url(); ?>assets/images/gallery03.jpg" width="100%" alt="">
      </div>
      <div class="col-md-3">
        <img class="gallery-img" src="<?php echo base_url(); ?>assets/images/gallery04.jpg" width="100%" alt="">
      </div>
      <div class="col-md-3">
        <img class="gallery-img" src="<?php echo base_url(); ?>assets/images/gallery05.jpg" width="100%" alt="">
      </div>
      <div class="col-md-3">
        <img class="gallery-img" src="<?php echo base_url(); ?>assets/images/gallery06.jpg" width="100%" alt="">
      </div>
      <div class="col-md-3">
        <img class="gallery-img" src="<?php echo base_url(); ?>assets/images/gallery07.jpg" width="100%" alt="">
      </div>
      <div class="col-md-3">
        <img class="gallery-img" src="<?php echo base_url(); ?>assets/images/gallery08.jpg" width="100%" alt="">
      </div>
      <div class="col-md-3">
        <img class="gallery-img" src="<?php echo base_url(); ?>assets/images/gallery09.jpg" width="100%" alt="">
      </div>
      <div class="col-md-3">
        <img class="gallery-img" src="<?php echo base_url(); ?>assets/images/gallery10.jpg" width="100%" alt="">
      </div>
      <div class="col-md-3">
        <img class="gallery-img" src="<?php echo base_url(); ?>assets/images/gallery03.jpg" width="100%" alt="">
      </div>
      <div class="col-md-3">
        <img class="gallery-img" src="<?php echo base_url(); ?>assets/images/gallery12.jpg" width="100%" alt="">
      </div> -->
    </div>
  </div>
</section>
