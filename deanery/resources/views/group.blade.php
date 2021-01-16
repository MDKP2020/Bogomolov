@extends('head')

@section('title'){{$group_tab->name}}@endsection

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
                    <h5 class="m-0">{{$group_tab->name}}</h5>
                    <a class="btn btn-sm btn-outline-secondary ml-auto" href="/{{$faculty_tab->faculty_id}}/{{$major_tab->major_id}}/{{$group_tab->group_id}}/edit" role="button">Редактировать</a>
                </div>
                <div class="row m-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">№</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Фамилия</th>
                            <th scope="col">Отчество</th>
                            <th scope="col">№ Зачетной книжки</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <th scope="row">{{$student->id+1}}</th>
                                <td>{{$student->surname}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->patronymic}}</td>
                                <td>{{$student->student_id}}</td>
                            <tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
