@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавление комнаты</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Путёвки</li>
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
                        <form action="{{route("admin.room.store")}}" method="POST" class="col-4" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label>Номер</label>
                                <input type="text" class="form-control" name="number" placeholder="Номер">
                                @error('number')
                                <div class="text-warning">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Добавить фото комнаты</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="room_image">
                                        <label class="custom-file-label"  >Выберите изображение</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                                @error('room_image')
                                <div class="text-warning">{{$message}}</div>
                                @enderror
                            </div>


                            <input type="submit" class="btn btn-primary" value="Добавить">

                        </form>
                    </div>
                </div>
                <!-- /.row -->


            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
