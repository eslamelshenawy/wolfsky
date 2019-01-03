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
                  <th class="text-center">خيارات</th>
                   </tr>
                    </thead> 
                    <tbody>
                     <tr> <td><label class="ui-check m-a-0">
                      <input type="checkbox" name="ids[]" value="59"><i class="dark-white"></i> 
                      <input class="form-control row_no" name="row_ids[]" type="hidden" value="59"> 
                  </label> 
              </td> <td>
               <input class="pull-left form-control row_no" id="row_no" name="row_no_59" type="text" value="1"> test <div> 
                <small> </small> </div> </td> <td class="text-center"> 0 </td> 
                <td class="text-center"> <i class="fa fa-check text-success inline"></i> 
                </td>
                 <td class="text-center"> 
                      <a href="" class="btn btn-success ">عرض الحجز</a>
                       <a href="" class="btn btn-warning "> تفاصيل  الحجز </a>
                  </td>
                   </tr> <!-- .modal --> <!-- / .modal --> </tbody> </table> </div> 
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
