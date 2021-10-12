@extends('head')

@section('content')
    <header style="text-align: center; width: 100%">
        Сформируйте отчет
    </header><br>
    <form>
        <div style="display: flex; flex-direction: column; width: 40%; margin: 0 auto">
            <select name="month">
                <option selected>Выберите отчетный месяц</option>
                <option value="01">Январь</option>
                <option value="02">Февраль</option>
                <option value="03">Март</option>
                <option value="04">Апрель</option>
                <option value="05">Май</option>
                <option value="06">Июнь</option>
                <option value="07">Июль</option>
                <option value="08">Август</option>
                <option value="09">Сентябрь</option>
                <option value="10">Октябрь</option>
                <option value="11">Ноябрь</option>
                <option value="12">Декабрь</option>
            </select>
            <input type="text" name="year" placeholder="Введите отчетный год в формате ГГГГ">
            <select name="type_of_customer">
                <option selected value="">Выберите тип клиента(необязательно)</option>
                <option value="0">Физическое лицо</option>
                <option value="1">Юридическое лицо</option>
            </select>
            <input type="submit" value="Смотреть" style="width: 20%; margin: 20px auto;">
        </div>
    </form>
    <div class="table">

    </div>
@endsection
