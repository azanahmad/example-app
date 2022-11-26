@extends('partials.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Flights</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Flights</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                {{session('success')}}
            </div>
        @endif
        @if(session('error'))

            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                {{session('error')}}
            </div>
    @endif
    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>City</td>
                        <td>Country</td>
                        <td>Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($flights as $flight)
                        <tr>
                            <td>{{ $flight->id }}</td>
                            <td>{{ $flight->name }}</td>
                            <td>{{ $flight->city }}</td>
                            <td>{{ $flight->country }}</td>
                            <td><a href="{{route('flight.edit',['id' => $flight->id])}}">Edit</a> &nbsp;&nbsp; <a href="{{route('flight.delete',['id'=>$flight->id])}}">Delete</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
@section('extra-js')

    <!-- Page specific script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            // $('#example2').DataTable({
            //     "paging": true,
            //     "lengthChange": fa   lse,
            //     "searching": false,
            //     "ordering": true,
            //     "info": true,
            //     "autoWidth": false,
            //     "responsive": true,
            // });
        });
    </script>
@endsection
