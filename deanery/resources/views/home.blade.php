@extends('head')

@section('title')Главная страница@endsection

@section('main_content')
    <div class="container h-100 border-left border-right p-2 d-flex flex-column align-items-center">
        <a class="btn btn-primary w-75" href="/faculties" role="button">Факультеты</a>
        <div class="dropdown mt-2 w-75" id="dd_faculty">
            <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dd_faculty_btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Факультеты
            </button>
            <div class="dropdown-menu w-100" aria-labelledby="dropdownMenu2">
                <button class="dropdown-item" type="button">ФАСТиВ</button>
                <button class="dropdown-item" type="button">ФАТ</button>
                <button class="dropdown-item" type="button">ФТКМ</button>
                <button class="dropdown-item" type="button">ФТПП</button>
                <button class="dropdown-item" type="button">ФЭиУ</button>
                <button class="dropdown-item" type="button">ФЭиВТ</button>
                <button class="dropdown-item" type="button">ХТФ</button>
            </div>
        </div>
        <div class="dropdown mt-2 w-75" id="dd_majors">
            <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dd_faculty_btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Направления
            </button>
            <div class="dropdown-menu w-100" aria-labelledby="dd_majors_btn">
                <button class="dropdown-item" type="button">Физика</button>
                <button class="dropdown-item" type="button">ИВТ</button>
                <button class="dropdown-item" type="button">Программная инженерия</button>
                <button class="dropdown-item" type="button">Приборостроение</button>
            </div>
        </div>
        <div class="dropdown mt-2 w-75" id="dd_courses">
            <button class="btn btn-secondary dropdown-toggle w-100" type="button" id="dd_courses_btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Курсы
            </button>
            <div class="dropdown-menu w-100" aria-labelledby="dd_majors_btn">
                <button class="dropdown-item" type="button">1 курс</button>
                <button class="dropdown-item" type="button">2 курс</button>
                <button class="dropdown-item" type="button">3 курс</button>
                <button class="dropdown-item" type="button">4 курс</button>
            </div>
        </div>
    </div>
@endsection
