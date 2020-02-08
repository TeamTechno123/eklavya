<section class="gallery-page">
  <div class="container">
    <div class="col-md-12">
      <h1 class="page-heading text-center">Announcements</h1>
    </div>
    <div class="row">
    <div class="col-md-12">
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
      </div>
    </div>
  </section>
