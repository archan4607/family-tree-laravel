@extends('layouts.simple.master')
@section('title', 'User Profile')

@section('css')
    
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/photoswipe.css') }}">
@endsection

@section('breadcrumb-title')
    <h3>User Profile</h3>
@endsection

@section('breadcrumb-items')
    {{-- <li class="breadcrumb-item">Users</li> --}}
    <li class="breadcrumb-item active">User Profile</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="user-profile">
            <div class="row">
                <!-- user profile first-style start-->
                <div class="col-sm-12">
                    <div class="card hovercard text-center">
                        <div class="cardheader"></div>
                        <div class="user-image">
                            <div class="avatar"><img alt="" src="{{ asset('assets/images/user/7.jpg') }}"></div>
                            <div class="icon-wrapper"><a href="{{route('edit-user-profile')}}"><i class="icofont icofont-pencil-alt-5"></i></a></div>
                        </div>
                        <div class="info">
                            <div class="row">
                                <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h6><i class="fa fa-envelope"></i>   Email</h6>
                                                <span>
                                                    @if ($data->email1=="")
                                                    {{'---'}}
                                                    @else
                                                    {{$data->email}}
                                                    @endif
                                                </span>
                                                        
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h6><i class="fa fa-calendar"></i>   BOD</h6><span>
                                                @if ($data->dob=="")
                                                    {{'---'}}
                                                @else
                                                    {{$data->dob}}
                                                @endif
                                            </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1">
                                    <div class="user-designation">
                                        <div class="title"><a target="_blank" href="">
                                        @if ($data->fname=="")
                                            {{'---'}}
                                        @elseif ($data->lname=="")
                                            {{'---'}}
                                        @else
                                            {{$data->fname." ".$data->lname}}
                                        @endif</a></div>
                                        <div class="desc">@if ($data->role==1)
                                            {{'USER'}}
                                        @else
                                            {{'---'}}
                                        @endif</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h6><i class="fa fa-phone"></i>   Contact Us</h6><span>India +91
                                                    {{$data->mobile}}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="ttl-info text-start">
                                                <h6><i class="fa fa-location-arrow"></i>   Location</h6><span>B69 Near
                                                    Schoool Demo Home</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="social-media">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/" target="_blank"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="https://accounts.google.com/" target="_blank"><i
                                                class="fa fa-google-plus"></i></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/" target="_blank"><i
                                                class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/" target="_blank"><i
                                                class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="https://rss.app/" target="_blank"><i
                                                class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                            <div class="follow">
                                <div class="row">
                                    <div class="col-6 text-md-end border-right">
                                        <div class="follow-num counter">25869</div><span>Follower</span>
                                    </div>
                                    <div class="col-6 text-md-start">
                                        <div class="follow-num counter">659887</div><span>Following</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- user profile first-style end-->
                <!-- user profile second-style start-->
                @php
                    $datetime=$data->updated_at;
                    $now = \Carbon\Carbon::now();
                    $datetime = \Carbon\Carbon::parse($datetime);

                    $diffInSeconds = $now->diffInSeconds($datetime);
                    
                    if ($diffInSeconds < 60) {
                        $timeAgo = $diffInSeconds . ' seconds ago';
                    } elseif ($diffInSeconds < 3600) {
                        $diffInMinutes = floor($diffInSeconds / 60);
                        $timeAgo = $diffInMinutes . ' minutes ago';
                    } elseif ($diffInSeconds < 86400) {
                        $diffInHours = floor($diffInSeconds / 3600);
                        $timeAgo = $diffInHours . ' hours ago';
                    } elseif ($diffInSeconds < 604800) {
                        $diffInDays = floor($diffInSeconds / 86400);
                        $timeAgo = $diffInDays . ' days ago';
                    } elseif ($diffInSeconds < 2419200) {
                        $diffInWeeks = floor($diffInSeconds / 604800);
                        $timeAgo = $diffInWeeks . ' weeks ago';
                    } elseif ($diffInSeconds < 29030400) {
                        $diffInMonths = floor($diffInSeconds / 2419200);
                        $timeAgo = $diffInMonths . ' months ago';
                    } else {
                        $diffInYears = floor($diffInSeconds / 29030400);
                        $timeAgo = $diffInYears . ' years ago';
                    }
                @endphp
                <div class="col-sm-12">
                    <div class="card">
                        <div class="profile-img-style">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="media"><img class="img-thumbnail rounded-circle me-3"
                                            src="{{ asset('assets/images/user/7.jpg') }}" alt="Generic placeholder image">
                                        <div class="media-body align-self-center">
                                            <h5 class="mt-0 user-name">{{$data->fname." ".$data->lname}}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 align-self-center">
                                    <div class="float-sm-end"><small>{{ $timeAgo }}</small></div>
                                    
                                </div>
                            </div>
                            <hr>
                            {{-- <h3>Relations</h3> --}}
                            <div class="row">
                                @isset($rel)
                                
                                @foreach ($rel as $rel)
                                <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                                    <div class="card social-profile">
                                        <div class="card-body">
                                            <div class="social-img-wrap">
                                                <div class="social-img"><img  src="{{ asset('assets/images/user/7.jpg') }}" alt="profile"></div>
                                                <div class="edit-icon">
                                                    <svg>
                                                        <use href="{{ asset('assets/svg/icon-sprite.svg#profile-check') }}"></use>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="social-details">
                                                <h5 class="mb-1"><a href="#">{{$rel->fname.' '.$rel->lname}}</a></h5><span class="f-light fs-5">
                                                    @if($rel->relation==1)
                                                        {{'Father'}}
                                                    @elseif($rel->relation==2)
                                                        {{'Mother'}}
                                                    @elseif($rel->relation==3)
                                                        {{'Brother'}}
                                                    @elseif($rel->relation==4)
                                                        {{'Sister'}}
                                                    @elseif($rel->relation==5)
                                                        {{'Husband'}}
                                                    @elseif($rel->relation==6)
                                                        {{'Wife'}}
                                                    @elseif($rel->relation==7)
                                                        {{'Son'}}
                                                    @elseif($rel->relation==8)
                                                        {{'Daughter'}}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                    <h4 class="text-center">No Relation Found</h4>    
                                @endisset   
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('assets/js/photoswipe/photoswipe.js') }}"></script>
@endsection
