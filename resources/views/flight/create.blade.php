@extends('partials.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Flight</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">{{$flight ? 'edit' : 'create'}}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <form
                    @if($flight)
                    action="{{route('flight.update',['id'=>$flight->id])}}"
                    @else
                    action="{{route('flight.save')}}"
                    @endif
                    method="POST">
                    @csrf()
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
                    <div class="form-group">
                        <label>Name:</label>
                        <input type="text" class="form-control" name="name" value="{{old('name',$flight->name ?? '')}}">
                        @error('name')
                        <span class="form-error"> {{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">

                        <label>City:</label>
                        <input type="text" class="form-control" name="city" value="{{old('city',$flight->city ?? '')}}">
                        @error('city')
                        <span class="form-error"> {{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Country:</label>
                        <input type="text" class="form-control" name="country" value="{{old('country',$flight->country ?? '')}}">
                        @error('country')
                        <span class="form-error"> {{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Date:</label>
                        <input type="date" class="form-control" name="date" value="{{old('date',$flight->date ?? '')}}">
                        @error('date')
                        <span class="form-error"> {{$message}}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit" >{{$flight ? 'edit' : 'create'}} </button>
                </form>
            </div>
        </section>
    </div>
@endsection
