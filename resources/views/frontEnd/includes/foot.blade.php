  <script src="public/frontEnd/new/js/jquery-slim.min.js"></script>
  <script src="public/frontEnd/new/js/popper.min.js"></script>
  <script src="public/frontEnd/new/js/bootstrap.min.js"></script>
  <script src="public/frontEnd/new/js/wow.min.js"></script>
  <script src="public/frontEnd/new/js/bootstrap-datepicker.min.js"></script>
  <script src="//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.rtl.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.rtl.min.css"/>

<!--  -->
@include('frontEnd.login_and_register')
<script>

  $(document).ready(function(){
  $("#login1").click(function(){

            var email = $('#email').val();
            var password = $('#password').val();
            var _token = '{{ csrf_token() }}';
            var data={
              'email':email,
              'password':password,
              '_token':_token,
            }
            console.log(data);
            $.ajax({
                url: '{{ url('/log') }}',
                data: data,
                type: 'post',
                success: function (data) {

                    if (data.status =='success') {
                     alertify.success(data.msg); 
                     location.reload();
                    }else{
                     alertify.error(data.msg); 

                 }


                }
            })

        });
    });

 $(document).ready(function(){
  $("#register").click(function(){

            var name = $('#name').val();
            var newemail = $('#newemail').val();
            var newpwd = $('#newpwd').val();
            var _token = '{{ csrf_token() }}';
            var data={
              'name':name,
              'newemail':newemail,
              'newpwd':newpwd,
              '_token':_token,
            }
            console.log(data);
            $.ajax({
                url: '{{ url('/reg') }}',
                data: data,
                type: 'post',
                success: function (data) {
                  
                    if (data.status =='success') {
                     alertify.success(data.msg); 
                     location.reload();
                    }else{
                     alertify.error(data.errors); 

                 }


                }
            });





        });
    });


$(document).ready(function(){
  $("#book").click(function(){


            var leave_city = $('#leave_city').val();
            var arrive_city = $('#arrive_city').val();
            var leave_date = $('#leave_date').val();
            var arrive_date = $('#arrive_date').val();
            var flight1 = $('#flight1').val();
            var flight2 = $('#flight2').val();
            var flight3 = $('#flight3').val();
            var nonstop = $('#nonstop').val();
            var flexible = $('#flexible').val();
            var leave_city2 = $('#leave_city2').val();
            var arrive_city2 = $('#arrive_city2').val();
            var leave_date2 = $('#leave_date2').val();
            var arrive_date2 = $('#arrive_date2').val();
            var leave_city3 = $('#leave_city3').val();
            var arrive_city3 = $('#arrive_city3').val();
            var leave_date3 = $('#leave_date3').val();
            var arrive_date3 = $('#arrive_date3').val();
            var Adult = $('#Adult').val();
            var child = $('#child').val();
            var infant = $('#infant').val();
            var type_grad = $('#type_grad').val();
            var _token = '{{ csrf_token() }}';
            var data={
              'leave_city':leave_city,
              'arrive_city':arrive_city,
              'leave_date':leave_date,
              'arrive_date':arrive_date,
              'flight1':flight1,
              'flight2':flight2,
              'flight3':flight3,
              'nonstop':nonstop,
              'flexible':flexible,
              'leave_city2':leave_city2,
              'arrive_city2':arrive_city2,
              'leave_date2':leave_date2,
              'arrive_date2':arrive_date2,
              'leave_city3':leave_city3,
              'arrive_city3':arrive_city3,
              'leave_date3':leave_date3,
              'arrive_date3':arrive_date3,
              'Adult':Adult,
              'child':child,
              'infant':infant,
              'type_grad':type_grad,
              '_token':_token,
            }
            console.log(data);
            $.ajax({
                url: '{{ url('/book_airport') }}',
                data: data,
                type: 'post',
                success: function (data) {
                  console.log(data);
                  
                  if (data.status =='error1') {
                     alertify.error('Check input error'); 
                  
                 }else if (data.status =='error2') {
                     alertify.error(data.errors); 

                 }else{
                     alertify.success(data.success); 

                 }



                }
            })


  });
});



