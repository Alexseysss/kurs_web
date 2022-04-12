@extends('client.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Изменение путёвки</h1>
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
                        <form action="{{route('client.putevka.update', $putevka->id )}}" method="POST" class="col-4">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label>Пользователь</label>
                                <select name="user_id" class="form-control">
                                    <option></option>
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}"
                                            {{$user->id == $putevka->user_id ? 'selected' : '' }}
                                        >{{$user->name}} {{$user->surname}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Статус</label>
                                <input type="text" class="form-control" name="status" placeholder="Статус петувки"
                                       value="{{$putevka->status}}">
                                @error('status')
                                <div class="text-warning"> Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Комната</label>
                                <select name="room_id" class="form-control">
                                    <option></option>
                                    @foreach($rooms as $room)
                                        <option value="{{$room->id}}"
                                            {{$room->id == $putevka->room_id ? 'selected' : '' }}
                                        >{{$room->number}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Дата покупки:</label>
                                <div class="input-group date" id="buydate" data-target-input="nearest">
                                    <input type="text" name="date_buy" class="form-control datetimepicker-input"
                                           data-target="#buydate" value="{{$putevka->date_buy}}">
                                    <div class="input-group-append" data-target="#buydate"
                                         data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                @error('date_in')
                                <div class="text-warning"> Это поле необходимо заполнить</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Дата планируемого заезда:</label>
                                <div class="input-group date" id="indate" data-target-input="nearest">
                                    <input type="text" name="date_in" class="form-control datetimepicker-input"
                                           data-target="#indate" value="{{$putevka->date_in}}">
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
                                           data-target="#outdate" value="{{$putevka->date_out}}">
                                    <div class="input-group-append" data-target="#outdate"
                                         data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                                @error('date_out')
                                <div class="text-warning"> Это поле необходимо заполнить</div>
                                @enderror
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
