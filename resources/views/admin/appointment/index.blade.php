
@extends('admin.template.admin_master')

@section('content')
    <!-- page content -->
<div class="right_col" role="main">
    <div class="row">
            {{-- <div class="col-md-2"></div> --}}
            <div class="col-md-12" style="margin-top:50px;">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Appointment List</h2>
                        <div class="clearfix"></div>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success" >{{ Session::get('message') }}</div>
                     @endif
                     @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                     @endif
                    <div class="x_content">
                        <table id="appointment" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                <th>Sl. No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Date</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>                       
                            </tbody>
                            </table>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection


@section('script')
    <script>
        $(function(){
            var i = 1;
            var table = $('#appointment').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.ajax.get_appointment') }}",
                columns: [
                    { "render": function(data, type, full, meta) {return i++;}},
                    {data: 'uname', name: 'uname',searchable: true},      
                    {data: 'uemail', name: 'uemail',searchable: true},      
                    {data: 'unumber', name: 'unumber',searchable: true},      
                    {data: 'udate', name: 'udate',searchable: true},      
                    {data: 'action', name: 'action',searchable: true},      
                ]
            });
        })
    </script>
@endsection


