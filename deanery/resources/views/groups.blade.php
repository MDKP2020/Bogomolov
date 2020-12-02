@extends('head')

@section('title')Группы 4 курса ПрИн@endsection

@section('main_content')
    <div class="container h-100 border-right border-left bg-white shadow">
        <div class="row h-100">
            <div class="col-4 border-right p-0">
                <div class="row m-0 p-3 border-bottom d-flex align-items-center">
                    <h5 class="m-0">Разделы</h5>
                </div>
                <ul class="list-group list-group-flush m-2">
                    <li class="list-group-item user-select-none">
                        <a class="text-dark" href="/courses">4 курс</a>
                    </li>
                    <li class="list-group-item user-select-none">
                        <a class="text-dark" href="/4/faculties">ФЭиВТ</a>
                    </li>
                    <li class="list-group-item user-select-none">
                        <a class="text-dark" href="/4/5/majors">Программная инженерия</a>
                    </li>
                    <li class="list-group-item user-select-none font-weight-bold">Выберите группу</li>
                </ul>
            </div>
            <div class="col p-0 d-flex flex-column">
                <div class="row m-0 p-2 border-bottom d-flex align-items-center">
                    <h5 class="m-0">Выберите нужный пункт</h5>
                    <a class="btn btn-sm btn-outline-secondary ml-auto" href="#" role="button">Редактировать</a>
                </div>
                <div class="container p-0 m-0 h-100">
                    <div class="row m-3">
                        @foreach($groups as $group)
                            <div class="col-4 mt-3">
                                <a class="btn btn-lg btn-outline-secondary w-100" href="/4/5/2/{{$group->id}}" role="button">{{$group->name}}</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
