@extends('parts.app')

@section('title')Авторизация@endsection

@section('notifications')
    <div class="alert alert-danger" role="alert">
        Неверный логин или пароль!
    </div>
@endsection
@section('content')
    <form>
        <div class="mb-3">
            <label for="inputLogin" class="form-label">Логин</label>
            <input type="text" class="form-control" id="inputLogin">
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="inputPassword">
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="typeAuth" id="inputRegister">
            <label class="form-check-label" for="inputRegister">
                Регистрация
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="typeAuth" id="inputAuth" checked>
            <label class="form-check-label" for="inputAuth">
                Авторизация
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
@endsection
