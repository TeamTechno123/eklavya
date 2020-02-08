
<footer>
<div class="container">
  <div class="row text-center">
    <p class="text-white text-center w-100 mb-0">Copyright © Eklavya Public School</p>
  </div>
</div>
</footer>

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
