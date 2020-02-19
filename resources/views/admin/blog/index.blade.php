@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content">

        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row d-flex align-items-stretch">
                    @foreach ($posts as $post )
                    <div class="col-12 col-sm-6 col-md-12 d-flex align-items-stretch">
                        <div class="card bg-light">
                            <div class="card-header text-muted border-bottom-0">
                                {{ $post->category }}
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7 col-sm-6 col-md-9">
                                        <h2 class="lead"><b>{{ $post->title }}</h2>
                                        <p class="text-muted">{!! Str::limit($post->content, 55) !!}</p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small">
                                                <span class="fa-li">
                                                    <i class="fas fa-lg fa-building"></i>
                                                </span> Posted At: {{ $post->created_at }}
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-5 col-sm-6 col-md-3 text-center">
                                        <img src="/img/post/{{ ( $post->image) }}" alt="" class="img-circle img-fluid" width="210" >
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">

                                    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-user"></i> Edit This Item
                                    </a>
                                    {{-- <a href="#" class="btn btn-sm bg-teal">
                                        <i class="fas fa-comments"></i>
                                    </a> --}}
                                    <a class="btn btn-danger" href="{{ Route('post.destroy', $post->id) }}">
                                        <form id="delete-form-{{ $post->id }}" action="{{ route('post.destroy',$post->id) }}" style="display: none;" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <button type="button" class="btn btn-sm btn-danger" onclick="if(confirm('Are you sure? You want to delete this?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $post->id }}').submit();
                                        }else {
                                            event.preventDefault();}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <a href="{{ route('post.create') }}" class="btn btn-sm btn-primary m-5">
            <i class="fas fa-user"></i> Add new Item
        </a>
    </section>
    <section class="content">
        <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with minimal features & hover style</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Category</th>
                  <th>Date Created</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->created_at }}</td>
                        </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
          </div>
          <a href="{{ route('post_categories.create') }}" class="btn btn-sm btn-primary m-5">
            <i class="fas fa-user"></i> Add new Category
        </a>
        </div>
    </div>
    </section>


</div>


@endsection
