<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Деканат</title>
</head>
<body class="vh-100">
<nav class="navbar navbar-expand-lg navbar-light bg-transparent border-bottom rounded">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="/">Деканат</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Главная<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/edit">Редактирование<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-md-0">
                <input class="form-control invisible" type="text" placeholder="Введите запрос" aria-label="Search">
            </form>
        </div>
    </div>
</nav>
<div class="container-fluid h-100 m-0">
    <div class="container h-100 border-left border-right p-2">
        <a class="btn btn-primary w-100" href="/faculties" role="button">Факультеты</a>
        <div class="dropdown mt-2" id="dd_faculty">
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
        <div class="dropdown mt-2" id="dd_majors">
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
        <div class="dropdown mt-2" id="dd_courses">
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
</div>
</body>
</html>
