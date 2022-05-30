@extends('parts.app')

@section('title')Добавление@endsection

@section('content')
    <div class="row">
        <div class="col">
            <h4>Форма</h4>
            <form action="{{ route('album-add') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="inputAuthor" class="form-label">Автор</label>
                    <input type="text" class="form-control" id="inputAuthor" name="author">
                </div>
                <div class="mb-3">
                    <label for="inputName" class="form-label">Альбом</label>
                    <input type="text" class="form-control" id="inputName" name="name">
                </div>
                <div class="mb-3">
                    <label for="inputDescription" class="form-label">Описание</label>
                    <textarea class="form-control" id="inputDescription" rows="3" name="description"></textarea>
                </div>

                <div class="mb-3">
                    <label for="inputPic" class="form-label">URL обложки</label>
                    <input type="text" class="form-control" id="inputPic" name="cover_url">
                </div>

                <button type="submit" class="btn btn-primary" name="edit">Добавить</button>
            </form>
        </div>
        <div class="col">
            <div class="d-flex h-100 flex-column justify-content-center">
                <h4>Предпросмотр</h4>

                <div class="card mb-3 row shadow-sm" style="max-width: 540px;">
                    <div class="row g-0" style="max-height: 200px">
                        <div class="col-md-4" style="max-height: 200px">
                            <img id="lookoutPic" src="https://images.genius.com/1ed8617297a59bb387aa035bd43f5a36.1000x1000x1.jpg" class="img-fluid rounded-start h-100" alt="Тут будет обложка">
                        </div>
                        <div class="col-md-8" style="max-height: 200px">
                            <div class="card-body">
                                <h5 class="card-title" id="lookoutName">Тут будет ваше прекрасное название</h5>
                                <h6 class="card-text" id="lookoutAuthor">А тут ваш замечательный автор</h6>
                                <p class="card-text" id="lookoutDescription" style="max-height: 100px; text-overflow: ellipsis; overflow: hidden">А здесь? Конечно же описание пластинки!!!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById("inputAuthor").onchange = (el) => {
            document.getElementById("lookoutAuthor").innerHTML = el.target.value;
        }

        document.getElementById("inputName").onchange = (el) => {
            console.log(el.target.value);
            document.getElementById("lookoutName").innerHTML = el.target.value;
        }

        document.getElementById("inputDescription").onchange = (el) => {
            console.log(el.target.value);
            document.getElementById("lookoutDescription").innerHTML = el.target.value;
        }

        document.getElementById("inputPic").onchange = (el) => {
            document.getElementById("lookoutPic").src = el.target.value;
        }
    </script>
@endsection
