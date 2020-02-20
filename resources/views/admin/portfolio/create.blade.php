@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
          @include('layouts.partial.notify')
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Your Portfolio Item</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ Route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Portfolio</li>
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
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <form action="{{ Route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="title">Project Name</label>
                  <input type="text" id="title" class="form-control" name="title" required>
                </div>
                <div class="form-group">
                  <label for="Category">Category</label>
                  <select class="form-control custom-select" required name="category">
                    <option selected disabled>Select one</option>
                    @foreach ($portcategories as $item)
                    <option value="{{ $item->category }}">{{ $item->category }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" id="image" class="form-control" name="image" required>
                </div>
                <div class="form-group">
                  <label for="link">Link to project</label>
                  <input type="url" id="link" class="form-control" name="link">
                </div>
                <div class="mb-3">
                  <textarea class="textarea" placeholder="Place some text here" name="description" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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
              <a href="{{ Route('portfolio.index') }}" class="btn btn-block btn-secondary">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</section>
</div>
@endsection
@push('scripts')

@endpush
