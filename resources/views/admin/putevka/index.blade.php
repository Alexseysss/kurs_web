@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Путёвки</h1>
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
                    <div class="col-2 mb-3">
                        <a href="{{route('admin.putevka.create')}}" class="btn btn-block btn-primary">Добавить</a>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Пользователь</th>
                                        <th>Статус</th>
                                        <th>Комната</th>
                                        <th>Дата покупки</th>
                                        <th>Дата заезда</th>
                                        <th>Дата отъезда</th>
                                        <th colspan="3" class="text-center">Действие</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($putevkas as $putevka)
                                        <tr>
                                            <td>{{$putevka->id}}</td>
                                            <td>{{$putevka->user->name ?? ''}} {{$putevka->user->surname  ?? ''}}</td>
                                            <td>{{$putevka->status}}</td>
                                            <td>{{$putevka->room->number ?? ''}}</td>
                                            <td>{{$putevka->date_buy}}</td>
                                            <td>{{$putevka->date_in}}</td>
                                            <td>{{$putevka->date_out}}</td>
                                            <td class="text-right"><a href="{{route('admin.putevka.show', $putevka->id)}}"><i
                                                        class="nav-icon fas fa-eye"></i></a></td>
                                            <td class="text-center"><a href="{{route('admin.putevka.edit', $putevka->id)}}"
                                                   class="text-success"><i class="nav-icon fas fa-pen"></i></a></td>
                                            <td>
                                                <form action="{{route('admin.putevka.delete', $putevka->id)}}"
                                                      method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="nav-icon fas fa-trash text-danger" role="button"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>


                    </div>
                </div>
                <!-- /.row -->


            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
