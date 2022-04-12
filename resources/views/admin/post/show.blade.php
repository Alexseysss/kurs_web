@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-2">Новость: {{$post->title}}</h1>
                        <a href="{{route('admin.post.edit', $post->id)}}" class="text-success"><i class="nav-icon fas fa-pen"></i></a>
                        <form action="{{route('admin.post.delete', $post->id)}}"
                              method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="nav-icon fas fa-trash text-danger" role="button"></i>
                            </button>
                        </form>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Новости</li>
                            <li class="breadcrumb-item active">{{$post->title}}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                        <tr>
                                            <td>ID</td>
                                            <td>{{$post->id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Название</td>
                                            <td>{{$post->title}}</td>
                                        </tr>
                                        <tr>
                                            <td>Контент</td>
                                            <td>{!! $post->content !!}</td>
                                        </tr>
                                        <tr>
                                            <td>Фото</td>
                                            <td>
                                                <div class="mb-3">{{$post->post_image}}</div>
                                                <div class="w-100">
                                                    <img src="{{ url('storage/' . $post->post_image) }}" alt="post_image" class="w-50" >
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