$(document).ready(function(){
  $("#hotel_b").click(function(){

            var leave_city_h = $('#leave_city_h').val();
            var arrive_city_h = $('#arrive_city_h').val();
            var leave_date_h = $('#leave_date_h').val();
            var arrive_date_h = $('#arrive_date_h').val();
            var hotel1 = $('#hotel1').val();
            var hotel2 = $('#hotel2').val();
            var Adult_ar = $('#Adult_ar').val();
            var child_ar = $('#child_ar').val();
            var infant_ar = $('#infant_ar').val();
            var type_grad_ar = $('#type_grad_ar').val();


            var _token = '{{ csrf_token() }}';
            var data={
              'leave_city_h':leave_city_h,
              'arrive_city_h':arrive_city_h,
              'leave_date_h':leave_date_h,
              'arrive_date_h':arrive_date_h,
              'hotel1':hotel1,
              'hotel2':hotel2,
              'Adult_ar':Adult_ar,
              'child_ar':child_ar,
              'infant_ar':infant_ar,
              'type_grad_ar':type_grad_ar,

              '_token':_token,
            }
            console.log(data);
            $.ajax({
                url: '{{ url('/book_airport_h') }}',
                data: data,
                type: 'post',
                success: function (data) {
                  console.log(data);
                  
                  if (data.status =='error1') {
                     alertify.error('Check input error'); 
                  
                 }else if (data.status =='error2') {
                     alertify.error(data.errors); 

                 }else{
                     alertify.success(data.success); 

                 }



                }
            })


  });
});

$(document).ready(function(){
  $("#hote").click(function(){

            var way_name = $('#way_name').val();
            var entry_date = $('#entry_date').val();
            var leave_dat = $('#leave_dat').val();
            var night_numb = $('#night_numb').val();
            var hotel1 = $('#hotel1').val();
            var hotel2 = $('#hotel2').val();

            var num_class = $('#num_class').val();
            var Adult_class = $('#Adult_class').val();
            var child_class = $('#child_class').val();
            var Adult_class2 = $('#Adult_class2').val();
            var child_class2 = $('#child_class2').val();



            var _token = '{{ csrf_token() }}';
            var data={
              'way_name':way_name,
              'entry_date':entry_date,
              'leave_dat':leave_dat,
              'night_numb':night_numb,
              'hotel1':hotel1,
              'hotel2':hotel2,
              'num_class':num_class,
              'Adult_class':Adult_class,
              'child_class':child_class,
              'Adult_class2':Adult_class2,
              'child_class2':child_class2,


              '_token':_token,
            }
            console.log(data);
            $.ajax({
                url: '{{ url('/book_hote') }}',
                data: data,
                type: 'post',
                success: function (data) {
                  console.log(data);
                  
                  if (data.status =='error1') {
                     alertify.error('Check input error'); 
                  
                 }else if (data.status =='error2') {
                     alertify.error(data.errors); 

                 }else{
                     alertify.success(data.success); 

                 }



                }
            })


  });
});

$(document).ready(function(){
  $("#hotel_book").click(function(){

            var way_name = $('#way_name3').val();
            var entry_date = $('#entry_date3').val();
            var leave_dat = $('#leave_dat3').val();
            var night_numb = $('#night_numb3').val();
            var hotel1 = $('#hotel1').val();
            var hotel2 = $('#hotel2').val();

            var num_class4 = $('#num_class4').val();
            var Adult_class4 = $('#Adult_class4').val();
            var child_class4 = $('#child_class4').val();
            var Adult_class3 = $('#Adult_class3').val();
            var child_class3 = $('#child_class3').val();



            var _token = '{{ csrf_token() }}';
            var data={
              'way_name':way_name,
              'entry_date':entry_date,
              'leave_dat':leave_dat,
              'night_numb':night_numb,
              'hotel1':hotel1,
              'hotel2':hotel2,
              'num_class4':num_class4,
              'Adult_class4':Adult_class4,
              'child_class4':child_class4,
              'Adult_class3':Adult_class3,
              'child_class3':child_class3,


              '_token':_token,
            }
            console.log(data);
            $.ajax({
                url: '{{ url('/book_hotel') }}',
                data: data,
                type: 'post',
                success: function (data) {
                  console.log(data);
                  
                  if (data.status =='error1') {
                     alertify.error('Check input error'); 
                  
                 }else if (data.status =='error2') {
                     alertify.error(data.errors); 

                 }else{
                     alertify.success(data.success); 

                 }



                }
            })


  });
});

