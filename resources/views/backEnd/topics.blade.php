@if(@empty($air_hote_new))

@endif

@extends('backEnd.layout')

@section('content')
    <div class="padding">
        <div class="box">
            <div class="box-header dker">
                <h3>{!! trans('backLang.'.$WebmasterSection->name) !!}</h3>
                <small>
                    <a href="{{ route('adminHome') }}">{{ trans('backLang.home') }}</a> /
                    <a>{!! trans('backLang.'.$WebmasterSection->name) !!}</a>
                </small>
            </div>
            @if($Topics->total() >0)
            @if($WebmasterSection->about_us == 0)
                @if(@Auth::user()->permissionsGroup->add_status)
                @if(@$WebmasterSection->add_Banner == 0)
                    <div class="row p-a">
                        <div class="col-sm-12">
                            <a class="btn btn-fw primary" href="{{route("topicsCreate",$WebmasterSection->id)}}">
                                <i class="material-icons">&#xe02e;</i>
                                &nbsp; {{ trans('backLang.topicNew') }}  {!! trans('backLang.'.$WebmasterSection->name) !!}
                            </a>
                        </div>
                    </div>
                @endif
                @endif
            @endif
            @endif
            @if($WebmasterSection->hotel_air_status == 1)
            @if($WebmasterSection->agree_status == 0)
            <!-- @include('backEnd.includes.newbook') -->
            
              <div class="box"> <div class="box-header dker"> 
        </div>
            <input name="_token" type="hidden" value="LYx8uSAa6TbxgIGqzLQd0ro4cbXEsGVuoBrdRzD9">
             <div class="table-responsive"> <div id="m-59" class="modal fade" data-backdrop="true"> 
                <div class="modal-dialog" id="animate">
                 <div class="modal-content">
                  <div class="modal-header"> 
                    <h5 class="modal-title">تأكيد</h5> 
                 </div> 
                 <div class="modal-body text-center p-lg">
                  <p> هل أنت متأكد أنك تريد الحذف بالفعل؟ <br> <strong>[ test ]</strong> </p> </div> 
                  <div class="modal-footer">
                   <button type="button" class="btn dark-white p-x-md" data-dismiss="modal">لا</button> <a href="http://localhost/eslam/wolfsky/16/topics/destroy/59" class="btn danger p-x-md">نعم</a> </div> 
               </div><!-- /.modal-content --> </div> 
             </div>
                  @if(@empty($air_hote_new))


                      @else
             <table class="table table-striped b-t">
              <thead> <tr> <th style="width:20px;"> <label class="ui-check m-a-0">
               <input id="checkAll" type="checkbox"><i></i> </label>
                </th> <th>رقم الحجز </th>
                 <th class="text-center">صاحب الحجز </th>
                  <th class="text-center">تاريخ الحجز</th> 
                  <th class="text-center">الحاله</th> 
                  <th class="text-center">خيارات</th>
                   </tr>
                    </thead> 
                    <tbody>



                    @foreach($air_hote_new as $airportn)
                     <tr> <td><label class="ui-check m-a-0">
                      <input type="checkbox" name="ids[]" value="59"><i class="dark-white"></i> 
                      <input class="form-control row_no" name="row_ids[]" type="hidden" value="59"> 
                  </label> 
              </td> <td>
               <input class="pull-left form-control row_no" id="row_no" name="row_no_59" type="text" value="{{$airportn->id}}">  <div> 
                <small> </small> </div> </td>
                @foreach(\App\User::where('id',$airportn->user_id)->get()  as $user_book)
                 <td class="text-center"> {{$user_book->name}} </td>
                 @endforeach 
                <td class="text-center"> {{$airportn->created_at->format('Y.m.d')}}
                </td>
                @foreach(\App\Flight::where('id',$airportn->type_flight)->get()  as $fligh_type_book)
                @if($fligh_type_book->flight1 ==  "checked")
                  <td class="text-center">ذهاب فقط

                @elseif($fligh_type_book->flight2 ==  "checked")
                  <td class="text-center">ذهاب وعوده 


                @else
                  <td class="text-center">وجهات متعددة

                @endif

                    @endforeach 

                </td>
                <input type="hidden" id="air_id" value="{{$airportn->id}}" name="">
                 <td class="text-center"> 
                      <a href="" class="btn btn-success ">عرض الحجز</a>
                       <a href="" class="btn btn-warning "> تفاصيل  الحجز </a>
                         <button id="agree_air" class="btn btn-success">موافقة </button> 
                         <button id="refuse_air" class="btn btn-danger">رفض </button> 
                  </td>
                   </tr> <!-- .modal --> <!-- / .modal --> 
                  @endforeach
               </tbody>
                    </table>
                    {{ $air_hote_new ->links() }}
                     </div> 
                  <footer class="dker p-a"> <div class="row"> <div class="col-sm-3 hidden-xs"> <!-- .modal --> 
                    <div id="m-all" class="modal fade" data-backdrop="true"> <div class="modal-dialog" id="animate"> 
                        <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title">تأكيد</h5> 
                        </div> <div class="modal-body text-center p-lg"> <p> هل أنت متأكد أنك تريد الحذف بالفعل؟ </p>
                         </div> <div class="modal-footer"> 
                            <button type="button" class="btn dark-white p-x-md" data-dismiss="modal">لا</button> 
                            <button type="submit" class="btn danger p-x-md">نعم</button> </div> </div>
                            <!-- /.modal-content --> </div> </div> <!-- / .modal -->
                             <select name="action" id="action" class="input-sm form-control w-sm inline v-middle" >
                              <option value="">الخيارات</option>
                               <option value="order">حفظ الترتيب</option> 
                               <option value="activate">تفعيل السجلات</option>
                                <option value="block">حظر السجلات</option> 
                                <option value="delete">حذف السجلات</option> 
                            </select> 
                            <button type="submit" id="submit_all" class="btn btn-sm white">تنفيذ</button>
                             <button id="submit_show_msg" class="btn btn-sm white" data-toggle="modal" style="display: none" data-target="#m-all" ui-toggle-class="bounce" ui-target="#animate">تنفيذ </button> </div> 
                             <div class="col-sm-3 text-center"> 
                                <small class="text-muted inline m-t-sm m-b-sm">عرض 1 -1 من أصل <strong>1</strong> سجلات</small>
                                 </div> <div class="col-sm-6 text-right text-center-xs"> </div> </div> </footer>
                                 </div>
           
                     @endif

             @if(@empty($hote_new))

             @else
              <div class="box"> <div class="box-header dker"> 
        </div>
            <input name="_token" type="hidden" value="LYx8uSAa6TbxgIGqzLQd0ro4cbXEsGVuoBrdRzD9">
             <div class="table-responsive"> <div id="m-59" class="modal fade" data-backdrop="true"> 
                <div class="modal-dialog" id="animate">
                 <div class="modal-content">
                  <div class="modal-header"> 
                    <h5 class="modal-title">تأكيد</h5> 
                 </div> 
                 <div class="modal-body text-center p-lg">
                  <p> هل أنت متأكد أنك تريد الحذف بالفعل؟ <br> <strong>[ test ]</strong> </p> </div> 
                  <div class="modal-footer">
                   <button type="button" class="btn dark-white p-x-md" data-dismiss="modal">لا</button> <a href="http://localhost/eslam/wolfsky/16/topics/destroy/59" class="btn danger p-x-md">نعم</a> </div> 
               </div><!-- /.modal-content --> </div> 
             </div>
             <table class="table table-striped b-t">
              <thead> <tr> <th style="width:20px;"> <label class="ui-check m-a-0">
               <input id="checkAll" type="checkbox"><i></i> </label>
                </th> <th>رقم الحجز </th>
                 <th class="text-center">صاحب الحجز </th>
                  <th class="text-center">تاريخ الحجز</th> 
                  <th class="text-center">{{ trans('backLang.go_trip_h') }}</th> 
                  <th class="text-center">خيارات</th>
                   </tr>
                    </thead> 
                    <tbody>
                    @foreach($hote_new as $hotel)

                     <tr> <td><label class="ui-check m-a-0">
                      <input type="checkbox" name="ids[]" value="59"><i class="dark-white"></i> 
                      <input class="form-control row_no" name="row_ids[]" type="hidden" value="59"> 
                  </label> 
              </td> <td>
               <input class="pull-left form-control row_no" id="row_no" name="row_no_59" type="text" value="{{$hotel->id}}">  <div> 
                <small> </small> </div> </td>
                @foreach(\App\User::where('id',$hotel->user_id)->get()  as $user_book)
                 <td class="text-center"> {{$user_book->name}} </td>
                 @endforeach 
                <td class="text-center"> {{$hotel->created_at->format('Y.m.d')}}
                </td>
                <td class="text-center"> {{$hotel->way_name}}
                </td>

                <input type="hidden" id="hotel_id" value="{{$hotel->id}}" name="">

                 <td class="text-center"> 
                      <a href="" class="btn btn-success ">عرض الحجز</a>
                       <a href="" class="btn btn-warning "> تفاصيل  الحجز </a>
                         <button id="agree_hotel" class="btn btn-success">موافقة </button> 
                         <button id="refuse_hotel" class="btn btn-danger">رفض </button> 
                  </td>
                   </tr> <!-- .modal --> <!-- / .modal --> 
                  @endforeach
               </tbody>
                    </table>
                    {{ $hote_new ->links() }}
                     </div> 
                  <footer class="dker p-a"> <div class="row"> <div class="col-sm-3 hidden-xs"> <!-- .modal --> 
                    <div id="m-all" class="modal fade" data-backdrop="true"> <div class="modal-dialog" id="animate"> 
                        <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title">تأكيد</h5> 
                        </div> <div class="modal-body text-center p-lg"> <p> هل أنت متأكد أنك تريد الحذف بالفعل؟ </p>
                         </div> <div class="modal-footer"> 
                            <button type="button" class="btn dark-white p-x-md" data-dismiss="modal">لا</button> 
                            <button type="submit" class="btn danger p-x-md">نعم</button> </div> </div>
                            <!-- /.modal-content --> </div> </div> <!-- / .modal -->
