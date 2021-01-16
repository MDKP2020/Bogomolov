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
    <link rel="stylesheet" href="app.css">
    <title>@yield('title')</title>
</head>
<body class="vh-100 bg-light">
    <div class="container-fluid h-100 p-0 d-flex flex-column">
        <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom rounded">
            <div class="container">
                <a class="navbar-brand font-weight-bold" href="/">Деканат</a>
                <input type="date" id="calendar" name="calendar">
                <script>
                    calendar = document.getElementById('calendar');

                    timeEllapsed = Date.now();
                    currentDate = new Date(timeEllapsed);
                    curDate = currentDate.getFullYear() + '-' + currentDate.getMonth() + 1 + '-' + currentDate.getDate();

                    calendar.valueAsDate = currentDate;
                    calendar.max = curDate;
                </script>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample09">
                    <ul class="navbar-nav mr-auto"></ul>
                    <form class="form-inline my-2 my-md-0">
                        <input class="form-control" type="text" placeholder="Введите запрос" aria-label="Search">
                    </form>
                </div>
            </div>
        </nav>

        @yield('main_content')
    </div>
</body>
</html>


