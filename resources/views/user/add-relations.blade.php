@if ($data->user_status == 1)
    @extends('layouts.simple.master')
    @section('title', 'Creative Card')

    @section('css')
    @endsection

    @section('style')
    @endsection

    @section('breadcrumb-title')
        <h3>Add Relations</h3>
    @endsection

    @section('breadcrumb-items')
        {{-- <li class="breadcrumb-item">Add Relations</li> --}}
        <li class="breadcrumb-item active">Add Relations</li>
    @endsection
    @section('content')
        {{-- @if ($data->martial_status == 1) --}}
        {{-- {{ 'unmarried ' }} --}}
        @if (request()->has('status'))
            {{-- <div class="alert alert-warning">
                {{ 'Relation Not Found' }}
            </div> --}}
            <form action="{{ route('request_relations') }}" method="POST">
                @csrf
                <div class="container-fluid">
                    <div class="row">
                        @if ($data->martial_status == 1)
                            {{-- {{'unmarried '}} --}}
                            <input type="hidden" class="form-control" id="" placeholder="ID" name="us_id"
                                value="{{ session()->get('user')['id'] }}" aria-label="Username"
                                aria-describedby="basic-addon1">
                            <input type="hidden" class="form-control" id="" placeholder="martial_status"
                                name="us_martial_status" value="{{ $data->martial_status }}" aria-label="Username"
                                aria-describedby="basic-addon1">

                            @for ($i = 0; $i < 4; $i++)
                                <div class="col-sm-12 col-xl-6">
                                    <div class="card card-absolute">
                                        <div
                                            class="card-header 
                                            @if ($i == 0) {{ 'bg-primary' }}@elseif($i == 1){{ 'bg-success' }}
                                            @elseif($i == 2){{ 'bg-warning' }}@elseif($i == 3){{ 'bg-info' }} @endif 
                                        ">
                                            <h5 class="text-white">
                                                @if ($i == 0)
                                                    {{ 'Father' }}
                                                @elseif($i == 1)
                                                    {{ 'Mother' }}
                                                @elseif($i == 2)
                                                    {{ 'Brother' }}
                                                @elseif($i == 3)
                                                    {{ 'Sister' }}
                                                @endif
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <label class="form-check-label" for="inlineRadio1"> Mobile Number
                                                &nbsp;&nbsp;&nbsp;</label>
                                            <div class="input-group mb-3 ">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fa fa-phone"></i></span>
                                                <input type="number" class="form-control" id="us_num"
                                                    placeholder="Mobile Number" name="num{{ $i }}"
                                                    value="" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <label class="form-check-label" for="inlineRadio1"> Full Name
                                                &nbsp;&nbsp;&nbsp;</label>
                                            <div class="input-group mb-3 ">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fa fa-user"></i></span>
                                                <input type="hidden" class="form-control" id="us_rel{{ $i }}"
                                                    placeholder="Relatoin" name="rel{{ $i }}"
                                                    value="{{ $i }}" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                                <input type="text" class="form-control" id="us_fn1"
                                                    placeholder="First Name" name="fname{{ $i }}" value=""
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                                <input type="text" class="form-control" id="us_ln1"
                                                    placeholder="Last Name" name="lname{{ $i }}" value=""
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            <div>
                                <button class="btn btn-pill btn-outline-primary-2x btn-air-primary mb-3" type="submit"
                                    data-bs-original-title="" title="">Add Relation</button>
                            </div>
                        @else
                            {{-- {{'married'}} --}}
                            <input type="hidden" class="form-control" id="" placeholder="ID" name="us_id"
                                value="{{ session()->get('user')['id'] }}" aria-label="Username"
                                aria-describedby="basic-addon1">
                            <input type="hidden" class="form-control" id="" placeholder="martial_status"
                                name="us_martial_status" value="{{ $data->martial_status }}" aria-label="Username"
                                aria-describedby="basic-addon1">
                            @php
                                $temp = 0;
                                if ($data->gender == 1 && $data->martial_status == 2) {
                                    $temp = 4; //husband
                                } elseif ($data->gender == 2 && $data->martial_status == 2) {
                                    $temp = 5; //wife
                                }
                            @endphp
                            @for ($i = 0; $i < 8; $i++)
                                @if ($i == $temp)
                                    @continue
                                @endif
                                <div class="col-sm-12 col-xl-6">
                                    <div class="card card-absolute">
                                        <div
                                            class="card-header 
								@if ($i == 0) {{ 'bg-primary' }}@elseif($i == 1){{ 'bg-success' }}
								@elseif($i == 2){{ 'bg-warning' }}@elseif($i == 3){{ 'bg-info' }}
								@elseif($i == 4){{ 'bg-danger' }}@elseif($i == 5){{ 'bg-primary' }}
								@elseif($i == 6){{ 'bg-success' }}@elseif($i == 7){{ 'bg-warning' }} @endif 
							">
                                            <h5 class="text-white">
                                                @if ($i == 0)
                                                    {{ 'Father' }}
                                                @elseif($i == 1)
                                                    {{ 'Mother' }}
                                                @elseif($i == 2)
                                                    {{ 'Brother' }}
                                                @elseif($i == 3)
                                                    {{ 'Sister' }}
                                                @elseif($i == 4)
                                                    {{ 'Husband' }}
                                                @elseif($i == 5)
                                                    {{ 'Wife' }}
                                                @elseif($i == 6)
                                                    {{ 'Son' }}
                                                @elseif($i == 7)
                                                    {{ 'Daughter' }}
                                                @endif
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <label class="form-check-label" for="inlineRadio1"> Mobile Number
                                                &nbsp;&nbsp;&nbsp;</label>
                                            <div class="input-group mb-3 ">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fa fa-phone"></i></span>
                                                <input type="number" class="form-control" id="us_num"
                                                    placeholder="Mobile Number" name="num{{ $i }}"
                                                    value="" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <label class="form-check-label" for="inlineRadio1"> Full Name
                                                &nbsp;&nbsp;&nbsp;</label>
                                            <div class="input-group mb-3 ">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fa fa-user"></i></span>
                                                <input type="hidden" class="form-control"
                                                    id="us_rel{{ $i }}" placeholder="Relatoin"
                                                    name="rel{{ $i }}" value="{{ $i }}"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                                <input type="text" class="form-control" id="us_fn1"
                                                    placeholder="First Name" name="fname{{ $i }}"
                                                    value="" aria-label="Username" aria-describedby="basic-addon1">
                                                <input type="text" class="form-control" id="us_ln1"
                                                    placeholder="Last Name" name="lname{{ $i }}"
                                                    value="" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            {{-- <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-end">
                                        <button class="btn btn-pill btn-outline-primary-2x btn-air-primary mb-3" type="submit"
                                            data-bs-original-title="" title="">Find Relation</button>
                                    </div>
                                </div>
                            </div> --}}
                            <div>
                                <button class="btn btn-pill btn-outline-primary-2x btn-air-primary mb-3" type="submit"
                                    data-bs-original-title="" title="">Add Relation</button>
                            </div>
                        @endif
                    </div>
                </div>
            </form>
        @elseif (isset($rel))
            {{-- {{$rel}} --}}
            <div class="card-body">
                <form method="POST" id="frmSubmit">
                    <div class="row">
                        {{-- @foreach ($rel as $rel) --}}
                        <div class="col-sm-8 col-md-4">
                            <div class="shadow mb-5 card p-25 shadow-showcase text-center">
                                @csrf
                                <input type="hidden" class="user_id" name="user_id" value="{{ $rel->user_id }}">
                                <input type="hidden" class="relation" name="relation" value="{{ $rel->relation }}">
                                <input type="hidden" class="rel_user_id" name="rel_user_id"
                                    value="{{ $rel->rel_user_id }}">
                                <h5 class="m-0 f-18">{{ $rel->rel_user_fname . ' ' . $rel->rel_user_lname }} is your
                                    @if ($rel->relation == 1)
                                        {{ 'Father' }}
                                    @elseif($rel->relation == 2)
                                        {{ 'Mother' }}
                                    @elseif($rel->relation == 3)
                                        {{ 'Brother' }}
                                    @elseif($rel->relation == 4)
                                        {{ 'Sister' }}
                                    @elseif($rel->relation == 5)
                                        {{ 'Husband' }}
                                    @elseif($rel->relation == 6)
                                        {{ 'Wife' }}
                                    @elseif($rel->relation == 7)
                                        {{ 'Son' }}
                                    @elseif($rel->relation == 8)
                                        {{ 'Daughter' }}
                                    @else
                                        {{ 'some error' }}
                                    @endif ???
                                </h5>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit"
                                            class="btn btn-pill btn-air btn-outline-success confirmRelation">
                                            <i class="icofont icofont-ui-check"></i>
                                        </button>
                                        <button type="submit"
                                            class="btn btn-pill btn-air btn-outline-danger rejectRelation">
                                            <i class="icofont icofont-ui-close"></i>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{-- @endforeach --}}
                    </div>
                </form>
            </div>
        @elseif ($data->user_status == 1)
            <form action="{{ route('insert_relations') }}" method="POST">
                @csrf
                <div class="container-fluid">
                    <div class="row">
                        @if ($data->martial_status == 1)
                            {{-- {{'unmarried '}} --}}
                            <input type="hidden" class="form-control" id="" placeholder="ID" name="us_id"
                                value="{{ session()->get('user')['id'] }}" aria-label="Username"
                                aria-describedby="basic-addon1">
                            <input type="hidden" class="form-control" id="" placeholder="martial_status"
                                name="us_martial_status" value="{{ $data->martial_status }}" aria-label="Username"
                                aria-describedby="basic-addon1">

                            @for ($i = 0; $i < 4; $i++)
                                <div class="col-sm-12 col-xl-6">
                                    <div class="card card-absolute">
                                        <div
                                            class="card-header 
                                            @if ($i == 0) {{ 'bg-primary' }}@elseif($i == 1){{ 'bg-success' }}
                                            @elseif($i == 2){{ 'bg-warning' }}@elseif($i == 3){{ 'bg-info' }} @endif 
                                        ">
                                            <h5 class="text-white">
                                                @if ($i == 0)
                                                    {{ 'Father' }}
                                                @elseif($i == 1)
                                                    {{ 'Mother' }}
                                                @elseif($i == 2)
                                                    {{ 'Brother' }}
                                                @elseif($i == 3)
                                                    {{ 'Sister' }}
                                                @endif
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <label class="form-check-label" for="inlineRadio1"> Mobile Number
                                                &nbsp;&nbsp;&nbsp;</label>
                                            <div class="input-group mb-3 ">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fa fa-phone"></i></span>
                                                <input type="number" class="form-control" id="us_num"
                                                    placeholder="Mobile Number" name="num{{ $i }}"
                                                    value="" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            <label class="form-check-label" for="inlineRadio1"> Full Name
                                                &nbsp;&nbsp;&nbsp;</label>
                                            <div class="input-group mb-3 ">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fa fa-user"></i></span>
                                                <input type="hidden" class="form-control"
                                                    id="us_rel{{ $i }}" placeholder="Relatoin"
                                                    name="rel{{ $i }}" value="{{ $i }}"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                                <input type="text" class="form-control" id="us_fn1"
                                                    placeholder="First Name" name="fname{{ $i }}"
                                                    value="" aria-label="Username" aria-describedby="basic-addon1">
                                                <input type="text" class="form-control" id="us_ln1"
                                                    placeholder="Last Name" name="lname{{ $i }}"
                                                    value="" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            <div>
                                <button class="btn btn-pill btn-outline-primary-2x btn-air-primary mb-3" type="submit"
                                    data-bs-original-title="" title="">Add Relation</button>
                            </div>
                        @else
                            {{-- {{'married'}} --}}
                            <input type="hidden" class="form-control" id="" placeholder="ID" name="us_id"
                                value="{{ session()->get('user')['id'] }}" aria-label="Username"
                                aria-describedby="basic-addon1">
                            <input type="hidden" class="form-control" id="" placeholder="martial_status"
                                name="us_martial_status" value="{{ $data->martial_status }}" aria-label="Username"
                                aria-describedby="basic-addon1">
                            @php
                                $temp = 0;
                                if ($data->gender == 1 && $data->martial_status == 2) {
                                    $temp = 4; //husband
                                } elseif ($data->gender == 2 && $data->martial_status == 2) {
                                    $temp = 5; //wife
                                }
                            @endphp
                            @for ($i = 0; $i < 8; $i++)
                                @if ($i == $temp)
                                    @continue
                                @endif
                                <div class="col-sm-12 col-xl-6">
                                    <div class="card card-absolute">
                                        <div
                                            class="card-header 
								@if ($i == 0) {{ 'bg-primary' }}@elseif($i == 1){{ 'bg-success' }}
								@elseif($i == 2){{ 'bg-warning' }}@elseif($i == 3){{ 'bg-info' }}
								@elseif($i == 4){{ 'bg-danger' }}@elseif($i == 5){{ 'bg-primary' }}
								@elseif($i == 6){{ 'bg-success' }}@elseif($i == 7){{ 'bg-warning' }} @endif 
							">
                                            <h5 class="text-white">
                                                @if ($i == 0)
                                                    {{ 'Father' }}
                                                @elseif($i == 1)
                                                    {{ 'Mother' }}
                                                @elseif($i == 2)
                                                    {{ 'Brother' }}
                                                @elseif($i == 3)
                                                    {{ 'Sister' }}
                                                @elseif($i == 4)
                                                    {{ 'Husband' }}
                                                @elseif($i == 5)
                                                    {{ 'Wife' }}
                                                @elseif($i == 6)
                                                    {{ 'Son' }}
                                                @elseif($i == 7)
                                                    {{ 'Daughter' }}
                                                @endif
                                            </h5>
                                        </div>
                                        <div class="card-body">
                                            <label class="form-check-label" for="inlineRadio1"> Mobile Number
                                                &nbsp;&nbsp;&nbsp;</label>
                                            <div class="input-group mb-3 ">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fa fa-phone"></i></span>
                                                <input type="number" class="form-control"
                                                    id="us_num{{ $i }}" placeholder="Mobile Number"
                                                    name="num{{ $i }}" value="" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                            <label class="form-check-label" for="inlineRadio1"> Full Name
                                                &nbsp;&nbsp;&nbsp;</label>
                                            <div class="input-group mb-3 ">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fa fa-user"></i></span>
                                                <input type="hidden" class="form-control"
                                                    id="us_rel{{ $i }}" placeholder="Relatoin"
                                                    name="rel{{ $i }}" value="{{ $i }}"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                                <input type="text" class="form-control" id="us_fn1"
                                                    placeholder="First Name" name="fname{{ $i }}"
                                                    value="" aria-label="Username" aria-describedby="basic-addon1">
                                                <input type="text" class="form-control" id="us_ln1"
                                                    placeholder="Last Name" name="lname{{ $i }}"
                                                    value="" aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            {{-- <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-end">
                <button class="btn btn-pill btn-outline-primary-2x btn-air-primary mb-3" type="submit"
                    data-bs-original-title="" title="">Find Relation</button>
            </div>
        </div>
    </div> --}}
                            <div>
                                <button class="btn btn-pill btn-outline-primary-2x btn-air-primary mb-3" type="submit"
                                    data-bs-original-title="" title="">Add Relation</button>
                            </div>
                        @endif

                    </div>

                </div>
            </form>
        @else
            <h3>something went wrong</h3>
        @endif
        </div>
        <script>
            setTimeout(function() {
                $('.alert').fadeOut('fast');
            }, 3000);
            $(document).ready(function() {
                for (let i = 0; i < 8; i++) {
                    let number = $('#us_num' + i);
                    let relation = $('#us_rel' + i);
                    // console.log(number.val());
                    // console.log(relation.val());
                    // Ensure the element exists before attempting to bind the keypress event
                    if (number.length) {
                        // console.log(number.val() + "---" + i);
                        // console.log(relation.val() + " relation " + i);

                        number.keyup(function(e) {
                            // Handle keyup event for the specific input
                            // console.log('inside keyup');
                            $.ajax({
                                type: "POST",
                                url: "{{ route('insert_relations') }}",
                                data: {
                                    _token: '{{ csrf_token() }}',
                                    mobile: number.val(),
                                    temprelation: relation.val()
                                },
                                success: function(response) {
                                    if (response != '') {
                                        var final = response.split('###');
                                        console.log(final);
                                    }
                                }
                            });
                            // $.ajax({
                            //     type: "POST",
                            //     url: "{{ route('insert_relations') }}",
                            //     data: {
                            //         _token: "{{ csrf_token() }}",
                            //         num: number.val(),
                            //         rel: relation.val()
                            //     },
                            //     success: function(result) {
                            //         if (result.message === 'Mobile number exists') {
                            //             console.log('Mobile number exists.');
                            //             console.log('First Name:', result.fname);
                            //             console.log('Last Name:', result.lname);
                            //             // Handle accordingly
                            //         } else {
                            //             console.log('Mobile number does not exist.');
                            //             // Handle accordingly
                            //         }
                            //     }

                            // });
                        });
                    }
                }

                $('.confirmRelation').click(function(e) {
                    e.preventDefault();
                    var user_id = $(this).closest('.shadow-showcase').find('.user_id').val();
                    var relation = $(this).closest('.shadow-showcase').find('.relation').val();
                    var rel_user_id = $(this).closest('.shadow-showcase').find('.rel_user_id').val();
                    $.ajax({
                        type: "POST",
                        url: "{{ route('confirm-relations') }}",
                        data: {
                            _token: "{{ csrf_token() }}",
                            user_id: user_id,
                            relation: relation,
                            rel_user_id: rel_user_id
                        },
                        success: function(result) {
                            if (result.status == 'Relation Confirmed') {
                                window.location.href = "{{ route('user-view-relations') }}";
                            } else {
                                alert('Something went wrong');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
                });
                $('.rejectRelation').click(function(e) {
                    e.preventDefault();
                    var url = "{{ route('add-relation') }}?status=relation-rejected";
                    window.location.href = url;

                    // var user_id = $(this).closest('.shadow-showcase').find('.user_id').val();
                    // var relation = $(this).closest('.shadow-showcase').find('.relation').val();
                    // var rel_user_id = $(this).closest('.shadow-showcase').find('.rel_user_id').val();
                    // $.ajax({
                    //     type: "POST",
                    //     url: "{{ route('reject-relation') }}",
                    //     data: {
                    //         _token: "{{ csrf_token() }}",
                    //         user_id: user_id,
                    //         relation: relation,
                    //         rel_user_id: rel_user_id
                    //     },
                    //     success: function(result) {
                    //         if (result.status === 'Relation Rejected') {
                    //             // Redirect to the 'add-relation' route with a message query parameter
                    //             var url = "{{ route('add-relation') }}?status=relation-rejected";
                    //             window.location.href = url;
                    //             // console.log("Redirecting to:", url);
                    //         } else {
                    //             console.error(result);
                    //             // Handle other cases or display an error message as needed
                    //         }
                    //     },
                    //     error: function(xhr, status, error) {
                    //         console.error(error);
                    //     }
                    // });
                });
            });
        </script>

    @endsection
    @section('script')
        <script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
        <script src="{{ asset('assets/js/notify/notify-script-custom.js') }}"></script>
    @endsection
@elseif ($data->user_status == 0)
    <script>
        window.location.href = "{{ route('detail_register') }}";
    </script>
@elseif ($data->user_status == 2)
    <script>
        window.location.href = "{{ route('user-view-relations') }}";
    </script>
@endif