<!--                              <select name="action" id="action" class="input-sm form-control w-sm inline v-middle" >
                              <option value="">الخيارات</option>
                               <option value="order">حفظ الترتيب</option> 
                               <option value="activate">تفعيل السجلات</option>
                                <option value="block">حظر السجلات</option> 
                                <option value="delete">حذف السجلات</option> 
                            </select> 

 -->                        
     <!-- <button type="submit" id="submit_all" class="btn btn-sm white">تنفيذ</button> -->
                             <button id="submit_show_msg" class="btn btn-sm white" data-toggle="modal" style="display: none" data-target="#m-all" ui-toggle-class="bounce" ui-target="#animate">تنفيذ </button> </div> 
                             <div class="col-sm-3 text-center"> 
                                <small class="text-muted inline m-t-sm m-b-sm">عرض 1 -1 من أصل <strong>1</strong> سجلات</small>
                                 </div> <div class="col-sm-6 text-right text-center-xs"> </div> </div> </footer>
                                 </div>
           

           @endif

             @if(@empty($hote_new_airport))

             @else
              <div class="box"> <div class="box-header dker"> 
        </div>
         <form method="POST" action="{{url('/')}}/16/topics/updateAll" accept-charset="UTF-8">
            <input name="_token" type="hidden" value="LYx8uSAa6TbxgIGqzLQd0ro4cbXEsGVuoBrdRzD9">
             <div class="table-responsive"> <div id="m-59" class="modal fade" data-backdrop="true"> 
                <div class="modal-dialog" id="animate">
                 <div class="modal-content">
                  <div class="modal-header"> 
                    <h5 class="modal-title">تأكيد</h5> 
                 </div> 
                 <div class="modal-body text-center p-lg">
                  <p> هل أنت متأكد أنك تريد الحذف بالفعل؟ <br> <strong>[ test ]</strong> </p> </div> 
                  <div class="modal-footer">
                   <button type="button" class="btn dark-white p-x-md" data-dismiss="modal">لا</button> <a href="http://localhost/eslam/wolfsky/16/topics/destroy/59" class="btn danger p-x-md">نعم</a> </div> 
               </div><!-- /.modal-content --> </div> 
             </div>
             <table class="table table-striped b-t">
              <thead> <tr> <th style="width:20px;"> <label class="ui-check m-a-0">
               <input id="checkAll" type="checkbox"><i></i> </label>
                </th> <th>رقم الحجز </th>
                 <th class="text-center">صاحب الحجز </th>
                  <th class="text-center">تاريخ الحجز</th> 
                  <th class="text-center">الحاله</th> 
                  <th class="text-center">خيارات</th>
                   </tr>
                    </thead> 
                    <tbody>
                    @foreach($hote_new as $airportn)

                     <tr> <td><label class="ui-check m-a-0">
                      <input type="checkbox" name="ids[]" value="59"><i class="dark-white"></i> 
                      <input class="form-control row_no" name="row_ids[]" type="hidden" value="59"> 
                  </label> 
              </td> <td>
               <input class="pull-left form-control row_no" id="row_no" name="row_no_59" type="text" value="{{$airportn->id}}">  <div> 
                <small> </small> </div> </td>
                @foreach(\App\User::where('id',$airportn->user_id)->get()  as $user_book)
                 <td class="text-center"> {{$user_book->name}} </td>
                 @endforeach 
                <td class="text-center"> {{$airportn->created_at->format('Y.m.d')}}
                </td>
                @foreach(\App\Flight::where('id',$airportn->type_flight)->get()  as $fligh_type_book)
                @if($fligh_type_book->flight1 ==  "checked")
                  <td class="text-center">ذهاب فقط

                @elseif($fligh_type_book->flight2 ==  "checked")
                  <td class="text-center">ذهاب وعوده 


                @else
                  <td class="text-center">وجهات متعددة

                @endif

                    @endforeach 

                </td>
                 <td class="text-center"> 
                      <a href="" class="btn btn-success ">عرض الحجز</a>
                       <a href="" class="btn btn-warning "> تفاصيل  الحجز </a>
                         <a href="" class="btn btn-success ">موافقة</a> 
                         <a href="" class="btn btn-danger ">رفض</a>  
                  </td>
                   </tr> <!-- .modal --> <!-- / .modal --> 
                  @endforeach
               </tbody>
                    </table>
                    {{ $hote_new ->links() }}
                     </div> 
                  <footer class="dker p-a"> <div class="row"> <div class="col-sm-3 hidden-xs"> <!-- .modal --> 
                    <div id="m-all" class="modal fade" data-backdrop="true"> <div class="modal-dialog" id="animate"> 
                        <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title">تأكيد</h5> 
                        </div> <div class="modal-body text-center p-lg"> <p> هل أنت متأكد أنك تريد الحذف بالفعل؟ </p>
                         </div> <div class="modal-footer"> 
                            <button type="button" class="btn dark-white p-x-md" data-dismiss="modal">لا</button> 
                            <button type="submit" class="btn danger p-x-md">نعم</button> </div> </div>
                            <!-- /.modal-content --> </div> </div> <!-- / .modal -->
                             <select name="action" id="action" class="input-sm form-control w-sm inline v-middle" required="">
                              <option value="">الخيارات</option>
                               <option value="order">حفظ الترتيب</option> 
                               <option value="activate">تفعيل السجلات</option>
                                <option value="block">حظر السجلات</option> 
                                <option value="delete">حذف السجلات</option> 
                            </select> 
                            <button type="submit" id="submit_all" class="btn btn-sm white">تنفيذ</button>
                             <button id="submit_show_msg" class="btn btn-sm white" data-toggle="modal" style="display: none" data-target="#m-all" ui-toggle-class="bounce" ui-target="#animate">تنفيذ </button> </div> 
                             <div class="col-sm-3 text-center"> 
                                <small class="text-muted inline m-t-sm m-b-sm">عرض 1 -1 من أصل <strong>1</strong> سجلات</small>
                                 </div> <div class="col-sm-6 text-right text-center-xs"> </div> </div> </footer>
                                  </form>
                                 </div>
           

           @endif
           @endif
           @endif
            @if($WebmasterSection->hotel_air_status == 1)
            @if($WebmasterSection->agree_status == 1)

      <div class="box"> <div class="box-header dker"> 
        </div>
         <form method="POST" action="http://localhost/eslam/wolfsky/16/topics/updateAll" accept-charset="UTF-8">
            <input name="_token" type="hidden" value="LYx8uSAa6TbxgIGqzLQd0ro4cbXEsGVuoBrdRzD9">
             <div class="table-responsive"> <div id="m-59" class="modal fade" data-backdrop="true"> 
                <div class="modal-dialog" id="animate">
                 <div class="modal-content">
                  <div class="modal-header"> 
                    <h5 class="modal-title">تأكيد</h5> 
                 </div> 
                 <div class="modal-body text-center p-lg">
                  <p> هل أنت متأكد أنك تريد الحذف بالفعل؟ <br> <strong>[ test ]</strong> </p> </div> 
                  <div class="modal-footer">
                   <button type="button" class="btn dark-white p-x-md" data-dismiss="modal">لا</button> <a href="http://localhost/eslam/wolfsky/16/topics/destroy/59" class="btn danger p-x-md">نعم</a> </div> 
               </div><!-- /.modal-content --> </div> 
             </div>
             <table class="table table-striped b-t">
              <thead> <tr> <th style="width:20px;"> <label class="ui-check m-a-0">
               <input id="checkAll" type="checkbox"><i></i> </label>
                </th> <th>رقم الحجز </th>
                 <th class="text-center">صاحب الحجز </th>
                  <th class="text-center">تاريخ الحجز</th> 
                     @if(@empty($air_hote_agree))
                  <th class="text-center">{{ trans('backLang.hotel_go') }}</th> 
                                   
                        @else
                  <th class="text-center">حالة الرحله </th> 
                              @endif
                  <th class="text-center">خيارات</th>
                   </tr>
                     </thead> 
                    <tbody>
                 @if(@empty($air_hote_agree))
               
                    @foreach($hote_agree  as $hotel_agree)
                     <tr> <td><label class="ui-check m-a-0">
                      <input type="checkbox" name="ids[]" value="59"><i class="dark-white"></i> 
                      <input class="form-control row_no" name="row_ids[]" type="hidden" value="59"> 
                  </label> 
              </td> <td>
               <input class="pull-left form-control row_no" id="row_no" name="row_no_59" type="text" value="{{$hotel_agree->id}}">  <div> 
                <small> </small> </div> </td>
                @foreach(\App\User::where('id',$hotel_agree->user_id)->get()  as $user_book)
                 <td class="text-center"> {{$user_book->name}} </td>
                 @endforeach 
                <td class="text-center"> {{$hotel_agree->created_at->format('Y.m.d')}}
                </td>
                <td class="text-center"> {{$hotel_agree->way_name}}
                </td>
             

                 <td class="text-center"> 
                      <a href="" class="btn btn-success ">عرض الحجز</a>
                       <a href="" class="btn btn-warning "> تفاصيل  الحجز </a>
                  </td>
                   </tr> <!-- .modal --> <!-- / .modal --> 
                  @endforeach


             @else

                    @foreach($air_hote_agree  as $airportn)
                     <tr> <td><label class="ui-check m-a-0">
                      <input type="checkbox" name="ids[]" value="59"><i class="dark-white"></i> 
                      <input class="form-control row_no" name="row_ids[]" type="hidden" value="59"> 
                  </label> 
              </td> <td>
               <input class="pull-left form-control row_no" id="row_no" name="row_no_59" type="text" value="{{$airportn->id}}">  <div> 
                <small> </small> </div> </td>
                @foreach(\App\User::where('id',$airportn->user_id)->get()  as $user_book)
                 <td class="text-center"> {{$user_book->name}} </td>
                 @endforeach 
                <td class="text-center"> {{$airportn->created_at->format('Y.m.d')}}
                </td>
                @foreach(\App\Flight::where('id',$airportn->type_flight)->get()  as $fligh_type_book)
                @if($fligh_type_book->flight1 ==  "checked")
                  <td class="text-center">ذهاب فقط

                @elseif($fligh_type_book->flight2 ==  "checked")
                  <td class="text-center">ذهاب وعوده 


                @else
                  <td class="text-center">وجهات متعددة

                @endif

                    @endforeach 

                </td>
                 <td class="text-center"> 
                      <a href="" class="btn btn-success ">عرض الحجز</a>
                       <a href="" class="btn btn-warning "> تفاصيل  الحجز </a>
                  </td>
                   </tr> <!-- .modal --> <!-- / .modal --> 
                  @endforeach
               </tbody>
                    </table>
                       @if(@empty($air_hote_agree))
                    {{ $hote_agree ->links() }}
                       
                       @else
                    {{ $air_hote_agree ->links() }}
                    @endif
                     </div> 
                  <footer class="dker p-a"> <div class="row"> <div class="col-sm-3 hidden-xs"> <!-- .modal --> 
                    <div id="m-all" class="modal fade" data-backdrop="true"> <div class="modal-dialog" id="animate"> 
                        <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title">تأكيد</h5> 
                        </div> <div class="modal-body text-center p-lg"> <p> هل أنت متأكد أنك تريد الحذف بالفعل؟ </p>
                         </div> <div class="modal-footer"> 
                            <button type="button" class="btn dark-white p-x-md" data-dismiss="modal">لا</button> 
                            <button type="submit" class="btn danger p-x-md">نعم</button> </div> </div>
                            <!-- /.modal-content --> </div> </div> <!-- / .modal -->
                             <select name="action" id="action" class="input-sm form-control w-sm inline v-middle" required="">
                              <option value="">الخيارات</option>
                               <option value="order">حفظ الترتيب</option> 
                               <option value="activate">تفعيل السجلات</option>
                                <option value="block">حظر السجلات</option> 
                                <option value="delete">حذف السجلات</option> 
                            </select> 
                            <button type="submit" id="submit_all" class="btn btn-sm white">تنفيذ</button>
                             <button id="submit_show_msg" class="btn btn-sm white" data-toggle="modal" style="display: none" data-target="#m-all" ui-toggle-class="bounce" ui-target="#animate">تنفيذ </button> </div> 
                             <div class="col-sm-3 text-center"> 
                                <small class="text-muted inline m-t-sm m-b-sm">عرض 1 -1 من أصل <strong>1</strong> سجلات</small>
                                 </div> <div class="col-sm-6 text-right text-center-xs"> </div> </div> </footer>
                                  </form>
                                   <script type="text/javascript"> $("#checkAll").click(function () { $('input:checkbox').not(this).prop('checked', this.checked); }); $("#action").change(function () { if (this.value == "delete") { $("#submit_all").css("display", "none"); $("#submit_show_msg").css("display", "inline-block"); } else { $("#submit_all").css("display", "inline-block"); $("#submit_show_msg").css("display", "none"); } }); 
                               </script> </div>




           @endif
           @endif
           @endif
            @if($WebmasterSection->hotel_air_status == 1)
            @if($WebmasterSection->agree_status == 3)
            
                  <div class="box"> <div class="box-header dker"> 
        </div>
         <form method="POST" action="http://localhost/eslam/wolfsky/16/topics/updateAll" accept-charset="UTF-8">
            <input name="_token" type="hidden" value="LYx8uSAa6TbxgIGqzLQd0ro4cbXEsGVuoBrdRzD9">
             <div class="table-responsive"> <div id="m-59" class="modal fade" data-backdrop="true"> 
                <div class="modal-dialog" id="animate">
                 <div class="modal-content">
                  <div class="modal-header"> 
                    <h5 class="modal-title">تأكيد</h5> 
                 </div> 
                 <div class="modal-body text-center p-lg">
                  <p> هل أنت متأكد أنك تريد الحذف بالفعل؟ <br> <strong>[ test ]</strong> </p> </div> 
                  <div class="modal-footer">
                   <button type="button" class="btn dark-white p-x-md" data-dismiss="modal">لا</button> <a href="http://localhost/eslam/wolfsky/16/topics/destroy/59" class="btn danger p-x-md">نعم</a> </div> 
               </div><!-- /.modal-content --> </div> 
             </div>
                        @if(empty($air_hote_not_agree))

                    <!-- <div style="margin-right: 50%;color: red;font-size: large;">لا توجد بيانات </div>   --> 

             <table class="table table-striped b-t">
              <thead> <tr> <th style="width:20px;"> 
                <label class="ui-check m-a-0">
               <input id="checkAll" type="checkbox"><i></i> </label>
                </th> <th>رقم الحجز </th>
                 <th class="text-center">صاحب الحجز </th>
                  <th class="text-center">تاريخ الحجز</th> 
                  <th class="text-center">{{ trans('backLang.hotel_go') }}</th>
                  <th class="text-center">خيارات</th>
                   </tr>
                     </thead> 
                    <tbody>
                    @foreach($hote_not_agree_hotel  as $hotel_not_agree)
                     <tr> <td><label class="ui-check m-a-0">
                      <input type="checkbox" name="ids[]" value="59"><i class="dark-white"></i> 
                      <input class="form-control row_no" name="row_ids[]" type="hidden" value="59"> 
                  </label> 
              </td> <td>
               <input class="pull-left form-control row_no" id="row_no" name="row_no_59" type="text" value="{{$hotel_not_agree->id}}">  <div> 
                <small> </small> </div> </td>
                @foreach(\App\User::where('id',$hotel_not_agree->user_id)->get()  as $user_book)
                 <td class="text-center"> {{$user_book->name}} </td>
                 @endforeach 
                <td class="text-center"> {{$hotel_not_agree->created_at->format('Y.m.d')}}
                </td>

                <td class="text-center"> {{$hotel_not_agree->way_name}}
                </td>


                 <td class="text-center"> 
                      <a href="" class="btn btn-success ">عرض الحجز</a>
                       <a href="" class="btn btn-warning "> تفاصيل  الحجز </a>
                  </td>
                   </tr> <!-- .modal --> <!-- / .modal --> 


                  @endforeach
               </tbody>
                    </table>
                    {{ $hote_not_agree_hotel ->links() }}
                                                      

                          @else

             <table class="table table-striped b-t">
              <thead> <tr> <th style="width:20px;"> 
                <label class="ui-check m-a-0">
               <input id="checkAll" type="checkbox"><i></i> </label>
                </th> <th>رقم الحجز </th>
                 <th class="text-center">صاحب الحجز </th>
                  <th class="text-center">تاريخ الحجز</th> 
                  <th class="text-center">خيارات</th>
                   </tr>
                     </thead> 
                    <tbody>
                    @foreach($air_hote_not_agree  as $airportn)
                     <tr> <td><label class="ui-check m-a-0">
                      <input type="checkbox" name="ids[]" value="59"><i class="dark-white"></i> 
                      <input class="form-control row_no" name="row_ids[]" type="hidden" value="59"> 
                  </label> 
              </td> <td>
               <input class="pull-left form-control row_no" id="row_no" name="row_no_59" type="text" value="{{$airportn->id}}">  <div> 
                <small> </small> </div> </td>
                @foreach(\App\User::where('id',$airportn->user_id)->get()  as $user_book)
                 <td class="text-center"> {{$user_book->name}} </td>
                 @endforeach 
                <td class="text-center"> {{$airportn->created_at->format('Y.m.d')}}
                </td>
                @foreach(\App\Flight::where('id',$airportn->type_flight)->get()  as $fligh_type_book)
                @if($fligh_type_book->flight1 ==  "checked")
                  <td class="text-center">ذهاب فقط

                @elseif($fligh_type_book->flight2 ==  "checked")
                  <td class="text-center">ذهاب وعوده 


                @else
                  <td class="text-center">وجهات متعددة

                @endif

                    @endforeach 

                </td>

                 <td class="text-center"> 
                      <a href="" class="btn btn-success ">عرض الحجز</a>
                       <a href="" class="btn btn-warning "> تفاصيل  الحجز </a>
                  </td>
                   </tr> <!-- .modal --> <!-- / .modal --> 


                  @endforeach
               </tbody>
                    </table>
                    {{ $air_hote_not_agree ->links() }}
                                                      
                  @endif
               </div> 
                  <footer class="dker p-a"> <div class="row"> <div class="col-sm-3 hidden-xs"> <!-- .modal --> 
                    <div id="m-all" class="modal fade" data-backdrop="true"> <div class="modal-dialog" id="animate"> 
                        <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title">تأكيد</h5> 
                        </div> <div class="modal-body text-center p-lg"> <p> هل أنت متأكد أنك تريد الحذف بالفعل؟ </p>
                         </div> <div class="modal-footer"> 
                            <button type="button" class="btn dark-white p-x-md" data-dismiss="modal">لا</button> 
                            <button type="submit" class="btn danger p-x-md">نعم</button> </div> </div>
                            <!-- /.modal-content --> </div> </div> <!-- / .modal -->
                             <select name="action" id="action" class="input-sm form-control w-sm inline v-middle" required="">
                              <option value="">الخيارات</option>
                               <option value="order">حفظ الترتيب</option> 
                               <option value="activate">تفعيل السجلات</option>
                                <option value="block">حظر السجلات</option> 
                                <option value="delete">حذف السجلات</option> 
                            </select> 
                            <button type="submit" id="submit_all" class="btn btn-sm white">تنفيذ</button>
                             <button id="submit_show_msg" class="btn btn-sm white" data-toggle="modal" style="display: none" data-target="#m-all" ui-toggle-class="bounce" ui-target="#animate">تنفيذ </button> </div> 
                             <div class="col-sm-3 text-center"> 
                                <small class="text-muted inline m-t-sm m-b-sm">عرض 1 -1 من أصل <strong>1</strong> سجلات</small>
                                 </div> <div class="col-sm-6 text-right text-center-xs"> </div> </div> </footer>
                                  </form>
                                   <script type="text/javascript"> $("#checkAll").click(function () { $('input:checkbox').not(this).prop('checked', this.checked); }); $("#action").change(function () { if (this.value == "delete") { $("#submit_all").css("display", "none"); $("#submit_show_msg").css("display", "inline-block"); } else { $("#submit_all").css("display", "inline-block"); $("#submit_show_msg").css("display", "none"); } }); 
                               </script> </div>





           @endif
           @endif

             @if($WebmasterSection->hotel_air_status == 0)

            @if($Topics->total() == 0)
                <div class="row p-a">
                    <div class="col-sm-12">
                        <div class=" p-a text-center ">
                            {{ trans('backLang.noData') }}
                            <br>
                            <br>
                            @if(@Auth::user()->permissionsGroup->add_status)
                                <a class="btn btn-fw primary" href="{{route("topicsCreate",$WebmasterSection->id)}}">
                                    <i class="material-icons">&#xe02e;</i>
                                    &nbsp; {{ trans('backLang.topicNew') }}  {!! trans('backLang.'.$WebmasterSection->name) !!}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
            @endif

            @if($Topics->total() > 0)
                {{Form::open(['route'=>['topicsUpdateAll',$WebmasterSection->id],'method'=>'post'])}}
                <div class="table-responsive">
                    <table class="table table-striped  b-t">
                        <thead>
                        <tr>
                            <th style="width:20px;">
                                <label class="ui-check m-a-0">
                                    <input id="checkAll" type="checkbox"><i></i>
                                </label>
                            </th>
                            <th>{{ trans('backLang.topicName') }}</th>
                            @if($WebmasterSection->date_status)
                                <th class="text-center" style="width:120px;">{{ trans('backLang.topicDate') }}</th>
                            @endif
                            @if($WebmasterSection->expire_date_status)
                                <th class="text-center" style="width:120px;">{{ trans('backLang.expireDate') }}</th>
                            @endif
                            <th class="text-center" style="width:80px;">{{ trans('backLang.visits') }}</th>
                            <th class="text-center" style="width:50px;">{{ trans('backLang.status') }}</th>
                            <th class="text-center" style="width:200px;">{{ trans('backLang.options') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $title_var = "title_" . trans('backLang.boxCode');
                        $title_var2 = "title_" . trans('backLang.boxCodeOther');
                        ?>
                        @foreach($Topics as $Topic)
                            <?php
                            if ($Topic->$title_var != "") {
                                $title = $Topic->$title_var;
                            } else {
                                $title = $Topic->$title_var2;
                            }
                            // Get Categories list
                            $section = "";
                            $sectionSt = "";
                            if ($WebmasterSection->sections_status != 0) {
                                foreach ($Topic->categories as $category) {
                                    try {
                                        if ($category->section->$title_var != "") {
                                            $cat_title = $category->section->$title_var;
                                        } else {
                                            $cat_title = $category->section->$title_var2;
                                        }
                                        $section .= $cat_title . ", ";

                                    } catch (Exception $e) {

                                    }

                                }
                                if ($section == "") {
                                    $sectionSt = "<span style='color: orangered'><i>" . trans('backLang.topicDeletedSection') . "</i></span>";
                                } else {
                                    $section = rtrim($section, ", ");
                                }
                            }

                            ?>
                            <tr>
                                <td><label class="ui-check m-a-0">
                                        <input type="checkbox" name="ids[]" value="{{ $Topic->id }}"><i
                                                class="dark-white"></i>
                                        {!! Form::hidden('row_ids[]',$Topic->id, array('class' => 'form-control row_no')) !!}
                                    </label>
                                </td>
                                <td>
                                    @if($Topic->photo_file !="")
                                        <div class="pull-right">
                                            <img src="{{ URL::to('uploads/topics/'.$Topic->photo_file) }}"
                                                 style="height: 40px" alt="{{ $title }}">
                                        </div>
                                    @endif
                                    {!! Form::text('row_no_'.$Topic->id,$Topic->row_no, array('class' => 'pull-left form-control row_no','id'=>'row_no')) !!}

                                    @if($Topic->icon !="")
                                        <i class="fa {!! $Topic->icon !!} "></i>
                                    @endif
                                    {{ $title }}
                                    <div>
                                        <small>
                                            {{ $section }} {!! $sectionSt !!}
                                        </small>
                                    </div>
                                </td>
                                @if($WebmasterSection->date_status)
                                    <td class="text-center">
                                        <small>{!! $Topic->date  !!}</small>
                                    </td>
                                @endif
                                @if($WebmasterSection->expire_date_status)
                                    <td class="text-center">
                                        <small {!! ($Topic->expire_date < date("Y-m-d"))? "style='color:red'":"" !!}>{!! $Topic->expire_date  !!}</small>
                                    </td>
                                @endif
                                <td class="text-center">
                                    {!! $Topic->visits !!}
                                    @if($WebmasterSection->comments_status)
                                        @if(count($Topic->newComments) >0)
                                            <div title="{{ trans('backLang.comments') }}">
                                                <a href="{{ route('topicsComments',[$WebmasterSection->id,$Topic->id]) }}">
                                                    <small style="color:red"><i class="material-icons"
                                                                                style="font-size: 14px;color:red">
                                                            &#xe0b9;</i> {{count($Topic->newComments)}}</small>
                                                </a>
                                            </div>
                                        @elseif(count($Topic->comments) >0)
                                            <div title="{{ trans('backLang.comments') }}">
                                                <a href="{{ route('topicsComments',[$WebmasterSection->id,$Topic->id]) }}">
                                                    <small><i class="material-icons" style="font-size: 14px">
                                                            &#xe0b9;</i> {{count($Topic->comments)}}</small>
                                                </a>
                                            </div>
                                        @endif
                                    @endif
                                </td>
                                <td class="text-center">
                                    <i class="fa {{ ($Topic->status==1) ? "fa-check text-success":"fa-times text-danger" }} inline"></i>
                                </td>
                                <td class="text-center">
                                    @if(@Auth::user()->permissionsGroup->edit_status)
                                        <a class="btn btn-sm success"
                                           href="{{ route("topicsEdit",["webmasterId"=>$WebmasterSection->id,"id"=>$Topic->id]) }}">
                                            <small><i class="material-icons">&#xe3c9;</i> {{ trans('backLang.edit') }}
                                            </small>
                                        </a>
                                    @endif
                                    @if(@Auth::user()->permissionsGroup->delete_status)
                                        <button class="btn btn-sm warning" data-toggle="modal"
                                                data-target="#m-{{ $Topic->id }}" ui-toggle-class="bounce"
                                                ui-target="#animate">
                                            <small><i class="material-icons">&#xe872;</i> {{ trans('backLang.delete') }}
                                            </small>
                                        </button>
                                    @endif

                                </td>
                            </tr>
                            <!-- .modal -->
                            <div id="m-{{ $Topic->id }}" class="modal fade" data-backdrop="true">
                                <div class="modal-dialog" id="animate">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ trans('backLang.confirmation') }}</h5>
                                        </div>
                                        <div class="modal-body text-center p-lg">
                                            <p>
                                                {{ trans('backLang.confirmationDeleteMsg') }}
                                                <br>
                                                <strong>[ {{ $title }} ]</strong>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn dark-white p-x-md"
                                                    data-dismiss="modal">{{ trans('backLang.no') }}</button>
                                            <a href="{{ route("topicsDestroy",["webmasterId"=>$WebmasterSection->id,"id"=>$Topic->id]) }}"
                                               class="btn danger p-x-md">{{ trans('backLang.yes') }}</a>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div>
                            </div>
                            <!-- / .modal -->

                        @endforeach

                        </tbody>
                    </table>

                </div>
                <footer class="dker p-a">
                    <div class="row">
                        <div class="col-sm-3 hidden-xs">
                            <!-- .modal -->
                            <div id="m-all" class="modal fade" data-backdrop="true">
                                <div class="modal-dialog" id="animate">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">{{ trans('backLang.confirmation') }}</h5>
                                        </div>
                                        <div class="modal-body text-center p-lg">
                                            <p>
                                                {{ trans('backLang.confirmationDeleteMsg') }}
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn dark-white p-x-md"
                                                    data-dismiss="modal">{{ trans('backLang.no') }}</button>
                                            <button type="submit"
                                                    class="btn danger p-x-md">{{ trans('backLang.yes') }}</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div>
                            </div>
                            <!-- / .modal -->
                            @if(@Auth::user()->permissionsGroup->edit_status)
                                <select name="action" id="action" class="input-sm form-control w-sm inline v-middle"
                                        required>
                                    <option value="">{{ trans('backLang.bulkAction') }}</option>
                                    <option value="order">{{ trans('backLang.saveOrder') }}</option>
                                    <option value="activate">{{ trans('backLang.activeSelected') }}</option>
                                    <option value="block">{{ trans('backLang.blockSelected') }}</option>
                                    @if(@Auth::user()->permissionsGroup->delete_status)
                                        <option value="delete">{{ trans('backLang.deleteSelected') }}</option>
                                    @endif
                                </select>
                                <button type="submit" id="submit_all"
                                        class="btn btn-sm white">{{ trans('backLang.apply') }}</button>
                                <button id="submit_show_msg" class="btn btn-sm white" data-toggle="modal"
                                        style="display: none"
                                        data-target="#m-all" ui-toggle-class="bounce"
                                        ui-target="#animate">{{ trans('backLang.apply') }}
                                </button>
                            @endif
                        </div>

                        <div class="col-sm-3 text-center">
                            <small class="text-muted inline m-t-sm m-b-sm">{{ trans('backLang.showing') }} {{ $Topics->firstItem() }}
                                -{{ $Topics->lastItem() }} {{ trans('backLang.of') }}
                                <strong>{{ $Topics->total()  }}</strong> {{ trans('backLang.records') }}</small>
                        </div>
                        <div class="col-sm-6 text-right text-center-xs">
                            {!! $Topics->links() !!}
                        </div>
                    </div>
                </footer>
                {{Form::close()}}

                <script type="text/javascript">
                    $("#checkAll").click(function () {
                        $('input:checkbox').not(this).prop('checked', this.checked);
                    });
                    $("#action").change(function () {
                        if (this.value == "delete") {
                            $("#submit_all").css("display", "none");
                            $("#submit_show_msg").css("display", "inline-block");
                        } else {
                            $("#submit_all").css("display", "inline-block");
                            $("#submit_show_msg").css("display", "none");
                        }
                    });
                </script>
            @endif
        </div>
    </div>
@endsection
@section('footerInclude')
    <script type="text/javascript">
        $("#checkAll").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
        $("#action").change(function () {
            if (this.value == "delete") {
                $("#submit_all").css("display", "none");
                $("#submit_show_msg").css("display", "inline-block");
            } else {
                $("#submit_all").css("display", "inline-block");
                $("#submit_show_msg").css("display", "none");
            }
        });
    </script>
@endsection
