
<footer>
  <div class="container">
    <div class="row text-white">
      <div class="col-md-3 text-center">
        <img class=" mt-3" src="<?php echo base_url(); ?>assets/images/school_logo.png" width="50%" alt="">
        <h4>Eklavya Public School</h4>
      </div>
      <div class="col-md-3">
        <h5 class="mb-4 mt-3 ">About Eklavya School</h5>
        <p class="text-justify">Our vision is to inspire students to acquire value education, knowledge and skills that will support them, as life-long learners and sustainers.
          Our mission is to foster the ability in every student to flourish as a global citizen.</p>
      </div>
      <div class="col-md-3">
        <h5 class="mb-4 mt-3">Featured Links</h5>
      <a class="text-white" href="<?php echo base_url(); ?>Website/about">  <p class="mb-3"><i class="fa fa-chevron-right text-yellow" aria-hidden="true"></i> &nbsp;About</p></a>
      <a class="text-white" href="<?php echo base_url(); ?>Website/annual_calender">   <p class="mb-3"><i class="fa fa-chevron-right text-yellow" aria-hidden="true"></i> &nbsp;Annual Calender</p></a>
      <a class="text-white" href="<?php echo base_url(); ?>Website/announcement">  <p class="mb-3"><i class="fa fa-chevron-right text-yellow" aria-hidden="true"></i> &nbsp;Announcements</p></a>
      <a class="text-white" href="<?php echo base_url(); ?>Gallery">  <p class="mb-3"><i class="fa fa-chevron-right text-yellow" aria-hidden="true"></i> &nbsp;Gallery</p></a>
      </div>
      <div class="col-md-3">
        <h5 class="mb-4 mt-3">Contact</h5>
        <p class="mb-3 row"><i class="fa fa-home col-2 pr-0 pt-1 text-yellow" aria-hidden="true"></i><span class="col-10 p-0">Waghbeel, Panhala, Rakshi, Maharashtra 416201</span></p>
        <p class="mb-3 row"><i class="fa fa-phone col-2 pr-0 pt-1 text-yellow" aria-hidden="true"></i><span class="col-10 p-0">+91 9511942030</span></p>
        <p class="mb-3 row"><i class="fa fa-envelope col-2 pr-0 pt-1 text-yellow" aria-hidden="true"></i><span class="col-10 p-0">info@eklavyapublicschool.com</span></p>
      </div>
    </div>
  </div>
</footer>

<div class="footer-copy p-3">
  <div class="row text-center">
    <p class="text-white text-center w-100 mb-0">Copyright © Eklavya Public School</p>
  </div>
</div>

  <!-- <script src="<?php echo base_url(); ?>assets/css/jquery.min.js"></script> -->
  <script src="<?php echo base_url(); ?>assets/css/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/css/bootstrap.min.js"></script>

<script type="text/javascript">
$(function () {
$(".demo").bootstrapNews({
newsPerPage: 8,
navigation: true,
autoplay: true,
direction:'down', // up or down
animationSpeed: 'normal',
newsTickerInterval: 4000, //4 secs
pauseOnHover: true,
onStop: null,
onPause: null,
onReset: null,
onPrev: true,
onNext: true,
onToDo: null
});
});

$(".demo2").bootstrapNews({
          newsPerPage: 8,
          autoplay: null,
    pauseOnHover: true,
    navigation: true,
    onPrev: true,
    onNext: true,
          direction: 'down',
          newsTickerInterval: 2500,
          onToDo: function () {
              //console.log(this);
          }
      });
</script>

</body>
</html>
