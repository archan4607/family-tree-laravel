@if($data->user_status==2)
@extends('layouts.simple.master')
@section('title', 'User Cards')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Your Relations</h3>
@endsection

@section('breadcrumb-items')
    {{-- <li class="breadcrumb-item">Users</li> --}}
    <li class="breadcrumb-item active">View Relations</li>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            @if(count($rel)>0)
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
            {!!'<h1 class="text-center text-danger">No relation found</h1>'!!}
            @endif
        </div>
    </div>
@endsection

@section('script')

@endsection
@elseif ($data->user_status == 1)
    <script>
        window.location.href = "{{ route('add-relation') }}";
    </script>
@elseif ($data->user_status == 0)
    <script>
        window.location.href = "{{ route('detail-register') }}";
    </script>
@else
    <script>
        window.location.href = "{{ route('/') }}";
    </script>
@endif
