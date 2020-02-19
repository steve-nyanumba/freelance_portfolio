@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    <section class="content">
        @include('layouts.partial.notify')
    <form action="{{ Route('portfolio_category.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="row pt-5">
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Create your Category</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="title">New Category</label>
                <input type="text" id="title" class="form-control" name="category">
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
                    <a href="{{ Route('portfolio.index') }}" class="btn btn-block btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
      </div>
    </form>
</section>
</div>

@endsection
