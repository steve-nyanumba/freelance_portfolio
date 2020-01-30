@extends('layouts.app')

@push('css')

@endpush
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Welcome Mr. Steve Nyanumba</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Blog Posts</span>
                        <span class="info-box-number">{{ $posts->count() }}</span>

                        {{--  <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>  --}}
                        @forelse ($posts as $item)
                            <span class="progress-description">
                            <sup>Most Recent: </sup>{{ $item->title->latest()->first() }}
                        </span>
                        @empty
                            <span class="progress-description">
                                There are no blog Posts
                            </span>
                        @endforelse
                    </div>
                <!-- /.info-box-content -->
                </div>
            <!-- /.info-box -->
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-danger">
                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Portfolio Posts</span>
                        <span class="info-box-number">{{ $portfolios->count() }}</span>

                        {{--  <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>  --}}
                        @forelse ($portfolios as $item)
                            <span class="progress-description">
                            <sup>Most Recent: </sup>{{ $item->title->latest()->first() }}
                        </span>
                        @empty
                            <span class="progress-description">
                                There are no Portfolio Posts
                            </span>
                        @endforelse
                    </div>
                <!-- /.info-box-content -->
                </div>
            <!-- /.info-box -->
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-success">
                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Contacts</span>
                        <span class="info-box-number">{{ $contacts->count() }}</span>

                        {{--  <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>  --}}
                        @forelse ($contacts as $item)
                            <span class="progress-description">
                            <sup>Most Recent: </sup>{{ $item->title->latest()->first() }}
                        </span>
                        @empty
                            <span class="progress-description">
                                There are no Contacts
                            </span>
                        @endforelse
                    </div>
                <!-- /.info-box-content -->
                </div>
            <!-- /.info-box -->
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box bg-warning">
                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Testimonials</span>
                        <span class="info-box-number">{{ $testimonials->count() }}</span>

                        {{--  <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>  --}}
                        @forelse ($testimonials as $item)
                            <span class="progress-description">
                            <sup>Most Recent: </sup>{{ $item->title->latest()->first() }}
                        </span>
                        @empty
                            <span class="progress-description">
                                There are no Testimonials
                            </span>
                        @endforelse
                    </div>
                <!-- /.info-box-content -->
                </div>
            <!-- /.info-box -->
            </div>

        </div>
    </section>

  </div>


    <!-- /.content-header -->


@endsection
@push('scripts')

@endpush
