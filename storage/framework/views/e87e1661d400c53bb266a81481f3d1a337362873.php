<header class="main-header">
    <div class="top_bg_gradient"></div>
    <div class="clearfix"></div>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
                     <?php if(empty($social)): ?>

                     <?php else: ?>

                   <?php $__currentLoopData = $social; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social_med): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if( trans('backLang.boxCode') == 'ar'): ?>
             <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
              <img src="<?php echo e(url('/')); ?>/uploads/settings/<?php echo e($social_med->style_logo_ar); ?>" alt=""></a>
              <?php else: ?>
              <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                 <img src="<?php echo e(url('/')); ?>/uploads/settings/<?php echo e($social_med->style_logo_en); ?>" alt=""></a>
              <?php endif; ?>

                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active"> <a class="nav-link" href="#"><?php echo e(trans('backLang.air_book')); ?> </a></li>
            <li class="nav-item"> <a class="nav-link" href="#"> <?php echo e(trans('backLang.h_book')); ?></a> </li>
            <li class="nav-item"> <a class="nav-link" href="#"> <?php echo e(trans('backLang.F_h')); ?></a></li>
            <?php if($user = Auth::user()): ?>

            <li class="nav-item"> <a class="nav-link" href="<?php echo e(url('books')); ?>">  <?php echo e(trans('backLang.we_reserv')); ?></a> </li>


            <?php else: ?>

            <?php endif; ?>



            <li class="nav-item">

                        &nbsp; | &nbsp;
                        <strong>
                            <?php if(App::getLocale()=="ar"): ?>
                                <a href="<?php echo e(URL::to('lang/en')); ?>"><i
                                            class="fa fa-language "></i> <?php echo e(str_replace("[ ","",str_replace(" ]","",strip_tags(trans('backLang.englishBox'))))); ?>

                                </a>
                            <?php else: ?>
                                <a href="<?php echo e(URL::to('lang/ar')); ?>"><i
                                            class="fa fa-language "></i> <?php echo e(str_replace("[ ","",str_replace(" ]","",strip_tags(trans('backLang.arabicBox'))))); ?>

                                </a>
                            <?php endif; ?>

                        </strong>





            </a> </li>
          </ul>
           <?php if($user = Auth::user()): ?>
          <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown open">
                <a class="nav-link clear" href="" data-toggle="dropdown" aria-expanded="true">
                  <span class="avatar">
                    <!-- <img src="<?php echo e(URL::to('public/uploads/users/'.$user->photo)); ?>" alt="user" title="user" class="img-thumbnail user-avatar"> -->
                      <?php echo e($user->name); ?>

                  </span>
                </a>
                <div class="dropdown-menu pull-right dropdown-menu-scale">
                    <a class="dropdown-item" href="<?php echo e(url('books')); ?>"><span><?php echo e(trans('backLang.we_reserv')); ?></span></a>
                                        <div class="dropdown-divider"></div>
                    <a  class="dropdown-item" href="<?php echo e(url('/logout')); ?>"><?php echo e(trans('backLang.logout')); ?></a>
                </div>
            </li>


        </ul>
          <?php endif; ?>

            <?php if($user = Auth::user()): ?>

            <?php else: ?>
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">  <a class="nav-link" href="#" data-toggle="modal" data-target=".login-register-form"><i class="flaticon-user"></i> <?php echo e(trans('backLang.login')); ?></a></li>
          </ul>
            <?php endif; ?>

        </div>
      </div>
    </nav>
  </header>
