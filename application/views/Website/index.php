
<section class="slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <?php $i=0; foreach ($slider_list as $slider_list1) {  $i++; ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i-1; ?>" class="<?php if($i == 1){ echo 'active'; } ?>"></li>
      <?php } ?>
    </ol>
      <div class="carousel-inner">
        <?php $i=0; foreach ($slider_list as $slider_list1) {  $i++; ?>
          <div class="carousel-item <?php if($i == 1){ echo 'active'; } ?>">
            <img class="d-block w-100 slider-img w-100" src="<?php echo base_url(); ?>assets/images/slider/<?php echo $slider_list1->slider_img; ?>" alt="First slide">
          </div>
        <?php } ?>
      </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</section>

<section class="Announcements">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-12">
        <div class="panel panel-default">
          <div class="panel-heading">  <h4 class="announ-head"> <i class="fas fa-bullhorn mr-2"></i>Recent Announcements</h4></div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                  <ul class="demo">
                    <?php foreach ($announcement_list as $announcement_list1) { ?>
                      <li class="news-item">
                        <table cellpadding="4">
                          <tr>
                            <td> <a href="#"> <p class="<?php if($announcement_list1->priority == 1){ echo 'text-danger'; }?> "> <?php echo $announcement_list1->announcement_title; ?> - Dated <?php echo $announcement_list1->announcement_date; ?> <?php if($announcement_list1->priority == 1){ ?> &nbsp; <img src="<?php echo base_url(); ?>assets/images/new.gif" width="45" /> <?php } ?> </p></a> </td>
                          </tr>
                        </table>
                      </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="panel-footer"> </div>
          </div>
        </div>
  <!-- <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading"> <h4 class="announ-head"> <i class="fas fa-bullhorn mr-2"></i>In Focus</h4></div>
      <div class="panel-body">
        <div class="row">
          <div class="col-xs-12">
            <ul class="demo2">
              <li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
              <li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
              <li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
              <li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
              <li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
              <li class="news-item">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
            </ul>
          </div>
        </div>
      </div>
<div class="panel-footer"> </div>
</div>
</div> -->
    </div>
  </div>
</section>

<!-- <section class="gallery">
  <div class="container">
    <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-4">
              <img src="<?php echo base_url(); ?>assets/images/wo.png" alt="" width="100%">
            </div>
            <div class="col-md-4">
              <img src="<?php echo base_url(); ?>assets/images/wo2.png" alt="" width="100%">
            </div>
            <div class="col-md-4">
              <img src="<?php echo base_url(); ?>assets/images/wo.png" alt="" width="100%">
            </div>
          </div>
        </div>
        <div class="col-md-4">
            <img src="<?php echo base_url(); ?>assets/images/wo2.png" alt="" width="100%">
            <img src="<?php echo base_url(); ?>assets/images/wo.png" alt="" width="100%">
            <img src="<?php echo base_url(); ?>assets/images/wo2.png" alt="" width="100%">
        </div>
    </div>
  </div>
</section> -->

<section class="round-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-2 col-6">
        <a href="#">
        <div class="round-img text-center">
            <img src="<?php echo base_url(); ?>assets/images/wo.png" alt="" width="100%">
            <p class="text-center">Media Gallery</p>
        </div>
        </a>
      </div>
      <div class="col-sm-2 col-6">
        <a href="#">
        <div class="round-img text-center">
            <img src="<?php echo base_url(); ?>assets/images/wo2.png" alt="" width="100%">
            <p class="text-center">Media Gallery</p>
        </div>
        </a>
      </div>
      <div class="col-sm-2 col-6">
        <a href="#">
        <div class="round-img text-center">
            <img src="<?php echo base_url(); ?>assets/images/wo.png" alt="" width="100%">
            <p class="text-center">Media Gallery</p>
        </div>
        </a>
      </div>
      <div class="col-sm-2 col-6">
        <a href="#">
        <div class="round-img text-center">
            <img src="<?php echo base_url(); ?>assets/images/wo2.png" alt="" width="100%">
            <p class="text-center">Media Gallery</p>
        </div>
        </a>
      </div>
      <div class="col-sm-2 col-6">
        <a href="#">
        <div class="round-img text-center">
            <img src="<?php echo base_url(); ?>assets/images/wo.png" alt="" width="100%">
            <p class="text-center">Media Gallery</p>
        </div>
        </a>
      </div>
      <div class="col-sm-2 col-6">
        <a href="#">
        <div class="round-img text-center">
            <img src="<?php echo base_url(); ?>assets/images/wo2.png" alt="" width="100%">
            <p class="text-center">Media Gallery</p>
        </div>
        </a>
      </div>
    </div>
  </div>
</section>
