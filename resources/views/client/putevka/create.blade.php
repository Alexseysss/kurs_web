@extends('client.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Заказ путёвки</h1>
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
                        <form action="{{route("client.putevka.store")}}" method="POST" class="col-4">
                            @csrf
                            <div class="form-group">
                                <label>Пользователь</label>
                                <input type="text" class="form-control" name="status" placeholder="{{ Auth::user()->name }} {{ Auth::user()->surname }}" disabled>
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="status" value="Заказано">
                            </div>

                            <div class="form-group">
                                <label>Дата планируемого заезда:</label>
                                <div class="input-group date" id="indate" data-target-input="nearest">
                                    <input type="text" name="date_in" class="form-control datetimepicker-input"
                                           data-target="#indate">
                                    <div class="input-group-append" data-target="#indate"
                                         data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                @error('date_in')
                                    <div class="text-warning"> Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Дата планируемого отъезда:</label>
                                <div class="input-group date" id="outdate" data-target-input="nearest">
                                    <input type="text" name="date_out" class="form-control datetimepicker-input"
                                           data-target="#outdate">
                                    <div class="input-group-append" data-target="#outdate"
                                         data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                @error('date_out')
                                <div class="text-warning"> Это поле необходимо заполнить</div>
                                @enderror
                            </div>



                            <input type="submit" class="btn btn-primary" value="Заказать">

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
