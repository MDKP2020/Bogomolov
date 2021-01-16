@extends('head')

@section('title')Группы {{$faculty_tab->name}}@endsection

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
                    <li class="list-group-item user-select-none">
                        <a class="text-dark" href="/{{$faculty_tab->faculty_id}}/majors">{{$major_tab->name}}</a>
                    </li>
                    <li class="list-group-item user-select-none font-weight-bold">Группы</li>
                </ul>
            </div>
            <div class="col p-0 d-flex flex-column">
                <div class="row m-0 p-2 border-bottom d-flex align-items-center">
                    <h5 class="m-0">Выберите нужный пункт</h5>
                    <a class="btn btn-sm btn-outline-secondary ml-auto" href="#" role="button">Редактировать</a>
                </div>
                <div class="row m-0 p-2 border-bottom d-flex align-items-center">
                    <div class="m-2">Курс:</div>
                    <div class="dropdown">
                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @if($_SERVER['REQUEST_URI'] == "/{$faculty_tab->faculty_id}/{$major_tab->major_id}/groups/1")
                                1 курс
                            @elseif($_SERVER['REQUEST_URI'] == "/{$faculty_tab->faculty_id}/{$major_tab->major_id}/groups/2")
                                2 курс
                            @elseif($_SERVER['REQUEST_URI'] == "/{$faculty_tab->faculty_id}/{$major_tab->major_id}/groups/3")
                                3 курс
                            @elseif($_SERVER['REQUEST_URI'] == "/{$faculty_tab->faculty_id}/{$major_tab->major_id}/groups/4")
                                4 курс
                            @else
                                Все курсы
                            @endif
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/{{$faculty_tab->faculty_id}}/{{$major_tab->major_id}}/groups">Все курсы</a>
                            <a class="dropdown-item" href="/{{$faculty_tab->faculty_id}}/{{$major_tab->major_id}}/groups/1">1 курс</a>
                            <a class="dropdown-item" href="/{{$faculty_tab->faculty_id}}/{{$major_tab->major_id}}/groups/2">2 курс</a>
                            <a class="dropdown-item" href="/{{$faculty_tab->faculty_id}}/{{$major_tab->major_id}}/groups/3">3 курс</a>
                            <a class="dropdown-item" href="/{{$faculty_tab->faculty_id}}/{{$major_tab->major_id}}/groups/4">4 курс</a>
                        </div>
                    </div>
                </div>
                <div class="container p-0 m-0 h-100">
                    <div class="row m-3">
                        @foreach($groups as $group)
                            <div class="col-4 mt-3">
                                <a class="btn btn-lg btn-outline-secondary w-100" href="/{{$faculty_tab->faculty_id}}/{{$major_tab->major_id}}/{{$group->group_id}}" role="button">{{$group->name}}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
