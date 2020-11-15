@extends('head')

@section('title'){{$id}}@endsection

@section('main_content')
    <div class="container h-100 border-right border-left bg-white shadow">
        <div class="row h-100">
            <div class="col-4 border-right p-0 d-flex flex-column">
                <div class="row m-0 p-3 border-bottom d-flex align-items-center">
                    <h5 class="m-0">Разделы</h5>
                </div>
                <ul class="list-group list-group-flush m-2">
                    <li class="list-group-item user-select-none">
                        <a class="text-dark" href="/faculties">ФЭиВТ</a>
                    </li>
                    <li class="list-group-item user-select-none">
                        <a class="text-dark" href="/fevt/majors">Программная инженерия</a>
                    </li>
                    <li class="list-group-item user-select-none">
                        <a class="text-dark" href="/fevt/prin/courses">4 курс</a>
                    </li>
                    <li class="list-group-item user-select-none font-weight-bold">
                        <a class="text-dark" href="/fevt/prin/4/groups">{{$id}}</a>
                    </li>
                </ul>
            </div>
            <div class="col p-0 d-flex flex-column">
                <div class="row m-0 p-2 border-bottom d-flex align-items-center">
                    <h5 class="m-0">{{$id}}</h5>
                    <a class="btn btn-sm btn-outline-secondary ml-auto" href="/fevt/prin/4/{{$id}}/edit" role="button">Редактировать</a>
                </div>
                <div class="row m-0">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Фамилия</th>
                            <th scope="col">№ Зачетной книжки</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Артемов</td>
                            <td>Данила</td>
                            <td>17106092</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Баклан</td>
                            <td>Варвара</td>
                            <td>17562153</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Богомолов</td>
                            <td>Иван</td>
                            <td>17435645</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Киселев</td>
                            <td>Юрий</td>
                            <td>17356482</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Крымова</td>
                            <td>Мария</td>
                            <td>17246362</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Меркулов</td>
                            <td>Владислав</td>
                            <td>17315468</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Носкин</td>
                            <td>Виктор</td>
                            <td>17145326</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Сасов</td>
                            <td>Дмитрий</td>
                            <td>17065432</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Степанов</td>
                            <td>Станислав</td>
                            <td>17654862</td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>Турицына</td>
                            <td>Алина</td>
                            <td>17145623</td>
                        </tr>
                        <tr>
                            <th scope="row">11</th>
                            <td>Чечеткин</td>
                            <td>Павел</td>
                            <td>17234546</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
