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
              <div class="img"><img src="<?php echo base_url(); ?>assets/images/gallery/<?php echo $gallery_list1->title_img; ?>" alt="img"></div>
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
            <a class="img_modal" img_name = "<?php echo $gallery_photo_list1->gallery_photo_name; ?>" href="#" data-toggle="modal" data-target=".bd-example-modal-lg">
              <div class="img"><img src="<?php echo base_url(); ?>assets/images/gallery/<?php echo $gallery_photo_list1->gallery_photo_name; ?>" alt="img"></div>
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
        <div class="img modal_img">

        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('.img_modal').on('click',function(){
    var img_name = $(this).attr('img_name');
    $('.modal_img').html('<img width="100%" src="<?php echo base_url(); ?>assets/images/gallery/'+img_name+'" alt="">');
    // alert(img_name);
  })
</script>
