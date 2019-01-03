<meta charset="utf-8">
@if(empty($PageTitle))

@else

<title>{{$PageTitle}} {{($PageTitle !="")? "|":""}} {{ Helper::GeneralSiteSettings("site_title_" . trans('backLang.boxCode')) }}</title>
@endif
@if(empty($PageDescription))
@else

<meta name="description" content="{{$PageDescription}}"/>
@endif
@if(empty($PageDescription))
@else

<meta name="keywords" content="{{$PageKeywords}}"/>
@endif
<meta name="author" content="{{ URL::to('') }}"/>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <!-- Bootstrap core CSS -->
  <link href="{{url('public')}}/frontEnd/new/css/bootstrap.css" rel="stylesheet">
  <link href="{{url('public')}}/frontEnd/new/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{url('public')}}/frontEnd/new/css/flaticon.css" rel="stylesheet">
  <link rel="stylesheet" href="{{url('public')}}/frontEnd/new/css/animate.css" />
  <link rel="stylesheet" href="{{url('public')}}/frontEnd/new/css/bootstrap-datepicker.css" />
  <link href="{{url('public')}}/frontEnd/new/css/rs-settings.css" rel="stylesheet">
  <!-- Custom styles for this site -->
  <link href="{{url('public')}}/frontEnd/new/css/style.css" rel="stylesheet">

@if( trans('backLang.direction')=="rtl")
<!-- <link href="{{ URL::to('frontEnd/css/rtl.css') }}" rel="stylesheet"/> -->

@endif

<!-- Favicon and Touch Icons -->
@if(Helper::GeneralSiteSettings("style_fav") !="")
    <link href="{{ URL::to('public/uploads/settings/'.Helper::GeneralSiteSettings("style_fav")) }}" rel="shortcut icon"
          type="image/png">
@else
    <link href="{{ URL::to('public/uploads/settings/nofav.png') }}" rel="shortcut icon" type="image/png">
@endif
@if(Helper::GeneralSiteSettings("style_apple") !="")
    <link href="{{ URL::to('public/uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon">
    <link href="{{ URL::to('public/uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon"
          sizes="72x72">
    <link href="{{ URL::to('public/uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon"
          sizes="114x114">
    <link href="{{ URL::to('public/uploads/settings/'.Helper::GeneralSiteSettings("style_apple")) }}" rel="apple-touch-icon"
          sizes="144x144">
@else
    <link href="{{ URL::to('public/uploads/settings/nofav.png') }}" rel="apple-touch-icon">
    <link href="{{ URL::to('public/uploads/settings/nofav.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ URL::to('public/uploads/settings/nofav.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ URL::to('public/uploads/settings/nofav.png') }}" rel="apple-touch-icon" sizes="144x144">
@endif
