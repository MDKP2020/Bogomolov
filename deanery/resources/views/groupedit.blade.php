@extends('head')

@section('title'){{$group_tab->name}} - редактирование@endsection

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
                    <h5 class="m-0 ml-2 font-weight-light">редактированиe</h5>
                    <a class="btn btn-sm btn-outline-secondary ml-auto" href="/{{$faculty_tab->faculty_id}}/{{$major_tab->major_id}}/{{$group_tab->group_id}}" role="button">Сохранить</a>
                </div>
                <div class="row m-0 h-100">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">№</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Фамилия</th>
                            <th scope="col">Отчество</th>
                            <th scope="col">№ Зачетной книжки</th>
                            <th scope="col"></th>
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
                                <td><button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModalCenter" datasrc="{{$student->id}}">Ред.</button></td>
                            <tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col border-top p-2 m-0 d-flex flex-row align-items-center align-bottom">
                    <a class="btn btn-sm btn-outline-secondary" href="#" role="button">Перевести на следующий курс</a>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Редактирование студента</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="student_surname">Фамилия</label>
                            <input type="text" class="form-control" id="student_surname" value="{{$student->surname}}">
                        </div>
                        <div class="form-group">
                            <label for="student_name">Имя</label>
                            <input type="text" class="form-control" id="student_name" value="{{$student->name}}">
                        </div>
                        <div class="form-group">
                            <label for="student_patronymic">Отчество</label>
                            <input type="text" class="form-control" id="student_patronymic" value="{{$student->patronymic}}">
                        </div>
{{--                        <input type="text" class="form-control" id="student_surname" placeholder="{{$student->surname}}">--}}
{{--                        <input type="text" class="form-control" id="student_name" placeholder="{{$student->name}}">--}}
{{--                        <input type="text" class="form-control" id="student_patronymic" placeholder="{{$student->patronymic}}">--}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                        <button type="button" class="btn btn-primary">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
