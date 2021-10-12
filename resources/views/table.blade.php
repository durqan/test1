@extends('head')

@section('content')
    @if(!empty($table))
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Услуга</th>
                <th scope="col">Баланс на начало периода</th>
                <th scope="col">Приход</th>
                <th scope="col">Расход</th>
                <th scope="col">Перерасчет</th>
                <th scope="col">Итого</th>
            </tr>
            </thead>
            <tbody>
            @foreach($table as $key => $value)
                <tr>
                    <td>{{$key}}</td>
                    <td>0</td>
                    <td>{{$value['income']}}</td>
                    <td>{{$value['expenditure']}}</td>
                    <td>{{$value['recosting']}}</td>
                    <td>{{$value['total']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h1>Ошибка</h1>
    @endif
@endsection
