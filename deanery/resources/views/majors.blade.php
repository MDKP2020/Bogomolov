@extends('head')

@section('title')Направления {{$faculty_tab->name}}@endsection

@section('main_content')
    <div class="container h-100 border-right border-left bg-white shadow">
        <div class="row h-100">
            <div class="col-4 border-right p-0">
                <div class="row m-0 p-3 border-bottom d-flex align-items-center">
                    <h5 class="m-0">Разделы</h5>
                </div>
                <ul class="list-group list-group-flush m-2">
                    <li class="list-group-item user-select-none">
                        <a class="text-dark" href="/faculties">{{$faculty_tab->name}}</a>
                    </li>
                    <li class="list-group-item user-select-none font-weight-bold">Выберите направление</li>
                </ul>
            </div>
            <div class="col p-0 d-flex flex-column">
                <div class="row m-0 p-2 border-bottom d-flex align-items-center">
                    <h5 class="m-0">Выберите нужный пункт</h5>
                    <a class="btn btn-sm btn-outline-secondary ml-auto" href="#" role="button">Редактировать</a>
                </div>
                <div class="container p-0 m-0 h-100">
                    <div class="row m-3">
                        @foreach($majors as $major)
                            <div class="col-4 mt-3">
                                <a class="btn btn-lg btn-outline-secondary w-100" href="/{{$faculty_tab->id}}/{{$major->id}}/groups" role="button">{{$major->name}}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
