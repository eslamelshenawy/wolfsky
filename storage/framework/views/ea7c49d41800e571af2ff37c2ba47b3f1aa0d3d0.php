  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="footer-widget">
            <h3 class="mb-3"><?php echo trans('backLang.about_com'); ?></h3>
                                 <?php if(empty($social)): ?>

                     <?php else: ?>

                          <?php $__currentLoopData = $social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social_med): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <?php if( trans('backLang.boxCode') == 'ar'): ?>
            <img class="mb-3" src="<?php echo e(url('/')); ?>/uploads/settings/<?php echo e($social_med->style_logo_ar); ?>" alt=""   width="120">
              <?php else: ?>
            <img class="mb-3" src="<?php echo e(url('/')); ?>/uploads/settings/<?php echo e($social_med->style_logo_en); ?>" alt=""   width="120">
              <?php endif; ?>

                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
              
                                 <?php if(empty($about)): ?>

                     <?php else: ?>

                  <?php $__currentLoopData = $about; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about_site): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <?php if( trans('backLang.boxCode') == 'ar'): ?>
                <p class="text"><?php echo e(substr(strip_tags(strip_tags($about_site->details_ar)), 0, 200)); ?></p>
              <?php else: ?>
                <p class="text"><?php echo e(substr(strip_tags(strip_tags($about_site->details_en)), 0, 150)); ?></p>
              <?php endif; ?>


         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>

            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-md-4 offset-md-1">
          <div class="footer-widget">
            <h3>افضل الوجهات</h3>
            <div class="sitemap">
              <ul>
                  <li><a href="#">البحرين</a></li>
                  <li><a href="#">عمان</a></li>
                  <li><a href="#">فنادق مصر</a></li>
                  <li><a href="#">فنادق المملكة </a></li>
                  <li><a href="#">فنادق الامارات </a></li>
                  <li><a href="#">فنادق أبوظبي</a></li>
              </ul>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-widget">
            <h3><?php echo trans('backLang.contact_us'); ?></h3>
            <p><?php echo trans('backLang.contact_us_social'); ?></p>
            <ul class="socials">
                                   <?php if(empty($social)): ?>

                     <?php else: ?>

              <?php $__currentLoopData = $social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social_med): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a href="<?php echo e($social_med->social_link1); ?>" class="fa fa-facebook"></a></li>
              <li><a href="<?php echo e($social_med->social_link2); ?>" class="fa fa-twitter"></a></li>
              <li><a href="<?php echo e($social_med->social_link5); ?>" class="fa fa-youtube"></a></li>
              <li><a href="<?php echo e($social_med->social_link6); ?>" class="fa fa-instagram"></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

            </ul>
            <div class="clearfix"></div>
            <p class="mt-3 mb-2"><?php echo trans('backLang.Q'); ?></p>
            <a href="<?php echo e(url('/contact')); ?>" class="btn btn-warning"><i class="fa fa-envelope"></i><?php echo trans('backLang.send'); ?></a>
          </div>
        </div>
      </div>
    </div>
   
  </div>
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginTitle" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginTitle">تسجيل الدخول</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form name="form" method="POST" action="http://localhost/eslam/wolfsky/log">
          <div class="form-group mb-3">
            <label for="exampleInputEmail1">البريد الالكترونى</label>
            <input type="email" class="form-control"name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ادخل بريدك الالكترونى">
          </div>
          <div class="form-group mb-3">
            <label for="exampleInputPassword1">كلمة المرور</label>
            <input type="password" class="form-control"name="password" id="exampleInputPassword1" placeholder="كلمة المرور">
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="remember" id="remember">
            <label class="custom-control-label" for="remember">تذكر كلمة المرور</label>
          </div>
        <div class="modal-footer"><input type="submit" class="btn btn-block btn-primary">دخول</input></div>
          </form>
        </div>
      </div>
    </div>
  </div>


 