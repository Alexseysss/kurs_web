@extends('client.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Изменение профиля</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('client.main.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Профиль</li>
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
                        <form action="{{route('client.user.update', $user->id )}}" method="POST" class="col-4">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label>Имя</label>
                                <input type="text" class="form-control" name="name" placeholder="Имя"
                                       value="{{$user->name}}">
                                @error('name')
                                <div class="text-warning">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Фамилия</label>
                                <input type="text" class="form-control" name="surname" placeholder="Фамилия"
                                       value="{{$user->surname}}">
                                @error('surname')
                                <div class="text-warning">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email"
                                       value="{{$user->email}}">
                                @error('email')
                                <div class="text-warning">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="user_id" value="{{$user->id}}">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="role" value="{{$user->role}}">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Изменить">
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
