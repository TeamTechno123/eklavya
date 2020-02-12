<section class="gallery-page" style="min-height: calc(100vh - 150px);">
  <div class="container">
    <div class="col-md-12">
      <h1 class="page-heading text-center">Photo Gallery</h1>
    </div>
    <div class="row">

      <?php if(isset($gallery_list)){ foreach ($gallery_list as $gallery_list1) { ?>
        <div class="col-md-3 mb-4">
          <div class="ih-item square colored effect7">
            <a href="<?php echo base_url(); ?>Gallery-Images/<?php echo $gallery_list1->gallery_id; ?>">
              <div class="img photo-gallery-img"><img src="<?php echo base_url(); ?>assets/images/gallery/<?php echo $gallery_list1->title_img; ?>" alt="img"></div>
              <div class="info">
                <h3><?php echo $gallery_list1->gallery_title; ?></h3>
              </div>
            </a>
          </div>
          <a href="<?php echo base_url(); ?>Gallery-Images/<?php echo $gallery_list1->gallery_id; ?>" class="text-center" href="#"> <h5><?php echo $gallery_list1->gallery_title; ?></h5> </a>
        </div>
      <?php } } ?>

      <?php if(isset($gallery_photo_list)){ foreach ($gallery_photo_list as $gallery_photo_list1) { ?>
        <div class="col-md-3 mb-4">
          <div class="ih-item square colored effect7">
            <a class="img_modal" img_id="<?php echo $gallery_photo_list1->gallery_photo_id; ?>" img_name = "<?php echo $gallery_photo_list1->gallery_photo_name; ?>" href="#" data-toggle="modal" data-target=".bd-example-modal-lg">
              <div class="img photo-gallery-img"><img src="<?php echo base_url(); ?>assets/images/gallery/<?php echo $gallery_photo_list1->gallery_photo_name; ?>" alt="img"></div>
              <div class="info">
                <!-- <h3><?php echo $gallery_list1->gallery_title; ?></h3> -->
              </div>
            </a>
          </div>
        </div>
      <?php } } ?>

    </div>
  </div>
</section>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" >
      <div class="modal-header py-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="ih-item square colored effect7">
        <!-- <div class="img modal_img">

        </div> -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">

    <?php if(isset($gallery_photo_list)){ $i=0; foreach ($gallery_photo_list as $gallery_photo_list1) {  $i++; ?>
      <div class="carousel-item " id="img_<?php echo $gallery_photo_list1->gallery_photo_id; ?>">
        <img class="d-block w-100 model-img" src="<?php echo base_url(); ?>assets/images/gallery/<?php echo $gallery_photo_list1->gallery_photo_name; ?>" alt="First slide">
      </div>
    <?php } } ?>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('.img_modal').on('click',function(){
    var img_name = $(this).attr('img_name');
    var img_id = $(this).attr('img_id');
    $('.carousel-item').removeClass('active');
    $('#img_'+img_id).addClass('active');
    // $('.modal_img').html('<img width="100%" src="<?php echo base_url(); ?>assets/images/gallery/'+img_name+'" alt="">');
    // alert(img_name);

  })
</script>
