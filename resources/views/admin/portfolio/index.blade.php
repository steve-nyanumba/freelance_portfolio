@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{{ asset('backend/ekko-lightbox/ekko-lightbox.css') }}">
@endpush
@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Welcome Mr. Steve Nyanumba</h1>
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                 My Portfolio
                </div>
              </div>
              <div class="card-body">
                <div>
                  <div class="btn-group w-100 mb-2">
                    <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items </a>
                    @foreach ($portcategories as $portcategory)
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="{{ $portcategory->category }}"> {{ $portcategory->category }} </a>
                    @endforeach
                  </div>
                  <div class="mb-2">
                    <a class="btn btn-secondary" href="javascript:void(0)" data-shuffle> Shuffle items </a>
                    <div class="float-right">
                      <select class="custom-select" style="width: auto;" data-sortOrder>
                        <option value="index"> Sort by Position </option>
                        <option value="sortData"> Sort by Custom Data </option>
                      </select>
                      <div class="btn-group">
                        <a class="btn btn-default" href="javascript:void(0)" data-sortAsc> Ascending </a>
                        <a class="btn btn-default" href="javascript:void(0)" data-sortDesc> Descending </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="filter-container p-0 row">
                    @foreach ($portfolios as $item)
                    <div class="filtr-item col-sm-2" data-category="{{ $item->category }}" data-sort="{{ $item->category }}">
                      <a href="/img/portfolio/{{ ($item->image) }}" data-toggle="lightbox" data-title="{{ $item->title }}">
                        <img src="/img/portfolio/{{ ($item->image) }}" class="img-fluid mb-2" alt="{{ $item->title }}"/>
                      </a>
                      <a class="btn btn-danger" href="{{ Route('portfolio.destroy', $item->id) }}">
                        <form id="delete-form-{{ $item->id }}" action="{{ route('portfolio.destroy',$item->id) }}" style="display: none;" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                        <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{ $item->id }}').submit();
                            }else {
                                event.preventDefault();}">
                            <i class="material-icons">DELETE</i>
                        </button>
                    </a>
                </div>

                    @endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-3">
            <button type="button" class="btn btn-block btn-info btn-lg" onclick="location.href='{{ Route('portfolio.create') }}'">Add New Item</button>
        </div>
      </div>
    </section>
    <section class="content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Welcome Mr. Steve Nyanumba</h1>
                </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ Route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            @include('layouts.partial.notify')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Contacts List</h3>
                    </div>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Date of Creation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portcategories as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->category }}</td>
                                    <td>{{ $item->created_at }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-3">
                        <button type="button" class="btn btn-block btn-info btn-lg" onclick="location.href='{{ Route('portfolio_category.create') }}'">Add New Item</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>
</div>
@endsection
@push('scripts')
<script src="{{ asset('backend/ekko-lightbox/ekko-lightbox.min.js') }}"></script>
<script src="{{ asset('backend/filterizr/jquery.filterizr.min.js') }}"></script>

<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>
@endpush
