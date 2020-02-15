@extends('layouts.app')

@push('css')

@endpush
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
          @include('layouts.partial.notify')
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
        <div class="row">
           <div class="col-lg-3 col-6">
            <!-- Blog posts -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $posts->count() }}</h3>

                <p>Blog Posts</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ Route('post.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- Portfolio Posts -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $portfolios->count() }}</h3>

                <p>Portfolio Posts</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ Route('portfolio.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- Contacts -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $contacts->count() }}</h3>

                <p>Contacts</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ Route('contact.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- Testimonials -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $testimonials->count() }}</h3>

                <p>Testimonials</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ Route('testimonials.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          {{-- Background Image Placement --}}

        </div>
    </section>
    <section class="content">
        <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
                <form action="{{ route('wallpaper.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="image">Background Image</label>
                            <div class="card-body pad">
                                <div class="mb-3">
                                    <input type="file" name="image" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                           <input type="submit" value="Add New Background" class="btn btn-sm btn-info">
                        </div>
                    </div>
                </form>
          </div>
          <div class="col-md-4">
              <div class="card card-primary">
                  <table class="table-bordered">
                      <thead>
                          <tr>
                              <th>Twitter</th>
                              <th>Instagram</th>
                              <th>Facebook</th>
                              <th>YouTube</th>
                              <th>LinkedIn</th>
                              <th>Dribbble</th>
                              <th>Github</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($socials as $social)
                          <td>{{ $social->twitter }}</td>
                          <td>{{ $social->instagram }}</td>
                          <td>{{ $social->facebook }}</td>
                          <td>{{ $social->youtube }}</td>
                          <td>{{ $social->linkedin }}</td>
                          <td>{{ $social->dribbble }}</td>
                          <td>{{ $social->github }}</td>
                          @endforeach
                      </tbody>
                  </table>
              </div>
              @if ($socials->count() == 0)
              <div class="col-3">
                  <a href="{{ route('social.create') }}" class="btn btn-sm btn-primary" ><i class="fas fa-crosshairs"></i></a>
                </div>
            @endif
          </div>
        </div>
      </div>
    </section>


  </div>


    <!-- /.content-header -->


@endsection
@push('scripts')

@endpush
