@extends('head')

@section('title')Направления ФЭиВТ@endsection

@section('main_content')
    <div class="container h-100 border-right border-left bg-white shadow">
        <div class="row h-100">
            <div class="col-4 border-right p-0">
                <div class="row m-0 p-3 border-bottom d-flex align-items-center">
                    <h5 class="m-0">Разделы</h5>
                </div>
                <ul class="list-group list-group-flush m-2">
                    <li class="list-group-item user-select-none">
                        <a class="text-dark" href="/faculties">ФЭиВТ</a>
                    </li>
                    <li class="list-group-item user-select-none font-weight-bold">Выберите направление</li>
                </ul>
            </div>
            <div class="col p-0 d-flex flex-column">
                <div class="row m-0 p-2 border-bottom d-flex align-items-center">
                    <h5 class="m-0">Режим редактирования</h5>
                    <a class="btn btn-sm btn-outline-secondary ml-auto" href="/fevt/majors" role="button">Сохранить</a>
                </div>
                <div class="container p-0 m-0 h-100">
                    <div class="row m-3">
                        <div class="col-4">
                            <a class="btn btn-lg btn-outline-secondary h-100 w-100" href="#" role="button">Физика</a>
                        </div>
                        <div class="col-4">
                            <a class="btn btn-lg btn-outline-secondary h-100 w-100" href="#" role="button">ИВТ</a>
                        </div>
                        <div class="col-4">
                            <a class="btn btn-lg btn-outline-secondary h-100 w-100" href="#" role="button">ПрИн</a>
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-4">
                            <a class="btn btn-lg btn-outline-secondary h-100 w-100" href="#" role="button">Приборостроение</a>
                        </div>
                        <div class="col-4">
                            <a class="btn btn-lg btn-outline-success h-100 w-100" href="#" role="button">Добавить</a>
                        </div>
                    </div>
                </div>
                <div class="col border-top p-2 m-0 d-flex flex-row align-items-center align-bottom">
                    <a class="btn btn-sm btn-outline-secondary" href="#" role="button">Перевести на следующий курс</a>
                </div>
            </div>
        </div>
    </div>
@endsection
