@extends('layouts.simple.master')
@section('title', 'Ribbons')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
    <h3>Find Relation</h3>
@endsection

@section('breadcrumb-items')
    {{-- <li class="breadcrumb-item">Bonus Ui</li> --}}
    <li class="breadcrumb-item active">Find Relation</li>
@endsection

@section('content')
<div id="errorAlert"></div>
    <div class="container-fluid">
        <!-- bookmark ribbon left side-->
        <form method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-14 col-xl-6">
                    <div class="ribbon-wrapper card">
                        <div class="card-body">
                            <div class="ribbon ribbon-clip ribbon-primary">User 1</div>
                            <label for="">Enter Full Name</label>
                            <div class="input-group mb-3 ">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" id="fname_us1" placeholder="First Name"
                                    name="fname_us1" value="" aria-label="Username" aria-describedby="basic-addon1">
                                <input type="text" class="form-control" id="lname_us1" placeholder="Last Name"
                                    name="lname_us1" value="" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-14 col-xl-6">
                    <div class="ribbon-wrapper card">
                        <div class="card-body">
                            <div class="ribbon ribbon-clip ribbon-info">User 2</div>
                            <label for="">Enter Full Name</label>
                            <div class="input-group mb-3 ">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" id="fname_us2" placeholder="First Name"
                                    name="fname_us2" value="" aria-label="Username" aria-describedby="basic-addon1">
                                <input type="text" class="form-control" id="lname_us2" placeholder="Last Name"
                                    name="lname_us2" value="" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-end">
                        {{-- onclick="window.location.href='{{ route('find-relation') }}'" id="findrelation" --}}
                        <button class="btn btn-pill btn-outline-primary-2x btn-air-primary" id="findrelation" type="submit"
                            data-bs-original-title="" title="">Find Relation</button>
                    </div>
                </div>
            </div>
        </form>
        <br>
        <div id='showSearchResult'></div>
        <!-- ribbon left (default) side-->

        <script>
            $(document).ready(function() {
                $('#findrelation').click(function(e) {
                    e.preventDefault();

                    // Get values from input fields
                    var fname_us1 = $('#fname_us1').val();
                    var lname_us1 = $('#lname_us1').val();
                    var fname_us2 = $('#fname_us2').val();
                    var lname_us2 = $('#lname_us2').val();

                    // Make an AJAX request
                    $.ajax({
                        type: "POST",
                        url: "{{ route('find-relation') }}",
                        data: {
                            fname_us1: fname_us1,
                            lname_us1: lname_us1,
                            fname_us2: fname_us2,
                            lname_us2: lname_us2,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(result) {
                            // Check if the response contains an 'error' key
                            if (result.error) {
                                var errorFormat = "<div class='alert alert-danger' role='alert'>" +
                                    "<p class='f-18'>{{ session()->get('error') }}</p>" +
                                    result.error +
                                    "</div>";
                                    $('#errorAlert').html(errorFormat).show();
                                setTimeout(function () {
                                    // $('#errorAlert').html("<div id='errorAlert'></div>");
                                    $('#errorAlert').fadeOut('fast');
                                }, 3000);
                            }
                            // Check if the response contains a 'success' key
                            else if (result.success) {
                                var successMessage = result.success.original.success;
                                var relationResult = result.success.original.relationResult;
                                var showResult="<div class='row'>"+
                                                "<div class='col-sm-12 col-xl-12'>"+
                                                    "<div class='card'>"+
                                                        "<div class='card-header'>"+
                                                            // "<div class='ribbon ribbon-bookmark ribbon-vertical-left ribbon-info'></div>"+
                                                            "<h5>Search Result</h5>"+
                                                        "</div>"+
                                                        "<div class='card-body '>"+
                                                            "<div class='f-20'>"+
                                                                successMessage+ 
                                                            "</div>"+
                                                            "<br>"+
                                                            "<div class='f-18'>"+
                                                                relationResult+
                                                            "</div>"+
                                                        "</div>"+
                                                    "</div>"+
                                                "</div>"+
                                            "</div>";
                                // var showResult=" <div class='row'><div class='col-sm-12 col-xl-12'><div class='card'><div class='card-header'><h5>Search Result</h5></div><div class='card-body '><div class='f-20'>"+result.success+"</div><br><div class='f-18'>{!! session()->get('relationResult') !!}</div></div></div></div></div>"; 
                                $('#showSearchResult').html(showResult);
                                // alert(result.success);
                                // Redirect to a new page on success
                                // window.location.href = "{{ route('user-view-relations') }}";
                            }
                        },
                        error: function(xhr, status, error) {
                            // Handle AJAX error
                            alert('An error occurred: ' + error);
                        }
                    });
                });
            });
        </script>


    </div>
@endsection

@section('script')
@endsection
