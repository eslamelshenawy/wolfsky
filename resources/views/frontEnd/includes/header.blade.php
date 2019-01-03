<header class="main-header">
    <div class="top_bg_gradient"></div>
    <div class="clearfix"></div>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
                     @if(empty($social))

                     @else

                   @foreach($social as $social_med)
              @if( trans('backLang.boxCode') == 'ar')
             <a class="navbar-brand" href="{{url('/')}}">
              <img src="{{url('/')}}/uploads/settings/{{$social_med->style_logo_ar}}" alt=""></a>
              @else
              <a class="navbar-brand" href="{{url('/')}}">
                 <img src="{{url('/')}}/uploads/settings/{{$social_med->style_logo_en}}" alt=""></a>
              @endif

                          @endforeach
              @endif

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item active"> <a class="nav-link" href="#">{{ trans('backLang.air_book') }} </a></li>
            <li class="nav-item"> <a class="nav-link" href="#"> {{ trans('backLang.h_book') }}</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#"> {{ trans('backLang.F_h') }}</a></li>
            @if($user = Auth::user())

            <li class="nav-item"> <a class="nav-link" href="{{url('books')}}">  {{ trans('backLang.we_reserv') }}</a> </li>


            @else

            @endif



            <li class="nav-item">

                        &nbsp; | &nbsp;
                        <strong>
                            @if(App::getLocale()=="ar")
                                <a href="{{ URL::to('lang/en') }}"><i
                                            class="fa fa-language "></i> {{ str_replace("[ ","",str_replace(" ]","",strip_tags(trans('backLang.englishBox')))) }}
                                </a>
                            @else
                                <a href="{{ URL::to('lang/ar') }}"><i
                                            class="fa fa-language "></i> {{ str_replace("[ ","",str_replace(" ]","",strip_tags(trans('backLang.arabicBox')))) }}
                                </a>
                            @endif

                        </strong>





            </a> </li>
          </ul>
           @if($user = Auth::user())
          <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown open">
                <a class="nav-link clear" href="" data-toggle="dropdown" aria-expanded="true">
                  <span class="avatar">
                    <!-- <img src="{{ URL::to('public/uploads/users/'.$user->photo) }}" alt="user" title="user" class="img-thumbnail user-avatar"> -->
                      {{$user->name }}
                  </span>
                </a>
                <div class="dropdown-menu pull-right dropdown-menu-scale">
                    <a class="dropdown-item" href="{{url('books')}}"><span>{{ trans('backLang.we_reserv') }}</span></a>
                                        <div class="dropdown-divider"></div>
                    <a  class="dropdown-item" href="{{ url('/logout') }}">{{ trans('backLang.logout') }}</a>
                </div>
            </li>


        </ul>
          @endif

            @if($user = Auth::user())

            @else
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">  <a class="nav-link" href="#" data-toggle="modal" data-target=".login-register-form"><i class="flaticon-user"></i> {{ trans('backLang.login') }}</a></li>
          </ul>
            @endif

        </div>
      </div>
    </nav>
  </header>
