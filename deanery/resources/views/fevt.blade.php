<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <div class="container h-100 border-right border-left">
            <div class="row h-100">
                <div class="col-4 border-right p-0">
                    <div class="col border-bottom mt-3">
                        <h5>Разделы</h5>
                    </div>
                    <ul class="list-group list-group-flush m-2">
                        <li class="list-group-item user-select-none">ФЭиВТ</li>
                        <li class="list-group-item user-select-none font-weight-bold">Выберите направление</li>
                    </ul>
                </div>
                <div class="col p-0">
                    <div class="col border-bottom mt-3">
                        <h5>Выберите нужный пункт</h5>
                    </div>
                    <div class="row m-3">
                        <div class="col-4">
                            <a class="btn btn-lg btn-outline-secondary h-100 w-100" href="#" role="button">Физика</a>
                        </div>
                        <div class="col-4">
                            <a class="btn btn-lg btn-outline-secondary h-100 w-100" href="#" role="button">ИВТ</a>
                        </div>
                        <div class="col-4">
                            <a class="btn btn-lg btn-outline-secondary h-100 w-100" href="/fevt/prin/courses" role="button">ПрИн</a>
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-4">
                            <a class="btn btn-lg btn-outline-secondary h-100 w-100" href="#" role="button">Приборостроение</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
