@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    <section class="content">
        @include('layouts.partial.notify')
    <form action="{{ Route('experience.update', $experience->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
      <div class="row pt-5">
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Edit your Experience Item</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" class="form-control" name="title" value="{{ $experience->title }}" required>
              </div>
              <div class="form-group">
                <label for="start_year">Start Year</label>
                <input type="number" id="start_year" class="form-control" name="start_year"value="{{ $experience->start_year }}" required >
              </div>
              <div class="form-group">
                <label for="end_year">End Year</label>
                <input type="number" id="end_year" class="form-control" name="end_year" value="{{ $experience->end_year }}" required>
              </div>
              <div class="form-group">
                <label for="company">Company</label>
                <input type="text" id="company" class="form-control" name="company" value="{{ $experience->company }}" required>
              </div>
              <div class="form-group">
                <label for="description">Description</label>
                <div class="card-body pad">
                      <div class="mb-3">
                          <textarea class="textarea" placeholder="Place some text here" name="description"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $experience->description }}</textarea>
                        </div>
                    </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-3">
            <div class="row">
                <div class="col-12 p-3">
                    <input type="submit" value="Add Item" class="btn btn-block btn-primary">
                </div>
                <div class="col-12 p-3">
                    <a href="{{ Route('about.index') }}" class="btn btn-block btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
      </div>
    </form>
</section>
</div>

@endsection
