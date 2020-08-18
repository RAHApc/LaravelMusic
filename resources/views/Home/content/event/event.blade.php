@extends('Layout.main')
@section('content')
    @include('Home.header.nav')

    <div class="events_wrapper ms_cover">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="ms_heading_wrapper ms_cover text-center">

                        <h1>رویدادهای آینده</h1>
                    </div>
                </div>
                @foreach($events as $event)
                    <div class="row" style="padding-top: 10px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="prs_ec_ue_left_img_wrapper">
                                <img src="{{asset($event->image_url)}}" alt="event_img" style="height: 453px;">
                            </div>
                            <div class="prs_ec_ue_right_img_wrapper">
                                <div class="prs_feature_img_cont prs_ec_ue_right_img_cont">
                                    <h2>اجرای زنده هنرمند {{$event->name}}</h2>
                                    <div class="prs_ft_small_cont_left">
                                        <p>{{$event->city}}</p>
                                    </div>

                                    <ul>
                                        <li>{{verta($event->dateStart)->format('%d %B %Y')}}</li>
                                        <li>{{$event->timeStartEnd}}</li>
                                    </ul>
                                    <p class="prs_up_pera_sec">{{$event->description}}</p>
                                </div>
                                <event-music :event="{{$event}}"></event-music>
                            </div>
                        </div>
                    </div>
                @endforeach




                {{$events->onEachSide(1)->links()}}
            </div>
        </div>
    </div>
@endsection
{{--@push('js')--}}
{{--    <script>--}}
{{--var dt=document.getElementsByClassName('timedatecal');--}}
{{--for (var i=0;i<dt.length;i++)--}}
{{--{--}}
{{--    console.log(dt[i].getAttribute('data-timedatecal'));--}}
{{--var dtt=dt[0].getAttribute('data-timedatecal');--}}

{{--    caldate(dtt);--}}
{{--}--}}

{{--        // $('.timedatecal').each(function (item) {--}}
{{--            // console.log($($('.timedatecal')[item]).data('timedatecal'));--}}
{{--            // var it=item;--}}
{{--            // for(var i=0;i<=it;i++)--}}
{{--            // {--}}
{{--            // console.log($($('.timedatecal')[item]).index(0));--}}
{{--            //     var dt=$($('.timedatecal')[1]).data('timedatecal');--}}
{{--            //     caldate(dt);--}}
{{--            // }--}}

{{--            // return caldate(dt);--}}
{{--        // });--}}


{{--        // var DT = $('.timedatecal').data('timedatecal');--}}
{{--        // caldate(DT);--}}

{{--        function caldate(DT) {--}}
{{--            var sliderTimer = new Date(DT).getTime();--}}
{{--            var setTimerSlider = setInterval(function () {--}}
{{--                var now = new Date().getTime();--}}
{{--                var cal = sliderTimer - now;--}}

{{--                var days = Math.floor((cal / (1000 * 60 * 60 * 24)));--}}
{{--                var hours = Math.floor((cal % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));--}}
{{--                var minutes = Math.floor((cal % (1000 * 60 * 60)) / (1000 * 60));--}}
{{--                var seconds = Math.floor((cal % (1000 * 60)) / 1000);--}}

{{--                var day = [];--}}
{{--                while (days > 0) {--}}
{{--                    day.unshift(days % 10);--}}
{{--                    days = days / 10 | 0--}}
{{--                }--}}
{{--                if (day[1] == undefined) {--}}
{{--                    var days = Math.floor((cal / (1000 * 60 * 60 * 24)));--}}
{{--                    day[0] = 0;--}}
{{--                    day[1] = days;--}}
{{--                }--}}

{{--                var hour = [];--}}
{{--                while (hours > 0) {--}}
{{--                    hour.unshift(hours % 10);--}}
{{--                    hours = hours / 10 | 0--}}
{{--                }--}}
{{--                if (hour[1] == undefined) {--}}
{{--                    var hours = Math.floor((cal % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));--}}
{{--                    hour[0] = 0;--}}
{{--                    hour[1] = hours;--}}
{{--                }--}}


{{--                var minute = [];--}}
{{--                while (minutes > 0) {--}}
{{--                    minute.unshift(minutes % 10);--}}
{{--                    minutes = minutes / 10 | 0--}}
{{--                }--}}
{{--                if (minute[1] == undefined) {--}}
{{--                    var minutes = Math.floor((cal % (1000 * 60 * 60)) / (1000 * 60));--}}
{{--                    minute[0] = 0;--}}
{{--                    minute[1] = minutes;--}}
{{--                }--}}


{{--                var second = [];--}}
{{--                while (seconds > 0) {--}}
{{--                    second.unshift(seconds % 10);--}}
{{--                    seconds = seconds / 10 | 0--}}
{{--                }--}}
{{--                if (second[1] == undefined) {--}}
{{--                    var seconds = Math.floor((cal % (1000 * 60)) / 1000);--}}
{{--                    second[0] = 0;--}}
{{--                    second[1] = seconds;--}}
{{--                }--}}
{{--                document.getElementById("seconds").innerHTML = second[0] + '' + second[1];--}}
{{--                document.getElementById("minutes").innerHTML = minute[0] + '' + minute[1];--}}
{{--                document.getElementById("hours").innerHTML = hour[0] + '' + hour[1];--}}
{{--                document.getElementById("days").innerHTML = day[0] + '' + day[1];--}}

{{--                if (cal < 0) {--}}
{{--                    clearInterval(setTimerSlider);--}}
{{--                    $('.prs_ec_ue_timer_wrapper').text("زمان به اتمام رسید.");--}}
{{--                    $('.prs_ec_ue_timer_wrapper').css({--}}
{{--                        "color": "#fa5840",--}}
{{--                        "font-size": "30px",--}}
{{--                        "margin": "30% 40% 0 0"--}}
{{--                    });--}}
{{--                    $('.prs_ec_ue_timer_wrapper').css({"filter": "blur(1.5px)"})--}}
{{--                }--}}
{{--            }, 1000);--}}
{{--        }--}}


{{--        // var t = document.getElementById('clockdiv').getAttribute('data-dt');--}}
{{--        //     document.getElementById('timedatecal').click();--}}


{{--    </script>--}}
{{--@endpush--}}
