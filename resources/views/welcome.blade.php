@extends('masters.masterHome')

@section('part1')
    <!-- **********************************  Slideshow -->
    <div class="container-fluid paddding mb-5">
        <div class="row mx-0">
                <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
                @if(isset($header))
                    <?php $sw=false; ?>
                    @foreach($header as $item)
                        @if($sw==false)
                            <?php $sw=true; ?>
                            <div class="fh5co_suceefh5co_height">
                                <img src="{{asset($item->img)}}" alt="img"/>
                                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                                <div class="fh5co_suceefh5co_height_position_absolute_font">
                                    <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{$item->created_at}}
                                    </a></div>
                                    <div class=""><a href="/news/{{$item->id_news}}" class="fh5co_good_font">{{$item->titrnews}}</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                        @else
                            <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                                <div class="fh5co_suceefh5co_height_2"><img src="{{asset($item->img)}}" alt="img"/>
                                    <div class="fh5co_suceefh5co_height_position_absolute"></div>
                                    <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                        <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{$item->created_at}}</a></div>
                                        <div class=""><a href="/news/{{$item->id_news}}" class="fh5co_good_font_2">{{$item->titrnews}}</a></div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
                    </div>
                </div>
        </div>
    </div>
<!-- ********************************** End Slideshow -->
@endsection


@section('part2')
<!-- *************************** Tranding -->
<div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1">
            @foreach ($trending as $item)
                <div class="item px-2">
                    <div class="fh5co_latest_trading_img_position_relative">
                        <div class="fh5co_latest_trading_img"><img src="{{asset($item->img)}}" alt="" class="fh5co_img_special_relative"/></div>
                        <div class="fh5co_latest_trading_img_position_absolute"></div>
                        <div class="fh5co_latest_trading_img_position_absolute_1">
                            <a href="\news\{{$item->id_news}}" class="text-white">{{$item->titrnews}}</a>
                            <div class="fh5co_latest_trading_date_and_name_color">{{$item->create_at}}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- ********************** End Trending -->
@endsection

@section('part3')
    <div class="container-fluid pb-4 pt-5">
        <div class="container animate-box">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
            </div>
            <div class="owl-carousel owl-theme" id="slider2">
                @foreach ($partNews as $item)
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="{{asset($item->img)}}" alt=""/></div>
                            <div>
                                <a href="\news\{{$item->id_news}}" class="d-block fh5co_small_post_heading"><span class="">{{$item->titrnews}}</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i>{{$item->created_at}}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

<!-- ************ Videos ************ -->
@section('part4')
    <div class="container-fluid fh5co_video_news_bg pb-4">
        <div class="container animate-box" data-animate-effect="fadeIn">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4  text-white">Video News</div>
            </div>
            <div>
                <div class="owl-carousel owl-theme" id="slider3">
                    @foreach ($videos as $item)
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_hover_news_img_video_tag_position_relative">
                                <div class="fh5co_news_img">
                                    <iframe id="video" width="100%" height="200"
                                            src="{{$item->video}}"
                                            frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide">
                                    <img src="{{$item->img}}" alt=""/>
                                </div>
                                <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide" id="play-video">
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                            <span><i class="fa fa-play"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                <span class="">{{$item->titrnews}}</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> {{$item->created_at}}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('part5')
<div class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
                </div>
                    @if (!empty($news))
                       @foreach ($news as $item)
                            <div class="row pb-4">
                                <div class="col-md-5">
                                    <div class="fh5co_hover_news_img">
                                        <div class="fh5co_news_img"><img src="{{asset($item->img)}}" alt=""/></div>
                                        <div></div>
                                    </div>
                                </div>
                                <div class="col-md-7 animate-box">

                                    <a href="/news/{{$item->id_news}}" class="fh5co_magna py-2">{{$item->titrnews}}</a> <a href="\news\{{$item->id_news}}" class="fh5co_mini_time py-3"> {{$item->name}} -
                                    {{$item->created_at}}</a>
                                    <div class="fh5co_consectetur">
                                        {{$item->summary}}
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    @endif
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    <a href="#" class="fh5co_tagg">Business</a>
                    <a href="#" class="fh5co_tagg">Technology</a>
                    <a href="#" class="fh5co_tagg">Sport</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                    <a href="#" class="fh5co_tagg">Photography</a>
                    <a href="#" class="fh5co_tagg">Lifestyle</a>
                    <a href="#" class="fh5co_tagg">Art</a>
                    <a href="#" class="fh5co_tagg">Education</a>
                    <a href="#" class="fh5co_tagg">Social</a>
                    <a href="#" class="fh5co_tagg">Three</a>
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
                </div>
                @foreach ($mostPopular as $item)
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <img src="{{asset($item->img)}}" alt="img" class="fh5co_most_trading"/>
                        </div>
                        <div class="col-7 paddding">
                            <a href="\news\{{$item->id_news}}">
                                <div class="most_fh5co_treding_font">{{$item->titrnews}}</div>
                            </a>
                            <div class="most_fh5co_treding_font_123">{{$item->created_at}}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
            <div class="col-12 text-center pb-4 pt-4">
                {{$news->links()}}

                <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Previous</a>
                <a href="#" class="btn_pagging">1</a>
                <a href="#" class="btn_pagging">2</a>
                <a href="#" class="btn_pagging">3</a>
                <a href="#" class="btn_pagging">...</a>
                <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
             </div>
        </div>
    </div>
</div>
@endsection


