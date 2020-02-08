<section class="gallery-page">
  <div class="container">
    <div class="col-md-12">
      <h1 class="page-heading text-center">Teaching Staff</h1>
    </div>
    <div class="staff-div">
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/teachers/kokare.png" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title  text-center"> Mr. Kokare A. B.</h5>
            <p class="card-text text-center"> Head Master <br>Sant Dnyaneshwar English Medium Public School </p>
          </div>
        </div>
      </div>
      <div class="col-md-2 offset-md-2">
          <img width="100%" src="<?php echo base_url(); ?>assets/images/school_logo.png" alt="Card image cap">
      </div>
      <div class="col-md-3 offset-md-2">
        <div class="card">
          <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/teachers/bhosale.png" alt="Card image cap">
          <div class="card-body">
             <h5 class="card-title text-center">Mr.Bhosale D. S.</h5>
            <p class="card-text text-center">Vice-Principal <br>Eklavya Public School</p>
          </div>
        </div>
      </div>
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
        <div class="card">
          <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/teachers/swami.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title text-center">Mrs. Swami V. V.</h5>
            <p class="card-text text-center">M.A. B. Ed.</p>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card">
          <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/teachers/thorat.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title text-center">Miss Thorat S. P.</h5>
            <p class="card-text text-center">  B. A. B. Ed. </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/teachers/shaikh.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title text-center"> Miss Shaikh R. S.</h5>
            <p class="card-text text-center"> B. Sc. </p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/teachers/patilk.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title text-center">Mr. patil K. G.</h5>
            <p class="card-text text-center">DCE </p>
          </div>
        </div>
      </div> -->
    </div>
    </div>
  </div>
</section>
