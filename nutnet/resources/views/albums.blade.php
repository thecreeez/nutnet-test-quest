@extends('parts.app')

@section('title')Альбомы@endsection

@section('notifications')
    <div class="alert alert-success" role="alert">
        Вы успешно вошли в аккаунт как biliboba
    </div>
@endsection
@section('content')
    <div class="d-flex flex-column align-items-center" >
        @foreach($data as $el)
            <div class="card mb-3 row shadow-sm" style="max-width: 540px;">
                <div class="row g-0" style="max-height: 200px">
                    <div class="col-md-4" style="max-height: 200px">
                        <img src="{{ $el->cover_url }}" class="img-fluid rounded-start h-100" alt="...">
                    </div>
                    <div class="col-md-8" style="max-height: 200px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $el->name }}</h5>
                            <h6 class="card-text">{{ $el->author }}</h6>
                            <p class="card-text" style="max-height: 100px; text-overflow: ellipsis; overflow: hidden">{{ $el->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
@endsection
