@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{{ asset('backend/summernote/summernote-bs4.css') }}">
@endpush
@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
          @include('layouts.partial.notify')
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">

      <div class="row">
        <div class="col-md-9">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Profile</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form action="{{ Route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="Name">Full Name</label>
                  <input type="text" id="title" class="form-control" name="name" required value="{{ $about->name }}">
                </div>
                <div class="form-group">
                  <label for="video">Video Link</label>
                  <input type="text" id="title" class="form-control" name="video" required value="{{ $about->video }}">
                </div>
                <div class="form-group">
                  <label for="cv">CV</label>
                  <input type="file" id="cv" class="form-control" name="cv" value="{{ $about->cv }}">
                </div>
                <div class="form-group">
                  <label for="country">Country</label>
                  <select class="form-control custom-select" required name="country">
                    <option value="{{ $about->country }}">{{ $about->country }}</option>
                    @include('layouts.countries')
                  </select>
                </div>
                <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" id="city" class="form-control" name="city" required value="{{ $about->city }}">
                </div>
                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" id="image" class="form-control" name="image" value="{{ $about->image }}">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <div class="card-body pad">
                      <div class="mb-3">
                          <textarea class="textarea" placeholder="Place some text here" name="description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $about->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <input name="submit" type="submit" value="submit" class="btn btn-block btn-primary">
                        </div>
                    </div>
                </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-3">
          <div class="row">
            <div class="col-12 p-3">
              <a href="{{ Route('about.index') }}" class="btn btn-block btn-secondary">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    @include('layouts.partial.notify')
</section>
</div>
@endsection
@push('scripts')
<script src="{{ asset('backend/summernote/summernote-bs4.min.js') }}"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
@endpush
