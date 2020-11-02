@extends('head')

@section('title')Курсы ПрИн@endsection

@section('main_content')
    <div class="container h-100 border-right border-left bg-white shadow">
        <div class="row h-100">
            <div class="col-4 border-right p-0">
                <div class="col border-bottom mt-3">
                    <h5>Разделы</h5>
                </div>
                <ul class="list-group list-group-flush m-2">
                    <li class="list-group-item user-select-none">ФЭиВТ</li>
                    <li class="list-group-item user-select-none">Программная инженерия</li>
                    <li class="list-group-item user-select-none font-weight-bold">Выберите курс</li>
                </ul>
            </div>
            <div class="col p-0">
                <div class="col border-bottom mt-3">
                    <h5>Выберите нужный пункт</h5>
                </div>
                <div class="row m-3">
                    <div class="col-4">
                        <a class="btn btn-lg btn-outline-secondary h-100 w-100" href="#" role="button">1 курс</a>
                    </div>
                    <div class="col-4">
                        <a class="btn btn-lg btn-outline-secondary h-100 w-100" href="#" role="button">2 курс</a>
                    </div>
                    <div class="col-4">
                        <a class="btn btn-lg btn-outline-secondary h-100 w-100" href="#" role="button">3 курс</a>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-4">
                        <a class="btn btn-lg btn-outline-secondary h-100 w-100" href="/fevt/prin/4/groups" role="button">4 курс</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
