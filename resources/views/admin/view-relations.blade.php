@extends('layouts.simple.master')
@section('title', 'Basic DataTables')

@section('css')

@endsection

@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/datatable-extension.css') }}">
@endsection

@section('breadcrumb-title')
    <h3>Manage User Relations</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active">Manage User Relations</li>
@endsection
@section('content')
    <!-- Large modal-->
    <!-- Vertically centered modal-->
    <div class="modal fade  " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                {{-- <div class="modal-header">
                <h5 class="modal-title">Delete User</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> --}}
                <div class="modal-body">
                    <h4>Are you sure you want to delete?? </h4>
                    {{-- <p class="idval"></p> --}}
                    {{-- <input type="hidden" class='us_id' name="us_id" value=""> --}}
                    {{-- <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in,
                    egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p> --}}
                </div>
                <div class="modal-footer">
                    <input type="hidden" id="delete_id" value="">
                    <button class="btn btn-success" type="submit" onclick="delete_confirm()">Yes,Sure</button>
                    <button class="btn btn-danger" type="button" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    {{-- <div class="card-header pb-0 card-no-border">
                    <h3>HTML5 Export Buttons</h3>
                </div> --}}
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="display" id="export-button">
                                <thead>
                                    <tr>
                                        {{-- <th>No.</th> --}}
                                        <th>User Name</th>
                                        <th>Relation is</th>
                                        <th>Relations With</th>
                                        <th>Date Of Birth</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>User Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- {{$rel_2[4]->user_id.'---'.$rel[4]->rel_user_id}} --}}
                                    @foreach ($rel as $rel)
                                        <tr>
                                            {{-- <td>{{$i++}}</td> --}}
                                            <td>{{ $rel->user_fname . ' ' . $rel->user_lname }}</td>
                                            <td>
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
                                                @endif
                                            </td>
                                            <td>{{ $rel->rel_user_fname . ' ' . $rel->rel_user_lname }}</td>
                                            {{-- <td>{{ $rel->martial_status==1 ? 'Un-Married':'Married' }}</td> --}}
                                            <td>{{ $rel->dob == '' ? '---' : $rel->dob }}</td>
                                            <td>{{ $rel->mobile == '' ? '---' : $rel->mobile }}</td>
                                            <td>{{ $rel->email == '' ? '---' : $rel->email }}</td>
                                            <td> <span
                                                    class="badge rounded-pill 
                                            @if ($rel->user_status == 0) {{ 'badge-danger' }}
                                            @elseif($rel->user_status == 1)
                                                {{ 'badge-primary' }}
                                            @elseif($rel->user_status == 2)
                                                {{ 'badge-secondary' }}
                                            @elseif($rel->user_status == 3)
                                                {{ 'badge-warning' }}
                                            @elseif($rel->user_status == 4)
                                                {{ 'badge-success' }}
                                            @elseif($rel->user_status == 5)
                                                {{ 'badge-info' }}
                                            @elseif($rel->user_status == 6)
                                                {{ 'badge-dark' }}
                                            @else
                                                {{ 'badge-light' }} @endif
                                            ">
                                                    @if ($rel->user_status == 0)
                                                        {{ 'Not verified' }}
                                                    @elseif($rel->user_status == 1)
                                                        {{ 'Detail Filled' }}
                                                    @elseif($rel->user_status == 2)
                                                        {{ 'Relation Added' }}
                                                    @elseif($rel->user_status == 3)
                                                        {{ 'Details pending' }}
                                                    @elseif($rel->user_status == 4)
                                                        {{ 'Active' }}
                                                    @elseif($rel->user_status == 5)
                                                        {{ 'inactive' }}
                                                    @elseif($rel->user_status == 6)
                                                        {{ 'Dead' }}
                                                    @else
                                                        {{ 'Unknow' }}
                                                    @endif
                                                </span></td>
                                            <td>
                                                <ul class="action">

                                                    {{-- <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                                data-bs-target="#exampleModalCenter">Vertically centered</button> --}}
                                                    {{-- <li class="view"><a href="{{route('view-user-profile',$user->id    )}}"
                                                    data-toggle="tooltip" data-bs-placement="bottom" title="View"><i
                                                        class="icofont icofont-eye-alt"></i></a></li>&nbsp;&nbsp;&nbsp;
                                            --}}
                                                    <li class="edit"><a href="#" data-toggle="tooltip"
                                                            data-bs-placement="bottom" title="Edit"><i
                                                                class="icon-pencil-alt"></i></a></li><br>
                                                    <li class="delete"><a href="#"
                                                            onclick="deleteUser({{ $rel->id }});"
                                                            data-toggle="tooltip" data-bs-placement="bottom"
                                                            title="Delete"><i class="icon-trash"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    function deleteUser(id) {
        var id = id;
        console.log(id);
        $('#exampleModalCenter').modal('show');
        $("#delete_id").val(id);
        // $('')
    }

    function delete_confirm() {
        var uid = $('#delete_id').val();
        var url = "{{ url('admin/delete-relation/') }}/" + uid;
        // console.log(uid);
        window.location.href = url;
        // window.location.href = 'www.google.com';
    }
</script>
@section('script')
    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.autoFill.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.colReorder.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable/datatable-extension/custom.js') }}"></script>
@endsection
