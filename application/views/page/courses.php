<?php $this->load->view('partials/header'); ?>
  <!-- Start main-content -->
  <div class="main-content">
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 blog-pull-right">
            <div class="row">
               <h3 class="text-theme-colored line-bottom text-theme-colored">Courses</h3>
              <?php foreach (courses() as $key => $course): ?>
                <div class="col-md-4">
                  <div class="course-tile">
                    <?=$course['title']?>
                  </div>                
                </div>
              <?php endforeach ?>
                
            </div>
          </div> <!-- col-md-9 -->
        </div> <!-- row -->
      </div>
    </section>
  </div>
  <!-- end main-content -->
<?php $this->load->view('partials/footer'); ?>