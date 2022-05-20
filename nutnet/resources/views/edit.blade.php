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
                        <a class="nav-link disabled" aria-current="page" href="/edit">Изменить</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a class="btn btn-outline-success" href="/auth">Войти</a>
                </form>
            </div>
        </div>
    </nav>
</header>

<div class="container">
    <div class="row">
        <div class="col">
            <h4>Форма</h4>
            <form>
                <div class="mb-3">
                    <label for="inputAuthor" class="form-label">Автор</label>
                    <input type="text" class="form-control" id="inputAuthor">
                </div>
                <div class="mb-3">
                    <label for="inputName" class="form-label">Альбом</label>
                    <input type="text" class="form-control" id="inputName">
                </div>
                <div class="mb-3">
                    <label for="inputDescription" class="form-label">Описание</label>
                    <textarea class="form-control" id="inputDescription" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="inputPic" class="form-label">URL обложки</label>
                    <input type="text" class="form-control" id="inputPic">
                </div>

                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
        <div class="col">
            <div class="d-flex h-100 flex-column justify-content-center">
                <h4>Предпросмотр</h4>
                <div class="card mb-3 row shadow-sm align-middle" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://images.genius.com/1ed8617297a59bb387aa035bd43f5a36.1000x1000x1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">47: Revolution and World</h5>
                                <h6 class="card-text">Джизус</h6>
                                <p class="card-text">Название альбома отсылает нас к Группе Кино и альбомам «45» и «46», что фактически является их продолжением. Большее количество песен в альбоме выполнены в жанре рок, кроме «Войной» которая в жанре рэп.</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
