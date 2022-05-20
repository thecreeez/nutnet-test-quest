<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">Пластинки</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/edit">Изменить</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-success disabled" type="submit">Войти</button>
                </form>
            </div>
        </div>
    </nav>
</header>

<div class="container">
    <div class="alert alert-danger" role="alert">
        Неверный логин или пароль!
    </div>

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
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
