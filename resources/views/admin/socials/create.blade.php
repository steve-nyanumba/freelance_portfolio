@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Your Links</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ Route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Links</li>
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
            <form action="{{ Route('social.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="twitter">Twitter</label>
                  <input type="text" id="skill" class="form-control" name="twitter" required>
                </div>
                <div class="form-group">
                  <label for="twitter">Instagram</label>
                  <input type="text" id="skill" class="form-control" name="instagram" required>
                </div>
                <div class="form-group">
                  <label for="twitter">Facebook</label>
                  <input type="text" id="skill" class="form-control" name="facebbok" required>
                </div>
                <div class="form-group">
                  <label for="twitter">Dribbble</label>
                  <input type="text" id="skill" class="form-control" name="dribbble" required>
                </div>
                <div class="form-group">
                  <label for="twitter">LinkedIn</label>
                  <input type="text" id="skill" class="form-control" name="linkedin" required>
                </div>
                <div class="form-group">
                  <label for="twitter">YouTube</label>
                  <input type="text" id="skill" class="form-control" name="youtube" required>
                </div>
                <div class="form-group">
                  <label for="twitter">Github</label>
                  <input type="text" id="skill" class="form-control" name="github" required>
                </div>
                <div class="form-group">
                    <input type="submit" id="level" class="btn btn-info" value="Add Skill">
                </div>

            </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-3">
          <div class="row">
            <div class="col-12 p-3">
              <a href="{{ Route('admin.dashboard') }}" class="btn btn-block btn-secondary">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    @include('layouts.partial.notify')
</section>
</div>
@endsection
@push('scripts')

@endpush
