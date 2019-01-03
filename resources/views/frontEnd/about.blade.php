@extends('frontEnd.layout')


<div class="page-title pb-0">
    <div class="container">
        <div class="container">
            @foreach($about as  $about_site)
                <div class="row">
                    <div class="col-md-5">
                        <div class="video-wrapper pt-5 pb-5">
                            <div class="video-wrapper-title">
                                <h5 class="sub-title">  {{ trans('backLang.we_us') }}   wolf sky  {{ trans('backLang.about_wolf') }} </h5>
                                <h2 class="title">{{ trans('backLang.know_us') }}</h2>
                                @if( trans('backLang.boxCode') == 'ar')
                                    <div class="text">{{strip_tags($about_site->details_ar)}}</div>
                                @else
                                    <div class="text">{{strip_tags($about_site->details_en)}}</div>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="video-thumbnail">
                            <div class="video-bg"><img src="{{url('/')}}/uploads/topics/{{$about_site->photo_file}}" alt="" class="img-fluid"></div>
                            <div class="video-button-play"><i class="icons fa fa-play"></i></div>
                            <div class="video-button-close"></div>
                            <iframe src="{{$about_site->video_file}}" allowfullscreen="allowfullscreen" class="video-embed"></iframe>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>



    </div>
</div>
