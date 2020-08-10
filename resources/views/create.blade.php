@extends('layouts.master')
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Create Project</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/projek" method="POST">
      @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="judul">Title</label>
          <input type="text" class="form-control" id="judul" name="judul" value="{{old('judul', '')}}" placeholder="Enter your title">
          @error('judul')
            <div class="alert alert-danger">{{$message}}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="isi">Content</label>
          <textarea class="form-control" rows="3" id="isi" name="isi" placeholder="Enter your content">{{old('isi', '')}}</textarea>
          @error('isi')
            <div class="alert alert-danger">{{$message}}</div>
          @enderror
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
</div>
@endsection('content')