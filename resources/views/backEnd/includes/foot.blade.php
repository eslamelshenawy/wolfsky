<script type="text/javascript">
    var public_lang = "{{ trans('backLang.calendarLanguage') }}"; // this is a public var used in app.html.js to define path to js files
    var public_folder_path = "{{ URL::to('') }}"; // this is a public var used in app.html.js to define path to js files
</script>
<script src="{{ URL::to('public/backEnd/scripts/app.html.js') }}"></script>
{!! Helper::SaveVisitorInfo("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]") !!}
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>

<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.rtl.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.rtl.min.css"/>



<script type="text/javascript">
	$("#agree_air").click(function(){
     // alert("The paragraph was clicked.");
     var id =$('#air_id').val();
     var _token = '{{ csrf_token() }}';
     var data ={
        'id':id,
        '_token':_token,
     }
     console.log(id); 

           $.ajax({
                url: '{{ url('/agree') }}'+'/'+id,
                data: data,
                type: 'post',
                success: function (data) {
                      console.log(data); 

                   
                     alertify.success(data.success); 
                   location.reload();


                }
            });

   });

	$("#refuse_air").click(function(){
     // alert("The paragraph was clicked.");
     var id =$('#air_id').val();
     var _token = '{{ csrf_token() }}';
     var data ={
     	'id':id,
     	'_token':_token,
     }
     console.log(id); 

           $.ajax({
                url: '{{ url('/not/agree') }}'+'/'+id,
                data: data,
                type: 'post',
                success: function (data) {
                      console.log(data); 

                     alertify.error(data.success); 
                    location.reload();


                }
            });

   });




</script>

<script type="text/javascript">
        $("#agree_hotel").click(function(){
     // alert("The paragraph was clicked.");
     var id =$('#hotel_id').val();
     var _token = '{{ csrf_token() }}';
     var data ={
        'id':id,
        '_token':_token,
     }
     console.log(id); 

           $.ajax({
                url: '{{ url('/agree/hotel') }}'+'/'+id,
                data: data,
                type: 'post',
                success: function (data) {
                      console.log(data); 

                   
                     alertify.success(data.success); 
                   location.reload();


                }
            });

   });

    $("#refuse_hotel").click(function(){
     // alert("The paragraph was clicked.");
     var id =$('#hotel_id').val();
     var _token = '{{ csrf_token() }}';
     var data ={
        'id':id,
        '_token':_token,
     }
     console.log(id); 

           $.ajax({
                url: '{{ url('/not/agree/hotel') }}'+'/'+id,
                data: data,
                type: 'post',
                success: function (data) {
                      console.log(data); 

                   
                     alertify.error(data.success); 
                   location.reload();


                }
            });

   });


</script>