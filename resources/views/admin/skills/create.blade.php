@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Your Skill Item</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ Route('admin.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Skills</li>
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
            <form action="{{ Route('skills.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="skill">Skill</label>
                  <input type="text" id="skill" class="form-control" name="skill" required>
                </div>
                <div class="form-group">
                  <label for="level">level</label>
                  <input type="number" id="level" class="form-control" name="level" required>
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

@endpush
