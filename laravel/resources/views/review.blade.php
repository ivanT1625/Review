@extends('layout')
@section('title')Отзывы@endsection
@section('main_content')
    <h1>Форма добавления отзыва</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>{{-- выввод ошибок --}}
    @endif
    <form method="post" action="/review/check">
        @csrf
{{--     @csrf - добавление токена  --}}
        <input type="email" name="email" id="email" placeholder="Введите email" class="form-control mb-3">
        <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control mb-3">
        <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control mb-3"></textarea><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>

    <h1 class="my-4">Все отзывы</h1>
    @foreach($reviews as $el)
        <div class="alert alert-warning">
            <h4>{{$el->subject}}</h4>
            <b>{{$el->email}}</b>
            <p>{{$el->message}}</p>
        </div>
    @endforeach
@endsection
