@extends('head')

@section('title'){{$student_info->student_id}}@endsection

@section('main_content')
    <div class="container h-100 border-right border-left bg-white shadow">
        <div class="row h-100">
            <div class="col-4 border-right p-0 d-flex flex-column">
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
                    <li class="list-group-item user-select-none">
                        <a class="text-dark" href="/{{$faculty_tab->faculty_id}}/{{$major_tab->major_id}}/groups">{{$group_tab->name}}</a>
                    </li>
                </ul>
            </div>
            <div class="col p-0 d-flex flex-column">
                <div class="row m-0 p-2 border-bottom d-flex align-items-center">
                    <h5 class="m-0">{{$student_info->student_id}}</h5>
                    <a class="btn btn-sm btn-outline-secondary ml-auto" href="/{{$faculty_tab->faculty_id}}/{{$major_tab->major_id}}/{{$group_tab->group_id}}/{{$student_info->student_id}}/edit" role="button">Редактировать</a>
                </div>
                <div class="row m-0 h-100">
                    <div class="container d-flex flex-column m-2 mt-3">
                        <div class="form-group">
                            <label for="student_surname" class="font-weight-bold">Фамилия</label>
                            <input type="text" class="form-control" id="student_surname" value="{{$student_info->surname}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="student_name" class="font-weight-bold">Имя</label>
                            <input type="text" class="form-control" id="student_name" value="{{$student_info->name}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="student_patronymic" class="font-weight-bold">Отчество</label>
                            <input type="text" class="form-control" id="student_patronymic" value="{{$student_info->patronymic}}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