$(document).ready(function(){
  $("#travel").click(function(){
      var type_grad = $('#type_grad').val();
      if (type_grad){

          var Adult = $('#Adult').val();
          var child = $('#child').val();
          var infant = $('#infant').val();
          var type_grad = $('#type_grad').val();
          var traveller= Number(Adult) + Number(child) + Number(infant);
          document.getElementById("dropdownMenuButton2").value =  traveller +"  "+"مسافر" +" "+","  +type_grad  ;

      }
      else {
          alertify.error("اختار  الدرجه ");

      }


  });
});
 $(document).ready(function(){
   $("#trave").click(function(){
       var type_grad_ar = $('#type_grad_ar').val();
       if(type_grad_ar){

           var Adult_ar = $('#Adult_ar').val();
           var child_ar = $('#child_ar').val();
           var infant_ar = $('#infant_ar').val();
           var type_grad_ar = $('#type_grad_ar').val();
           var travell= Number(Adult_ar) + Number(child_ar) + Number(infant_ar);
           document.getElementById("dropdownMenuButton3").value =  travell +"  "+"مسافر" +" "+","  +type_grad_ar  ;
       }
       else {
           alertify.error("اختار  الدرجه ");

       }


   });
});

 $(document).ready(function(){
   $("#book_room").click(function(){

       var num_class = $('#num_class').val();

          if(num_class){
              var num_class = $('#num_class').val();
              var Adult_class = $('#Adult_class').val();
              var child_class = $('#child_class').val();
              var Adult_class2 = $('#Adult_class2').val();
              var child_class2 = $('#child_class2').val();
              var classs= Number(Adult_class) + Number(child_class) + Number(Adult_class2)+ Number(child_class2);
              document.getElementById("dropdownMenuButton4").value =  num_class +"  "+"غرفة " + " " + ","  +classs+" " +"ضيوف " ;
          }
          else {
              alertify.error("اختار عدد الغرف");

          }


   });
 });

 $(document).ready(function(){
   $("#select_valu").click(function(){
       var num_class4 = $('#num_class4').val();

           if (num_class4){

               var num_class4 = $('#num_class4').val();
               var Adult_class4 = $('#Adult_class4').val();
               var child_class4 = $('#child_class4').val();
               var Adult_class3 = $('#Adult_class3').val();
               var child_class3 = $('#child_class3').val();
               var classs2= Number(Adult_class4) + Number(child_class4) + Number(Adult_class3)+ Number(child_class3);
               document.getElementById("dropdownMenuButton6").value =  num_class4 +"  "+"غرفة " + " " + ","  +classs2+" " +"ضيوف " ;


           }
           else {
               alertify.error("اختار عدد الغرف");

           }


   });
 });
</script>




  <script>

    $(document).ready(function () {

      $('.close-panner').click(function(){
        $('.close-panner').parent().hide(300);
      });
      $(function () {
        $(".checkstatus").click(function () {
          if ($("#flight2").is(":checked")) {
            $("#come").hide();
          } else {
            $("#come").show();
          };
          if ($("#flight3").is(":checked")) {
            $("#multi").show();
          } else {
            $("#multi").hide();
          }
          if ($("#hotel2").is(":checked")) {
            $("#come2").hide();
          } else {
            $("#come2").show();
          };
          if ($("#dates").is(":checked")) {
            $("#multi-dates").show();
          } else {
            $("#multi-dates").hide();
          };
        });
      });

      $('.dropdown-menu').click(function (e) {
        e.stopPropagation();
      });

      // //datepicker
      // $('.datepicker').datepicker();

      // wow
      new WOW().init();
      $('.has-clear input[type="text"]').on('input propertychange', function () {
        var $this = $(this);
        var visible = Boolean($this.val());
        $this.siblings('.form-control-clear').toggleClass('hidden', !visible);
      }).trigger('propertychange');

      $('.form-control-clear').click(function () {
        $(this).siblings('input[type="text"]').val('')
          .trigger('propertychange').focus();
      });

    });
    $(window).scroll(function () {
      var sticky = $('.main-header'),
        scroll = $(window).scrollTop();

      if (scroll >= 1) sticky.addClass('fixed');
      else sticky.removeClass('fixed');
    });


  </script>



