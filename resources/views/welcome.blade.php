@extends('layouts.app')

@section('content')

    <!-- Updates from Subscriptions -->
    <div class="content-block">
        <div class="cb-header">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" style="color:#b7135d;" href="#home"><i class="fa fa-scissors"></i> Randevu Ara</a></li>
                        <li class=""><a data-toggle="tab" href="#fitnes">Fitness Salonları (yakında)</a></li>

                    </ul>

                    <div class="tab-content" style="border:1px solid #ddd;border-top:0;padding:10px;background: #fff">
                        <div id="home" class="tab-pane fade in active">
                            <form action="/randevu-ara" style="margin-top: 10px" onsubmit="return false">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-4">
                                            <input type="text" id="randevu_sehir" name="salonadi" class="form-control" placeholder="Bir şehir yazınız..." style="height: 36px">
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-green btn-block">Ara</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="fitnes" class="tab-pane fade in">Pek Yakında</div>

                    </div>
                </div>
                <div class="col-lg-10 col-sm-10 col-xs-10">
                    <ul class="list-inline">
                        <li><a href="index.html#">Updates from Subscriptions</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-2 col-xs-2">
                    <div class="btn-group pull-right bg-clean">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="index.html#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="cb-content avatars">
            <div class="row">
                <div class="col-lg-1 col-sm-2 col-xs-4"><a href="index.html#"><img src="images/ava2.png" alt=""><div class="note">1</div></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-4"><a href="index.html#"><img src="images/ava3.png" alt=""><div class="note">03</div></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-4"><a href="index.html#"><img src="images/ava4.png" alt=""><div class="note">10</div></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-4"><a href="index.html#"><img src="images/ava5.png" alt=""><div class="note">56</div></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-4"><a href="index.html#"><img src="images/ava6.png" alt=""><div class="note">6</div></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-4"><a href="index.html#"><img src="images/ava7.png" alt=""><div class="note">25</div></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-4"><a href="index.html#"><img src="images/ava8.png" alt=""><div class="note">23</div></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-4"><a href="index.html#"><img src="images/ava9.png" alt=""><div class="note">16</div></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-4"><a href="index.html#"><img src="images/ava10.png" alt=""><div class="note">3</div></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-4"><a href="index.html#"><img src="images/ava11.png" alt=""><div class="note">6</div></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-4"><a href="index.html#"><img src="images/ava12.png" alt=""><div class="note">98</div></a></div>
                <div class="col-lg-1 col-sm-2 col-xs-4"><a href="index.html#"><img src="images/ava1.png" alt=""><div class="note">125</div></a></div>
            </div>
        </div>
    </div>
    <!-- /Updates from Subscriptions -->

    <!-- Featured Videos -->
    <div class="content-block head-div">
        <div class="cb-header">
            <div class="row">
                <div class="col-lg-10 col-sm-10 col-xs-8">
                    <ul class="list-inline">
                        <li><a href="index.html#" class="color-active">Featured Videos</a></li>
                        <li><a href="index.html#">New Videos</a></li>
                        <li><a href="index.html#">Recommended For You</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-2 col-xs-4">
                    <div class="btn-group pull-right bg-clean">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sort by <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="index.html#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="cb-content videolist">
            <div class="row">


                <div class="col-lg-3 col-sm-6 videoitem">
                    <div class="b-video last-row">
                        <div class="v-img">
                            <a href="index.html#">
                                <img src="images/video1-6.png" alt="">
                                <div class="watched-mask"></div>
                                <div class="watched">WATCHED</div>
                                <div class="time">7:27</div>
                            </a>
                        </div>
                        <div class="v-desc">
                            <a href="index.html#">Amazon Blocking VIDEO GAMES for Non-Prime...</a>
                        </div>
                        <div class="v-views">
                            185,525 views. <span class="v-percent"><span class="v-circle"></span> 93%</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 videoitem">
                    <div class="b-video last-row">
                        <div class="v-img">
                            <a href="index.html#"><img src="images/video1-7.png" alt=""></a>
                            <div class="time">12:58</div>
                        </div>
                        <div class="v-desc">
                            <a href="index.html#">Amazing Facts About Nebulas Inside Deep Universe</a>
                        </div>
                        <div class="v-views">
                            203,741 views. <span class="v-percent"><span class="v-circle"></span> 95%</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 videoitem">
                    <div class="b-video last-row">
                        <div class="v-img">
                            <a href="index.html#"><img src="images/video1-8.png" alt=""></a>
                            <div class="time">9:47</div>
                        </div>
                        <div class="v-desc">
                            <a href="index.html#">Cornfield Chase - Outlast II Official Gameplay</a>
                        </div>
                        <div class="v-views">
                            202,513 views. <span class="v-percent"><span class="v-circle"></span> 84%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Featured Videos -->

    <!-- New Videos in India -->
    <div class="content-block head-div">
        <div class="cb-header">
            <div class="row">
                <div class="col-lg-10 col-sm-10 col-xs-8">
                    <ul class="list-inline">
                        <li><a href="index.html#" class="color-active">New Videos in India</a></li>
                        <li><a href="index.html#">Most Viewed</a></li>
                        <li><a href="index.html#">Featured This Week</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-2 col-xs-4">
                    <div class="btn-group pull-right bg-clean">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sort by <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="index.html#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="cb-content videolist">

            <div class="row">




                <div class="col-lg-3 col-sm-6 videoitem">
                    <div class="b-video last-row">
                        <div class="v-img">
                            <a href="index.html#"><img src="images/video2-5.png" alt=""></a>
                            <div class="time">1:23:57</div>
                        </div>
                        <div class="v-desc">
                            <a href="index.html#">Mirror's Edge Catalyst Beta: PS4 vs Xbox One Frame-Rate... </a>
                        </div>
                        <div class="v-views">
                            519,130 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 videoitem">
                    <div class="b-video last-row">
                        <div class="v-img">
                            <a href="index.html#"><img src="images/video2-6.png" alt=""></a>
                            <div class="time">8:27</div>
                        </div>
                        <div class="v-desc">
                            <a href="index.html#">THE MAGNIFICENT SEVEN - Teaser Trailer (HD)</a>
                        </div>
                        <div class="v-views">
                            15,525 views. <span class="v-percent"><span class="v-circle"></span> 93%</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 videoitem">
                    <div class="b-video last-row">
                        <div class="v-img">
                            <a href="index.html#"><img src="images/video2-7.png" alt=""></a>
                            <div class="time">6:58</div>
                        </div>
                        <div class="v-desc">
                            <a href="index.html#">Game of Thrones Season 6: Event Promo (HBO)</a>
                        </div>
                        <div class="v-views">
                            43,741 views. <span class="v-percent"><span class="v-circle"></span> 95%</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 videoitem">
                    <div class="b-video last-row">
                        <div class="v-img">
                            <a href="index.html#"><img src="images/video2-8.png" alt=""></a>
                            <div class="time">5:47</div>
                        </div>
                        <div class="v-desc">
                            <a href="index.html#">CHAPPIE Movie – Die Antwoord Featurette...</a>
                        </div>
                        <div class="v-views">
                            3,202,513 views. <span class="v-percent"><span class="v-circle"></span> 84%</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /New Videos in India -->

    <!-- Popular Playlists -->
    <div class="content-block head-div">
        <div class="cb-header">
            <div class="row">
                <div class="col-lg-10 col-sm-10 col-xs-8">
                    <ul class="list-inline">
                        <li><a href="index.html#" class="color-active">Popular Playlists</a></li>
                        <li><a href="index.html#">Recently Featured</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-2 col-xs-4">
                    <div class="btn-group pull-right bg-clean">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sort by  <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="index.html#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="cb-content">
            <div class="row">

                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="b-playlist">
                        <div class="v-img">
                            <img src="images/video1-1.png" alt="" class="l-1" />
                            <img src="images/video1-2.png" alt="" class="l-2" />
                            <a href="index.html#"><img src="images/playlist-1.png" alt="" class="l-3" /></a>
                            <div class="items">20</div>
                        </div>
                        <div class="v-desc">
                            <a href="index.html#">There Can Only Be One! Introducing Tanc & Hercules</a>
                        </div>
                        <div class="v-views">
                            127,548 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="b-playlist">
                        <div class="v-img">
                            <img src="images/video2-1.png" alt="" class="l-1" />
                            <img src="images/video2-2.png" alt="" class="l-2" />
                            <a href="index.html#"><img src="images/playlist-2.png" alt="" class="l-3"></a>
                            <div class="items">15</div>
                        </div>
                        <div class="v-desc">
                            <a href="index.html#">Pokémon 3: The Movie - Spell Of The Unown: Entei HD...</a>
                        </div>
                        <div class="v-views">
                            18,241,542 views. <span class="v-percent"><span class="v-circle"></span> 93%</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="b-playlist">
                        <div class="v-img">
                            <img src="images/video2-6.png" alt="" class="l-1" />
                            <img src="images/video2-4.png" alt="" class="l-2" />
                            <a href="index.html#"><img src="images/playlist-3.png" alt="" class="l-3" ></a>
                            <div class="items">7</div>
                        </div>
                        <div class="v-desc">
                            <a href="index.html#">Bullet Trains and Octopus Balls in South Korea</a>
                        </div>
                        <div class="v-views">
                            729,347 views . <span class="v-percent"><span class="v-circle"></span> 95%</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="b-playlist">
                        <div class="v-img">
                            <img src="images/video1-6.png" alt="" class="l-1" />
                            <img src="images/video1-4.png" alt="" class="l-2" />
                            <a href="index.html#"><img src="images/playlist-4.png" alt="" class="l-3"></a>
                            <div class="items">27</div>
                        </div>
                        <div class="v-desc">
                            <a href="index.html#">Top 10 NEW 3DS Games Of 2016 that blew our mind</a>
                        </div>
                        <div class="v-views">
                            79,239,852 views. <span class="v-percent"><span class="v-circle"></span> 84%</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /Popular Playlists -->

    <!-- Popular Channels -->
    <div class="content-block head-div">
        <div class="cb-header">
            <div class="row">
                <div class="col-lg-10 col-sm-10 col-xs-8">
                    <ul class="list-inline">
                        <li><a href="index.html#">Popular Channels</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-2 col-xs-4">
                    <div class="btn-group pull-right bg-clean">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="index.html#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                            <li><a href="index.html#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="cb-content">
            <div class="row">
                <div class="col-lg-2 col-sm-4 col-xs-6">
                    <div class="b-chanel">
                        <a href="index.html#">
                            <img src="images/chanel-1.png" alt="">
                            <div class="hover">Ray Simpson<br><i class="cv cvicon-cv-liked"></i> 5K</div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2  col-sm-4 col-xs-6">
                    <div class="b-chanel">
                        <a href="index.html#">
                            <img src="images/chanel-2.png" alt="">
                            <div class="hover">Ray<br><i class="cv cvicon-cv-liked"></i> 215K</div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2  col-sm-4 col-xs-6">
                    <div class="b-chanel">
                        <a href="index.html#">
                            <img src="images/chanel-3.png" alt="">
                            <div class="hover">Simpson<br><i class="cv cvicon-cv-liked"></i> 21</div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-xs-6">
                    <div class="b-chanel">
                        <a href="index.html#">
                            <img src="images/chanel-4.png" alt="">
                            <div class="hover">Ray Simpson<br><i class="cv cvicon-cv-liked"></i> 134</div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-xs-6">
                    <div class="b-chanel">
                        <a href="index.html#">
                            <img src="images/chanel-5.png" alt="">
                            <div class="hover">Simpson<br><i class="cv cvicon-cv-liked"></i> 1.6M</div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-4 col-xs-6">
                    <div class="b-chanel">
                        <a href="index.html#">
                            <img src="images/chanel-6.png" alt="">
                            <div class="hover">Ray<br><i class="cv cvicon-cv-liked"></i> 265K</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Popular Channels -->

    <!-- pagination -->
    <div class="v-pagination">
        <ul class="list-inline">
            <li><a href="index.html#">
                    <div class="pages"><i class="cv cvicon-cv-previous"></i></div>
                </a></li>
            <li><a href="index.html#">
                    <div class="pages">1</div>
                </a></li>
            <li><a href="index.html#">
                    <div class="pages">2</div>
                </a></li>
            <li><a href="index.html#">
                    <div class="pages active">3</div>
                </a></li>
            <li><a href="index.html#">
                    <div class="pages">4</div>
                </a></li>
            <li><a href="index.html#">
                    <div class="pages">5</div>
                </a></li>
            <li><a href="index.html#">
                    <div class="pages">...</div>
                </a></li>
            <li><a href="index.html#">
                    <div class="pages">10</div>
                </a></li>
            <li><a href="index.html#">
                    <div class="pages"><i class="cv cvicon-cv-next"></i></div>
                </a></li>
        </ul>
    </div>
    <!-- /pagination -->

    <script>
        var options = {

            url: "{{URL::to('/')}}/api/getCity",

            getValue: "baslik",

            list: {
                match: {
                    enabled: true
                },
                onClickEvent: function() {

                },
                onKeyEnterEvent:function () {
                    var value = $("#randevu_sehir").getSelectedItemData().id;
                    if(value<9) value="0"+value;
                    window.location.href = 'randevu-ara/'+value;

                }
            },

            theme: "square"
        };
        $("#randevu_sehir").easyAutocomplete(options);
    </script>
@endsection
