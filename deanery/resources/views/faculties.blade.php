@extends('head')

@section('title')Факультеты@endsection

@section('main_content')
    <div class="container h-100 border-right border-left bg-white shadow">
        <div class="row h-100">
            <div class="col-4 border-right p-0">
                <div class="col border-bottom pt-3 pb-2">
                    <h5>Разделы</h5>
                </div>
                <ul class="list-group list-group-flush m-2">
                    <li class="list-group-item user-select-none font-weight-bold">Выберите факультет</li>
                </ul>
            </div>
            <div class="col p-0">
                <div class="col border-bottom pt-3 pb-2 d-flex flex-row align-items-center">
                    <h5>Выберите нужный пункт</h5>
                    <button type="button" class="btn btn-sm btn-outline-secondary ml-auto">Редактировать</button>
                </div>
                <div class="row m-3">
                    <div class="col-4">
                        <a class="btn btn-lg btn-outline-secondary h-100 w-100" href="#" role="button">ФАСТиВ</a>
                    </div>
                    <div class="col-4">
                        <a class="btn btn-lg btn-outline-secondary h-100 w-100" href="#" role="button">ФАТ</a>
                    </div>
                    <div class="col-4">
                        <a class="btn btn-lg btn-outline-secondary h-100 w-100" href="#" role="button">ФТКМ</a>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-4">
                        <a class="btn btn-lg btn-outline-secondary h-100 w-100" href="#" role="button">ФТПП</a>
                    </div>
                    <div class="col-4">
                        <a class="btn btn-lg btn-outline-secondary h-100 w-100" href="#" role="button">ФЭиУ</a>
                    </div>
                    <div class="col-4">
                        <a class="btn btn-lg btn-outline-secondary h-100 w-100" href="/fevt/majors" role="button">ФЭиВТ</a>
                    </div>
                </div>
                <div class="row m-3">
                    <div class="col-4">
                        <a class="btn btn-lg btn-outline-secondary h-100 w-100" href="#" role="button">ХТФ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
