@extends('masters.masterHome')
@section('part1')
<div id="fh5co-title-box" style="background-image: url({{asset($singleNews->img)}}); background-position: 50% 0.5px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="page-title">
        <span>{{$singleNews->created_at}}</span>
        <h2>{{$singleNews->titrnews}}</h2>
    </div>
</div>
@endsection

@section('part2')
    <div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                    <p>{{$singleNews->textnews}}</p>
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
                                <a href="\news\{{$item->news_id}}">
                                <div class="most_fh5co_treding_font">{{($item->titrnews)}}</div>
                                </a>
                                <div class="most_fh5co_treding_font_123">{{($item->created_at)}}</div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection

@section('part3')
<div class="container">
    <div class="row">
        <div class="panel panel-default widget">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-comment"></span>
                <h3 class="panel-title">
                    Recent Comments</h3>
                <span class="label label-info">
                {{$countComments->count()}}</span>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    @foreach ($comments as $item)
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-2 col-md-1">
                                    <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                                <div class="col-xs-10 col-md-11">
                                    <div>
                                        <a href="#">{{$item->name }}</a>
                                        <div class="mic-info">
                                            {{$item->created_at_comments}}
                                        </div>
                                    </div>
                                    <div class="comment-text">
                                            {{$item->comment}}
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
                {{$comments->links()}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('part4')
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            @foreach ($trending as $item)
                <div class="item px-2">
                    <div class="fh5co_hover_news_img">
                    <div class="fh5co_news_img"><img src="{{asset($item->img)}}" alt="{{$item->titrnews}}"/></div>
                        <div>
                            <a href="\news\{{$item->news_id}}" class="d-block fh5co_small_post_heading"><span class="">{{$item->titrnews}}</span></a>
                            <div class="c_g"><i class="fa fa-clock-o"></i>{{$item->created_at}}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
