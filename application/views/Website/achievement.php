<section class="gallery-page">
  <div class="container">
    <div class="col-md-12">
      <h1 class="page-heading text-center"><?php echo $title; ?> Achievements</h1>
    </div>
    <div class="row">
      <?php foreach ($achievement_list as $list1) {
        $achievement_id = $list1->achievement_id;
        $achievement_details_list = $this->Admin_Model->get_list_by_id('achievement_id',$achievement_id,'','','achievement_details');
      ?>
        <div class="col-md-12 mb-3 text-center">
          <h4></h4>
        </div>
        <?php foreach ($achievement_details_list as $list2) { ?>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img class="card-img-top" height="250px" src="<?php echo base_url(); ?>assets/images/achievement/<?php echo $list2->achievement_details_img; ?>" alt="<?php echo $list2->achievement_details_img; ?>">
              <div class="card-body">
                <h5 class="card-title text-center"><?php echo $list2->achievement_details_title; ?></h5>
                <p class="card-text text-center"><?php echo $list2->achievement_details_name; ?></p>
              </div>
            </div>
          </div>
        <?php } } ?>
    </div>
  </div>
</section>
