@if ($data->user_status == 0)
@extends('layouts.simple.master')
@section('title', 'Sample Page')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Registration Page</h3>
@endsection

@section('breadcrumb-items')
{{-- <li class="breadcrumb-item">Pages</li> --}}
<li class="breadcrumb-item active">Registration Page</li>
@endsection

@section('content')
@if (session()->has('user'))
@if($data->user_status==1)
<div class="alert alert-success dark" role="alert">
   <h1>Your details are under review.</h1>
</div>
@elseif($data->user_status==2)
<div class="alert alert-primary dark" role="alert">
   <h5>Your details has been verified</h5>
</div>
@else
<div class="container-fluid">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header">
               <h5>Personal Details </h5>
            </div>
            
                
            <div class="card-body">
               <form class="needs-validation" method="POST" action="{{url('/detail-register')}}" novalidate="">
                  @csrf
                  <div class="row g-3">
                     <div class="col-md-4">
                        <label class="form-check-label" for="inlineRadio1"> Full Name &nbsp;&nbsp;&nbsp;</label>
                        <div class="input-group mb-3 ">
                           <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                           <input type="hidden" class="form-control" id="" placeholder="ID" name="us_id" value="{{session()->get('user')['id']}}" aria-label="Username" aria-describedby="basic-addon1">
                           <input type="text" class="form-control" id="us_fn1" placeholder="First Name" name="fname" value="{{$data->fname}}" aria-label="Username" aria-describedby="basic-addon1">
                           <input type="text" class="form-control" id="us_ln1" placeholder="Last Name" name="lname" value="{{$data->lname}}" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                     </div>
                     
                     <div class="col-md-4 mb-3">
                        <label class="form-check-label" for="inlineRadio1"> Number &nbsp;&nbsp;&nbsp;</label>
                        <div class="input-group mb-3 ">
                           <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                           <input type="number" class="form-control" id="num" placeholder="Mobile Number" name="num" value="{{$data->mobile}}" aria-label="Username" aria-describedby="basic-addon1"readonly>
                        </div>
                     </div>
                     <div class="col-md-4 mb-3">
                        <label class="form-check-label" for="inlineRadio1"> Email &nbsp;&nbsp;&nbsp;</label>
                           <input type="text" class="form-control" id="us_fn1" placeholder="Email" name="email" value="{{$data->email }}" aria-label="Email" aria-describedby="basic-addon1" >
                     </div>
                  </div>
                  <div class="row g-3">
                     <div class="col-md-4">
                        <label class="d-block" for="edo-ani">Gender</label>
                          <input class="radio_animated" id="edo-ani" type="radio" value="1" name="gender"   @if ($data->gender==1){{'checked'}} @else {{''}}  @endif >Male &nbsp;&nbsp;&nbsp;
                          <input class="radio_animated" id="edo-ani" type="radio" value="2" name="gender" @if ($data->gender==2){{'checked'}} @else {{''}}  @endif >Female
                     </div>
                     <div class="col-md-4">
                        <label class="d-block" for="edo-ani">Maritial Status</label>
                          <input class="radio_animated" id="edo-ani" type="radio" value="1" name="mar_status" @if ($data->martial_status==1){{'checked'}} @else {{''}}  @endif >Un-married &nbsp;&nbsp;&nbsp;
                          <input class="radio_animated" id="edo-ani" type="radio" value="2" name="mar_status"  @if ($data->martial_status==2){{'checked'}} @else {{''}}  @endif >Married
                     </div>
                      <div class="col-md-4">
                          <label class="form-label" for="validationCustom03">Date of birth</label>
                          <input class="form-control" id="validationCustom03" type="date" value="{{$data->dob}}" placeholder="City" name="dob" required="" data-bs-original-title="" title="">
                      </div>
                      
                  </div>
                  {{-- <div class="mt-4 mb-4"><hr></div>   
                  <div class="row">

                     <div class="col">
                        <label class="form-check-label" for="inlineRadio1"> Father Name &nbsp;&nbsp;&nbsp;</label>
                        <div class="input-group mb-3 ">
                           <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                           <input type="hidden" class="form-control" id="" placeholder="ID" name="us_id" value="{{session()->get('user')['id']}}" aria-label="Username" aria-describedby="basic-addon1">
                           <input type="text" class="form-control" id="us_fn1" placeholder="First Name" name="f_fname" value="{{$data->fname}}" aria-label="Username" aria-describedby="basic-addon1">
                           <input type="text" class="form-control" id="us_ln1" placeholder="Last Name" name="f_lname" value="{{$data->lname}}" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                     </div>
                     <div class="col">
                        <label class="form-check-label" for="inlineRadio1"> Mother Name &nbsp;&nbsp;&nbsp;</label>
                        <div class="input-group mb-3 ">
                           <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                           <input type="hidden" class="form-control" id="" placeholder="ID" name="us_id" value="{{session()->get('user')['id']}}" aria-label="Username" aria-describedby="basic-addon1">
                           <input type="text" class="form-control" id="us_fn1" placeholder="First Name" name="m_fname" value="{{$data->fname}}" aria-label="Username" aria-describedby="basic-addon1">
                           <input type="text" class="form-control" id="us_ln1" placeholder="Last Name" name="m_lname" value="{{$data->lname}}" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                     </div>             
                  </div>              --}}
                 {{-- <a href="{{route("detail_register",['id'=> session()->get('user')['user_id']])}}">  --}}
                  <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Submit form</button>
               {{-- </a> --}}
              </form>
            </div>
            
         </div>
      </div>
   </div>
   @endif
</div>
@endif
@endsection

@section('script')
@endsection
@elseif ($data->user_status == 1)
    <script>
        window.location.href = "{{ route('add-relations') }}";
    </script>
@elseif ($data->user_status == 2)
    <script>
        window.location.href = "{{ route('user-view-relations') }}";
    </script>
@endif