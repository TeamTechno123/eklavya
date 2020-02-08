<!DOCTYPE html>
<html>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center mt-2">
            <h1>Company Information</h1>
          </div>
        </div>
      </div>
    </section> -->



    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="card card-primary  mt-3">
              <div class="card-header text-center">
                <h3 class="card-title text-center">Eklavya Public School</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <hr>
        <h4 class="mb-3">Master Summary</h4>
        <div class="row">
          <!-- left column -->
          <div class="col-md-2 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $announcement_cnt ?></h3>
                <p>Announcement</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="announcement_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-yellow">
              <div class="inner">
                <h3><?php echo $gallery_cnt ?></h3>
                <p>Gallery</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="gallery_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-green">
              <div class="inner">
                <h3><?php echo $slider_cnt; ?></h3>
                <p>Slider</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="slider_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $notification_cnt; ?></h3>
                <p>CBSC Notification</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="notification_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-md-2 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $circulars_cnt; ?></h3>
                <p>CBSC Circulars</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="notification_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php echo $teaching_staff_cnt; ?></h3>
                <p>Teaching Staff</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="staff_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $nonteaching_staff_cnt; ?></h3>
                <p>Non Teaching Staff</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="staff_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $school_achievement_cnt; ?></h3>
                <p>School Achievement</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="achievement_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-red">
              <div class="inner">
                <h3><?php echo $stud_achievement_cnt; ?></h3>
                <p>Student Achievement</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="achievement_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $teacher_achievement_cnt; ?></h3>
                <p>Teacher Achievement</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="achievement_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-md-2 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $enq_cnt; ?></h3>
                <p>Enquiry</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="achievement_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <hr>

      </div><!-- /.container-fluid -->
    </section>
  </div>

</body>
</html>
