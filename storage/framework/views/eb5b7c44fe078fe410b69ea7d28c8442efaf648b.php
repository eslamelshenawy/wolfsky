<?php $__env->startSection('content'); ?>

     <?php if(Session::has('message')): ?>
               <div class="alert alert-success" role="alert"><?php echo e(Session::get('message')); ?></div>
                      <?php endif; ?>
     <?php if(Session::has('danger')): ?>
               <div class="alert alert-danger" role="alert"><?php echo e(Session::get('danger')); ?></div>
        <?php endif; ?>

   <div class="form-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
            <ul class="nav nav-tabs home-tabs" id="myTab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab"
                    aria-controls="tab1" aria-selected="true"><i class="flaticon-plane2"></i> <?php echo e(trans('backLang.air_book')); ?></a> </li>
                <li class="nav-item"> <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2"
                    aria-selected="false"><i class="flaticon-hotel"></i> <?php echo e(trans('backLang.h_book')); ?></a> </li>
                <li class="nav-item"> <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3"
                    aria-selected="false"><i class="flaticon-passport"></i> <?php echo e(trans('backLang.F_h')); ?></a> </li>
              </ul>
            <div class="section-feed">

                <div class="container">
                  <div class="tab-content pt-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="flight1"  name="flight-reserve" class="custom-control-input checkstatus  type_flight"
                              checked>
                            <label class="custom-control-label" for="flight1"><?php echo e(trans('backLang.go_return')); ?></label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="flight2"   name="flight-reserve" class="custom-control-input checkstatus  type_flight">
                            <label class="custom-control-label" for="flight2"><?php echo e(trans('backLang.go_o')); ?></label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="flight3"  name="flight-reserve" class="custom-control-input checkstatus type_flight"
                              data-id="multi">
                            <label class="custom-control-label"i for="flight3"><?php echo e(trans('backLang.go_more')); ?></label>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group">
                            <label for=""><?php echo e(trans('backLang.leave_from')); ?></label>
                            <div class="form-group has-clear">
                              <input type="text" class="form-control has-clear" id="leave_city" placeholder="<?php echo e(trans('backLang.leave_from')); ?>">
                              <i class="mark-ico fa fa-map-marker"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group">
                            <label for=""><?php echo e(trans('backLang.arrive_to')); ?></label>
                            <div class="form-group has-clear">
                              <input type="text" class="form-control" id="arrive_city" placeholder="<?php echo e(trans('backLang.arrive_to')); ?>">
                              <i class="mark-ico fa fa-map-marker"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group">
                            <label for=""><?php echo e(trans('backLang.date_leave')); ?></label>
                            <div class="form-group has-clear">
                              <input type="text" class="form-control datepicker" id="leave_date" placeholder="<?php echo e(trans('backLang.date_leave')); ?>">
                              <i class="mark-ico fa fa-calendar"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6" id="come">
                          <div class="input-group">
                            <label for=""><?php echo e(trans('backLang.end_date')); ?></label>
                            <div class="form-group has-clear">
                              <input type="text" class="form-control datepicker" id="arrive_date" placeholder="<?php echo e(trans('backLang.end_date')); ?>">
                              <i class="mark-ico fa fa-calendar"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="input-group">
                            <label for=""><?php echo e(trans('backLang.traveler_grad')); ?></label>
                            <div class="dropdown w-100">
                              <input type="text" class="form-control has-clear" value="<?php echo e(trans('backLang.traveler_comerce')); ?>"  id="dropdownMenuButton2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="mark-ico fa fa-user"></i>
                              <div class="dropdown-menu mega-drop p-0" aria-labelledby="dropdownMenuButton2">
                                <div class="p-3">
                                  <div class="form-group row">
                                    <div class="col-sm-4">
                                      <label for="" class=" col-form-label"><?php echo e(trans('backLang.Adults')); ?></label>
                                    </div>
                                    <div class="col-sm-4">
                                      <input type="number" class="form-control has-clear" id="Adult" value="">
                                    </div>
                                    <div class="col-sm-4"> <small class="form-text text-muted mt-2"><?php echo e(trans('backLang.year_adults')); ?></small> </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-sm-4">
                                      <label for="" class=" col-form-label"><?php echo e(trans('backLang.child')); ?></label>
                                    </div>
                                    <div class="col-sm-4">
                                      <input type="number" class="form-control has-clear" id="child" value="">
                                    </div>
                                    <div class="col-sm-4"> <small class="form-text text-muted mt-2"><?php echo e(trans('backLang.year_adults_2')); ?></small> </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-sm-4">
                                      <label for="" class=" col-form-label"><?php echo e(trans('backLang.infant')); ?></label>
                                    </div>
                                    <div class="col-sm-4">
                                     <input type="number" class="form-control has-clear" id="infant" value="">
                                    </div>
                                    <div class="col-sm-4"> <small class="form-text text-muted mt-2"><?php echo e(trans('backLang.year_adults_3')); ?></small> </div>
                                  </div>
                                  <hr>
                                  <div class="form-group row">
                                    <div class="col-sm-4">
                                      <label for="" class=" col-form-label"><?php echo e(trans('backLang.grade')); ?></label>
                                    </div>
                                    <div class="col-sm-8">
                                      <select class="form-control m-0" id="type_grad">
                                        <!-- <option value=""><?php echo e(trans('backLang.select_grade')); ?></option> -->
                                        <option value="<?php echo e(trans('backLang.Tourism')); ?>"><?php echo e(trans('backLang.Tourism')); ?></option>
                                        <option value="<?php echo e(trans('backLang.Businessmen')); ?>"> <?php echo e(trans('backLang.Businessmen')); ?></option>
                                        <option value="<?php echo e(trans('backLang.First')); ?>"><?php echo e(trans('backLang.First')); ?></option>
                                      </select>
                                    </div>
                                  </div>
                                  <hr>
                                  <button id="travel" class="btn btn-warning btn-block"><?php echo e(trans('backLang.agree')); ?></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>



                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="">&nbsp;</label>
                            <div class="clearfix"></div>
                            <button id="book" class="btn btn-warning btn-block"><?php echo e(trans('backLang.book')); ?></button>
                          </div>
                        </div>
                      </div>
                      <div id="multi" style="display: none">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="input-group">
                              <label for="">المغادرة من</label>
                              <div class="form-group has-clear">
                                <input type="text" id="leave_city2" class="form-control has-clear" placeholder="المدينة أو المطار">
                                <i class="mark-ico fa fa-map-marker"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="input-group">
                              <label for="">الذهاب الى</label>
                              <div class="form-group has-clear">
                                <input type="text"  id="arrive_city2"class="form-control" placeholder="المدينة أو المطار">
                                <i class="mark-ico fa fa-map-marker"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="input-group">
                              <label for=""><?php echo e(trans('backLang.date_leave')); ?></label>
                              <div class="form-group has-clear">
                                <input type="text" id="leave_date2" class="form-control datepicker" placeholder="<?php echo e(trans('backLang.date_leave')); ?>">
                                <i class="mark-ico fa fa-calendar"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6" id="come">
                            <div class="input-group">
                              <label for=""><?php echo e(trans('backLang.end_date')); ?></label>
                              <div class="form-group has-clear">
                                <input type="text" id="arrive_date2" class="form-control datepicker" placeholder="<?php echo e(trans('backLang.end_date')); ?>">
                                <i class="mark-ico fa fa-calendar"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="input-group">
                              <label for="">المغادرة من</label>
                              <div class="form-group has-clear">
                                <input type="text" id="leave_city3"class="form-control has-clear" placeholder="المدينة أو المطار">
                                <i class="mark-ico fa fa-map-marker"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="input-group">
                              <label for="">الذهاب الى</label>
                              <div class="form-group has-clear">
                                <input type="text" id="arrive_city3" class="form-control" placeholder="المدينة أو المطار">
                                <i class="mark-ico fa fa-map-marker"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="input-group">
                              <label for=""><?php echo e(trans('backLang.date_leave')); ?></label>
                              <div class="form-group has-clear">
                                <input type="text"  id="leave_date3" class="form-control datepicker" placeholder="اختر التاريخ">
                                <i class="mark-ico fa fa-calendar"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6" id="come">
                            <div class="input-group">
                              <label for="">العودة</label>
                              <div class="form-group has-clear">
                                <input type="text" id="arrive_date3" class="form-control datepicker" placeholder="اختر التاريخ">
                                <i class="mark-ico fa fa-calendar"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                       <!--  <a href="#" class="btn btn-success-outline"><i class="fa fa-plus"></i> اضافة رحلة اخرى</a> -->
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline mb-3">
                        <input type="checkbox" class="custom-control-input" id="nonstop">
                        <label class="custom-control-label" for="nonstop"><?php echo e(trans('backLang.Non_stop')); ?></label>
                      </div>
                      <div class="custom-control custom-checkbox custom-control-inline mb-3">
                        <input type="checkbox" class="custom-control-input" id="flexible">
                        <label class="custom-control-label" for="flexible"><?php echo e(trans('backLang.Flexible_data')); ?></label>
                      </div>
                    </div>
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group">
                        <label for=""><?php echo e(trans('backLang.go_trip_h')); ?></label>
                        <div class="form-group has-clear">
                          <input type="text" id="way_name3" class="form-control has-clear" placeholder="<?php echo e(trans('backLang.go_trip_h')); ?>">
                          <i class="mark-ico fa fa-map-marker"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="input-group">
                        <label for=""><?php echo e(trans('backLang.go_enter')); ?></label>
                        <div class="form-group has-clear">
                          <input type="text" id="entry_date3" class="form-control datepicker" placeholder="<?php echo e(trans('backLang.go_enter')); ?>">
                          <i class="mark-ico fa fa-calendar"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group">
                        <label for=""><?php echo e(trans('backLang.go_out')); ?></label>
                        <div class="form-group has-clear">
                           <input type="text" id="leave_dat3" class="form-control datepicker" placeholder="<?php echo e(trans('backLang.go_out')); ?>">
                          <i class="mark-ico fa fa-calendar"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="input-group">
                        <label for=""><?php echo e(trans('backLang.night')); ?></label>
                        <div class="form-group">
                          <input type="number" id="night_numb3" class="form-control" placeholder="<?php echo e(trans('backLang.night')); ?>">
                          <i class="mark-ico fa fa-hotel"></i> </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="input-group">
                        <label for=""><?php echo e(trans('backLang.rooms_guests')); ?></label>
                        <div class="dropdown w-100">
                          <input type="text" class="form-control has-clear" value="<?php echo e(trans('backLang.rooms_guests')); ?>" id="dropdownMenuButton6"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="mark-ico fa fa-user"></i>
                          <div class="dropdown-menu mega-drop p-0" aria-labelledby="dropdownMenuButton">
                            <div class="p-3">
                              <div class="form-group p-2 bg-light">
                                <div class="row">
                                  <div class="col-sm-4">
                                    <label for="" class=" col-form-label"><?php echo e(trans('backLang.numb_room')); ?></label>
                                  </div>
                                  <div class="col-sm-8">
                                    <input type="number" class="form-control has-clear" id="num_class4" value="">
                                  </div>
                                </div>
                              </div>
                              <hr>
                              <div class="form-group row">
                                <div class="col-sm-4">
                                  <label for="" class=" col-form-label mt-4"><?php echo e(trans('backLang.numb_room1')); ?></label>
                                </div>
                                <div class="col-sm-4">
                                  <label for="" class=" col-form-label"><?php echo e(trans('backLang.infant')); ?></label>
                                    <input type="number" class="form-control has-clear" id="Adult_class4" value="">
                                  <small class="form-text text-muted mt-2"><?php echo e(trans('backLang.year_adults')); ?></small>
                                </div>
                                <div class="col-sm-4">
                                  <label for="" class=" col-form-label"><?php echo e(trans('backLang.child')); ?></label>
                                    <input type="number" class="form-control has-clear" id="child_class4" value="">
                                  <small class="form-text text-muted mt-2"><?php echo e(trans('backLang.year_adults_2')); ?></small>
                                </div>

                              </div>
                              <hr>
                              <div class="form-group row">
                                <div class="col-sm-4">
                                  <label for="" class=" col-form-label mt-4"><?php echo e(trans('backLang.numb_room2')); ?></label>
                                </div>
                                <div class="col-sm-4">
                                  <label for="" class=" col-form-label"><?php echo e(trans('backLang.infant')); ?></label>
                                   <input type="number" class="form-control has-clear" id="Adult_class3" value="">
                                  <small class="form-text text-muted mt-2"><?php echo e(trans('backLang.year_adults')); ?></small>
                                </div>
                                <div class="col-sm-4">
                                  <label for="" class=" col-form-label"><?php echo e(trans('backLang.child')); ?></label>
                                  <input type="number" class="form-control has-clear" id="child_class3" value="">
                                  <small class="form-text text-muted mt-2"><?php echo e(trans('backLang.year_adults_2')); ?></small>
                                </div>

                              </div>
                              <hr>
                              <button id="select_valu" class="btn btn-warning btn-block"><?php echo e(trans('backLang.agree')); ?></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="">&nbsp;</label>
                        <div class="clearfix"></div>
                        <button id="hotel_book" class="btn btn-warning btn-block"><?php echo e(trans('backLang.book')); ?></button>
                      </div>
                    </div>
                  </div>


                </div>
                    <div class="tab-pane fade show" id="tab3" role="tabpanel" aria-labelledby="tab3">
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="hotel1" name="hotel-reserve" id="" class="custom-control-input checkstatus"
                              checked>
                            <label class="custom-control-label" for="hotel1"><?php echo e(trans('backLang.go_return')); ?></label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="hotel2" name="hotel-reserve" class="custom-control-input checkstatus">
                            <label class="custom-control-label" for="hotel2"><?php echo e(trans('backLang.go_o')); ?></label>
                          </div>

                        </div>
                        <div class="col-md-6">
                          <div class="input-group">
                            <label for=""><?php echo e(trans('backLang.leave_from')); ?></label>
                            <div class="form-group has-clear">
                              <input type="text" id="leave_city_h"class="form-control has-clear" placeholder="<?php echo e(trans('backLang.leave_from')); ?>">
                              <i class="mark-ico fa fa-map-marker"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group">
                            <label for=""><?php echo e(trans('backLang.arrive_to')); ?></label>
                            <div class="form-group has-clear">
                              <input type="text" class="form-control" id="arrive_city_h" placeholder="<?php echo e(trans('backLang.arrive_to')); ?>">
                              <i class="mark-ico fa fa-map-marker"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group">
                            <label for=""><?php echo e(trans('backLang.date_leave')); ?></label>
                            <div class="form-group has-clear">
                              <input type="text" id="leave_date_h" class="form-control datepicker" placeholder="<?php echo e(trans('backLang.date_leave')); ?>">
                              <i class="mark-ico fa fa-calendar"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6" id="come2">
                          <div class="input-group">
                            <label for=""><?php echo e(trans('backLang.end_date')); ?></label>
                            <div class="form-group has-clear">
                              <input type="text" id="arrive_date_h" class="form-control datepicker" placeholder="<?php echo e(trans('backLang.end_date')); ?>">
                              <i class="mark-ico fa fa-calendar"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="input-group">
                            <label for=""><?php echo e(trans('backLang.traveler_grad')); ?></</label>
                            <div class="dropdown w-100">
                              <input type="text" class="form-control has-clear" value="" placeholder="<?php echo e(trans('backLang.travel_value')); ?>" id="dropdownMenuButton3"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="mark-ico fa fa-user"></i>
                              <div class="dropdown-menu mega-drop p-0" aria-labelledby="dropdownMenuButton3">
                                <div class="p-3">
                                  <div class="form-group row">
                                    <div class="col-sm-4">
                                      <label for="" class=" col-form-label"><?php echo e(trans('backLang.Adults')); ?></label>
                                    </div>
                                    <div class="col-sm-4">
                                      <input type="number" class="form-control has-clear" id="Adult_ar" value="">
                                    </div>
                                    <div class="col-sm-4"> <small class="form-text text-muted mt-2"><?php echo e(trans('backLang.year_adults')); ?></small> </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-sm-4">
                                      <label for="" class=" col-form-label"><?php echo e(trans('backLang.child')); ?></label>
                                    </div>
                                    <div class="col-sm-4">
                                      <input type="number" class="form-control has-clear" id="child_ar" value="">
                                    </div>
                                    <div class="col-sm-4"> <small class="form-text text-muted mt-2"><?php echo e(trans('backLang.year_adults_2')); ?></small> </div>
                                  </div>
                                  <div class="form-group row">
                                    <div class="col-sm-4">
                                      <label for="" class=" col-form-label"><?php echo e(trans('backLang.infant')); ?></label>
                                    </div>
                                    <div class="col-sm-4">
                                     <input type="number" class="form-control has-clear" id="infant_ar" value="">
                                    </div>
                                    <div class="col-sm-4"> <small class="form-text text-muted mt-2"><?php echo e(trans('backLang.year_adults_3')); ?></small> </div>
                                  </div>
                                  <hr>
                                  <div class="form-group row">
                                    <div class="col-sm-4">
                                      <label for="" class=" col-form-label"><?php echo e(trans('backLang.grade')); ?></label>
                                    </div>
                                    <div class="col-sm-8">
                                      <select class="form-control m-0" id="type_grad_ar">
                                        <!-- <option value=""><?php echo e(trans('backLang.select_grade')); ?></option> -->
                                        <option value="<?php echo e(trans('backLang.Tourism')); ?>"><?php echo e(trans('backLang.Tourism')); ?></option>
                                        <option value="<?php echo e(trans('backLang.Businessmen')); ?>"><?php echo e(trans('backLang.Businessmen')); ?></option>
                                        <option value="<?php echo e(trans('backLang.First')); ?>"><?php echo e(trans('backLang.First')); ?></option>
                                      </select>
                                    </div>
                                  </div>
                                  <hr>
                                  <button id="trave" class="btn btn-warning btn-block"><?php echo e(trans('backLang.agree')); ?></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="">&nbsp;</label>
                            <div class="clearfix"></div>
                            <button id="hotel_b" class="btn btn-warning btn-block"><?php echo e(trans('backLang.book')); ?></button>
                          </div>
                        </div>
                      </div>
                        <div class="row">
                        <div class="col-md-6">
                          <div class="input-group">
                            <label for=""><?php echo e(trans('backLang.go_trip_h')); ?></label>
                            <div class="form-group has-clear">
                              <input type="text" id="way_name" class="form-control has-clear" placeholder="<?php echo e(trans('backLang.go_trip_h')); ?>">
                              <i class="mark-ico fa fa-map-marker"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="input-group">
                            <label for=""><?php echo e(trans('backLang.go_enter')); ?></label>
                            <div class="form-group has-clear">
                              <input type="text" id="entry_date" class="form-control datepicker" placeholder="<?php echo e(trans('backLang.go_enter')); ?>">
                              <i class="mark-ico fa fa-calendar"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group">
                            <label for=""><?php echo e(trans('backLang.go_out')); ?></label>
                            <div class="form-group has-clear">
                              <input type="text" id="leave_dat" class="form-control datepicker" placeholder="<?php echo e(trans('backLang.go_out')); ?>">
                              <i class="mark-ico fa fa-calendar"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group">
                            <label for=""><?php echo e(trans('backLang.night')); ?></label>
                            <div class="form-group">
                              <input type="number" id="night_numb" class="form-control"  placeholder="<?php echo e(trans('backLang.night')); ?>">
                               </div>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="input-group">
                            <label for=""><?php echo e(trans('backLang.rooms_guests')); ?></label>
                            <div class="dropdown w-100">
                              <input type="text" class="form-control has-clear" value="<?php echo e(trans('backLang.room_value')); ?>"id="dropdownMenuButton4"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="mark-ico fa fa-user"></i>
                              <div class="dropdown-menu mega-drop p-0" aria-labelledby="dropdownMenuButton">
                                <div class="p-3">
                                  <div class="form-group p-2 bg-light">
                                    <div class="row">
                                      <div class="col-sm-4">
                                        <label for="" class=" col-form-label"><?php echo e(trans('backLang.numb_room')); ?></label>
                                      </div>
                                      <div class="col-sm-8">
                                        <input type="number" class="form-control has-clear" id="num_class" value="">
                                      </div>
                                    </div>
                                  </div>
                                  <hr>
                                  <div class="form-group row">
                                    <div class="col-sm-4">
                                      <label for="" class=" col-form-label mt-4"> <?php echo e(trans('backLang.numb_room1')); ?></label>
                                    </div>
                                    <div class="col-sm-4">
                                      <label for="" class=" col-form-label"><?php echo e(trans('backLang.Adults')); ?></label>
                                        <input type="number" class="form-control has-clear" id="Adult_class" value="">
                                      <small class="form-text text-muted mt-2"><?php echo e(trans('backLang.year_adults')); ?></small>
                                    </div>
                                    <div class="col-sm-4">
                                      <label for="" class=" col-form-label"><?php echo e(trans('backLang.child')); ?></label>
                                        <input type="number" class="form-control has-clear" id="child_class" value="">
                                      <small class="form-text text-muted mt-2"><?php echo e(trans('backLang.year_adults_2')); ?></small>
                                    </div>

                                  </div>
                                  <hr>
                                  <div class="form-group row">
                                    <div class="col-sm-4">
                                      <label for="" class=" col-form-label mt-4"><?php echo e(trans('backLang.numb_room2')); ?></label>
                                    </div>
                                    <div class="col-sm-4">
                                      <label for="" class=" col-form-label"><?php echo e(trans('backLang.Adults')); ?></label>
                                        <input type="number" class="form-control has-clear" id="Adult_class2" value="">
                                      <small class="form-text text-muted mt-2"><?php echo e(trans('backLang.year_adults')); ?></small>
                                    </div>
                                    <div class="col-sm-4">
                                      <label for="" class=" col-form-label"><?php echo e(trans('backLang.child')); ?></label>
                                        <input type="number" class="form-control has-clear" id="child_class2" value="">
                                      <small class="form-text text-muted mt-2"><?php echo e(trans('backLang.year_adults_2')); ?></small>
                                    </div>

                                  </div>
                                  <hr>
                                  <button id="book_room" class="btn btn-warning btn-block"><?php echo e(trans('backLang.agree')); ?></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="">&nbsp;</label>
                            <div class="clearfix"></div>
                            <button id="hote" class="btn btn-warning btn-block"><?php echo e(trans('backLang.book')); ?></button>
                          </div>
                        </div>
                      </div>
                   <!--    <div class="custom-control custom-checkbox custom-control-inline mb-3">
                        <input type="checkbox" class="custom-control-input checkstatus" id="dates">
                        <label class="custom-control-label" for="dates">إقامتي في الفندق بتواريخ مختلفة</label>
                      </div> -->

                      <div id="multi-dates" style="display: none">
                        <div class="row mt-3">


                          <div class="col-md-6">
                            <div class="input-group">
                              <label for="">تاريخ الدخول</label>
                              <div class="form-group has-clear">
                                <input type="text" class="form-control datepicker" placeholder="اختر التاريخ">
                                <i class="mark-ico fa fa-calendar"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6" id="come">
                            <div class="input-group">
                              <label for="">تاريخ الخروج</label>
                              <div class="form-group has-clear">
                                <input type="text" class="form-control datepicker" placeholder="اختر التاريخ">
                                <i class="mark-ico fa fa-calendar"></i> <span class="form-control-clear fa fa-times form-control-feedback hidden"></span>
                              </div>
                            </div>
                          </div>
                        </div>


                      </div>

                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-md-5 d-flex align-items-center">
            <div class="home-title">
                <h1><?php echo e(trans('backLang.go_hear')); ?> </h1>
                <p><?php echo e(trans('backLang.go_search')); ?> </p>
              </div>
        </div>
      </div>

    </div>


  </div>
  <div class="side-banner">
    <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bann): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="#" class="close-panner"><i class="fa fa-times"></i></a>
    <img src="<?php echo e(url('/')); ?>/uploads/topics/<?php echo e($bann->photo_file); ?>" alt="">
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <div class="section">
    <div class="container">
      <div class="section-title">
        <h3><?php echo e(trans('backLang.bestview')); ?></h3>
        <p><?php echo e(trans('backLang.best_client')); ?></p>
        <span></span>
      </div>
      <div class="row">
          <?php $__currentLoopData = $bestview; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bestv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-3">
          <figure class="effect-julia"> <img src="public\frontEnd/images/s2.jpg" class="img-fluid" alt="">
            <figcaption>
              <div class="title">
                <?php $__currentLoopData = $bestv->country->city; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <?php if( trans('backLang.boxCode') == 'ar'): ?>

                <h2><?php echo e($city->title_ar); ?></h2>
                <?php else: ?>
                <h2><?php echo e($city->title_en); ?></h2>

                <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if( trans('backLang.boxCode') == 'ar'): ?>

                <p><?php echo e($bestv->country->title_ar); ?></p>
                <?php else: ?>
                <p><?php echo e($bestv->country->title_en); ?></p>

                <?php endif; ?>
              </div>
              <div class="cap">
                <p><?php echo e($bestv->number_hotel); ?> <?php echo e(trans('backLang.Hotel')); ?></p>
                <div class="clearfix"></div>
                <p><?php echo e(trans('backLang.detailsh')); ?></p>
                <div class="clearfix"></div>
                <p><a href="#">تفاصيل اخرى</a></p>
              </div>
            </figcaption>
          </figure>
        </div>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <?php if(empty($banner_header)): ?>


          <?php else: ?>
          <?php $__currentLoopData = $banner_header; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner_head): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <img src="<?php echo e(url('/')); ?>/uploads/topics/<?php echo e($banner_head->photo_file); ?>" class="img-fluid" alt="">
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="section-parallax">
    <div class="container">
      <?php $__currentLoopData = $about; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about_site): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="row">
        <div class="col-md-5">
          <div class="video-wrapper pt-5 pb-5">
            <div class="video-wrapper-title">
              <h5 class="sub-title">  <?php echo e(trans('backLang.we_us')); ?>   wolf sky  <?php echo e(trans('backLang.about_wolf')); ?> </h5>
              <h2 class="title"><?php echo e(trans('backLang.know_us')); ?></h2>
              <?php if( trans('backLang.boxCode') == 'ar'): ?>
                <div class="text"><?php echo e(strip_tags($about_site->details_ar)); ?></div>
              <?php else: ?>
                <div class="text"><?php echo e(strip_tags($about_site->details_en)); ?></div>
              <?php endif; ?>

            </div>
            <a href="<?php echo e(url('about')); ?>" class="btn btn-warning rounded"><?php echo e(trans('backLang.alot')); ?></a>
          </div>
        </div>
        <div class="col-md-7">
          <div class="video-thumbnail">
            <div class="video-bg"><img src="<?php echo e(url('/')); ?>/uploads/topics/<?php echo e($about_site->photo_file); ?>" alt="" class="img-fluid"></div>
            <div class="video-button-play"><i class="icons fa fa-play"></i></div>
            <div class="video-button-close"></div>
            <iframe src="<?php echo e($about_site->video_file); ?>" allowfullscreen="allowfullscreen" class="video-embed"></iframe>
          </div>
        </div>
      </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
  <div class="section-inverse">
    <div class="container">
      <div class="section-title text-right">
        <h3><?php echo e(trans('backLang.bestHotel')); ?></h3>
        <p><?php echo e(trans('backLang.bestHotel_i')); ?></p>
        <span class="bg-warning"></span>
      </div>
      <div class="row">
        <?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="col-md-4">
              <div class="hotels-layout">
                <div class="image-wrapper"> <a class="link" href="#"><img src="<?php echo e(url('/')); ?>/uploads/topics/<?php echo e($hotel->photo_file); ?>" class="img-fluid" alt="" sizes="(max-width: 800px) 100vw, 800px" height="540" width="800"></a>
                  <div class="title-wrapper">
                    <div class="title no-hover">
                      <div class="price"><span class="number"><?php echo e($hotel->price); ?></span><sup>ج</sup></div>
                      <p class="for-price"><?php echo e($hotel->day); ?> ايام <?php echo e($hotel->night); ?> ليالى </p>
                    </div>

                    <?php if( trans('backLang.boxCode') == 'ar'): ?>
                      <a href="#" class="title"> <?php echo e($hotel->title_ar); ?></a>
                      <p></p>
                    <?php else: ?>
                      <a href="#" class="title"> <?php echo e($hotel->title_en); ?></a>
                    <?php endif; ?>


                  </div>
                </div>

              </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <?php if(empty($banner_center)): ?>


          <?php else: ?>
          <?php $__currentLoopData = $banner_center; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner_cente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <img src="<?php echo e(url('/')); ?>/uploads/topics/<?php echo e($banner_cente->photo_file); ?>" class="img-fluid" alt="">
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>




  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="section-title text-right mb-3">
            <h4 class="m-0">أفضل الوجهات</h4>
            <span class="bg-warning"></span>
          </div>
          <div class="destination-list">
            <ul>
              <li><a href="#">البحرين</a></li>
              <li><a href="#">عمان</a></li>
              <li><a href="#">فنادق مصر</a></li>
              <li><a href="#">فنادق المملكة العربية السعودية</a></li>
              <li><a href="#">فنادق الامارات العربية المتحدة</a></li>
              <li><a href="#">فنادق أبوظبي</a></li>
              <li><a href="#">فنادق عجمان</a></li>
              <li> <a href="#">فنادق الخبر</a></li>
              <li> <a href="#">فنادق أسوان</a></li>
              <li> <a href="#">فنادق القاهرة</a></li>
              <li> <a href="#">فنادق الدمام</a></li>
              <li> <a href="#">فنادق دبي</a></li>
              <li> <a href="#">فنادق جدة</a></li>
              <li> <a href="#">فنادق الأقصر</a></li>
              <li> <a href="#">فنادق المدينة المنورة</a></li>
              <li> <a href="#">فنادق مكة المكرمة</a></li>
              <li> <a href="#">فنادق رأس الخيمة</a></li>
              <li> <a href="#">فنادق الرياض</a></li>
              <li> <a href="#">فنادق شرم الشيخ</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
            <div class="section-title text-right mb-3">
              <h4 class="m-0">أفضل شركات الطيران</h4>
              <span class="bg-warning"></span>
            </div>
            <div class="destination-list">
                <ul>


                   <li> <a href="#">الخطوط الجوية السعودية</a></li>

                   <li> <a href="#">الخطوط الجوية السودانية</a></li>

                   <li> <a href="#">الخطوط الجوية التايلاندية الدولية</a></li>

                   <li> <a href="#">طيران الهند اكسبرس</a></li>

                   <li> <a href="#">طيران ايزي جيت</a></li>

                   <li> <a href="#">الخطوط الجوية السنغافورية</a></li>

                   <li> <a href="#">خطوط بيمان بنغلاديش الجوية</a></li>

                   <li> <a href="#">سبايس جيت</a></li>

                   <li> <a href="#">انديجو</a></li>

                   <li> <a href="#">الخطوط الجوية الدولية الباكستانية</a></li>

                   <li> <a href="#">الخطوط الجوية بانكوك</a></li>

                   <li> <a href="#">سيبو باسيفيك</a></li>

                   <li> <a href="#">الخطوط الجوية الإريترية</a></li>

                   <li> <a href="#">طيران السلام</a></li>

                   <li> <a href="#">فلاي ايجيبت</a></li>

                   <li> <a href="#">الاسكندرية للطيران</a></li>

                   <li> <a href="#">خطوط فيولينغ</a></li>

                   <li> <a href="#">الطيران الهندي</a></li>

                   <li> <a href="#">طيران ايجين</a></li>


                  </ul>
            </div>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <?php if(empty($banner_footer)): ?>


          <?php else: ?>
          <?php $__currentLoopData = $banner_footer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner_foot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <img src="<?php echo e(url('/')); ?>/uploads/topics/<?php echo e($banner_foot->photo_file); ?>" class="img-fluid" alt="">
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontEnd.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>