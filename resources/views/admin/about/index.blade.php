@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
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
        <div class="container-fluid">
            @include('layouts.partial.notify')
            <div class="row">
                @foreach ($about as $item)
                <div class="col-md-3">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                src="/img/about/{{($item->image)}}"
                                alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">{{ $item->name }}</h3>
                            <p class="text-muted text-center">{{ $item->city }}, {{  $item->country  }}</p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Projects Completed</b> <a class="float-right">1,322</a>
                                </li>
                            </ul>
                            <a href="{{ route('about.edit', $item->id) }}" class="btn btn-primary btn-block"><b>Edit</b></a>
                        </div>
                    </div>
                </div>
                @endforeach
                @if (count($about)==0)
                <a href="{{ route('about.create') }}" class="btn btn-sm btn-primary" >Create Profile</a>
                @endif
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h3>Education</h3>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Start Year</th>
                                    <th>End Year</th>
                                    <th>Institution</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($educations as $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->start_year }}</td>
                                    <td>{{ $item->end_year }}</td>
                                    <td>{{ $item->institution }}</td>
                                    <td>{!! $item->description !!}</td>
                                    <td>
                                        <td><a class="btn btn-danger" href="{{ Route('education.destroy', $item->id) }}">
                                            <form id="delete-form-{{ $item->id }}" action="{{ route('education.destroy',$item->id) }}" style="display: none;" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button type="button" class="btn btn-sm btn-danger" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $item->id }}').submit();
                                                }else {
                                                    event.preventDefault();}">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('education.edit', $item->id) }}" class="btn btn-info">
                                                <button class="btn btn-sm btn-info">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </button>
                                            </a>

                                        </td>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <a href="{{ route('education.create') }}" class="btn btn-sm btn-primary m-2 col-5" >
                            <i class="fas fa-user"></i> Add new Education Item
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Skill</th>
                      <th>Skill Level</th>
                      <th style="width: 40px">%</th>
                      <th> Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($skills as $item)
                      <tr>
                          <td>{{ $item->id }}</td>
                          <td>{{ $item->skill }}</td>
                          <td>
                              <div class="progress progress-xs">
                                    @if ($item->level < 50)
                                    <div class="progress-bar progress-bar-danger" style="width: {{ $item->level }}%">
                                    @elseif($item->level >= 50 && $item->level < 85)
                                    <div class="progress-bar progress-bar-warning" style="width: {{ $item->level }}%">
                                    @else
                                    <div class="progress-bar progress-bar-success" style="width: {{ $item->level }}%">
                                  @endif
                                </div>
                            </div>
                        </td>
                        <td>
                            @if ( $item->level  < 50 )
                            <span class="badge bg-danger">


                            @elseif ( $item->level >= 50 &&  $item->level < 85 )
                            <span class="badge bg-warning">
                            @else
                            <span class="badge bg-success">
                            @endif
                            {{ $item->level }}%
                        </span>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{ Route('skills.destroy', $item->id) }}">
                                <form id="delete-form-{{ ($item->id) }}" action="{{ route('skills.destroy',($item->id)) }}" style="display: none;" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button type="button" class="btn btn-sm btn-danger" onclick="if(confirm('Are you sure? You want to delete this?')){
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $item->id }}').submit();
                                }else {
                                    event.preventDefault();}">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                 <button class="btn btn-info mt-5">
                      <a href="{{ route('skills.create') }}" class="btn btn-block"> Add new Skill</a>
                  </button>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-9">
            <div class="card">
                        <div class="card-header">
                            <h3>Experience</h3>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Start Year</th>
                                    <th>End Year</th>
                                    <th>Company</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($experiences as $item)
                                <tr>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->start_year }}</td>
                                    <td>{{ $item->end_year }}</td>
                                    <td>{{ $item->company }}</td>
                                    <td>{!! $item->description !!}</td>
                                    <td>
                                        <td><a class="btn btn-danger" href="{{ Route('experience.destroy', $item->id) }}">
                                            <form id="delete-form-{{ $item->id }}" action="{{ route('experience.destroy',$item->id) }}" style="display: none;" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button type="button" class="btn btn-sm btn-danger" onclick="if(confirm('Are you sure? You want to delete this?')){
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $item->id }}').submit();
                                                }else {
                                                    event.preventDefault();}">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('experience.edit', $item->id) }}" class="btn btn-info">
                                                <button class="btn btn-sm btn-info">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </button>
                                            </a>

                                        </td>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <a href="{{ route('experience.create') }}" class="btn btn-sm btn-primary m-2 col-5" >
                            <i class="fas fa-user"></i> Add new Experience Item
                        </a>
                    </div>
        </div>
            <!-- /.card -->
        </div>
    </div>

</section>
</div>
@endsection
