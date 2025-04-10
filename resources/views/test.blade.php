@extends('layouts.layout')

@section('content')

    <!-- Создание объявления -->
    @if (Auth::check())
        <form action="{{route('test1', Auth::user()->id)}}" method="POST" enctype="multipart/form-data" class="mt-4">
            @csrf

            <div class="form-group">
                <label for="Text1">Описание:</label>
                <textarea name="Text1" class="form-control" rows="2" required></textarea>

            </div>
            <div class="form-group">
                <label for="Text2">Описание Основное:</label>
                <textarea name="Text2" class="form-control" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="Text2">Цена:</label>
                <textarea name="price" class="form-control" rows="1" required></textarea>
            </div>
            <div class="form-group">
                <input type="file" name="img" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>

    @endif




    <!-- Вывод объявлений  -->

    @foreach ($tests as $test)
        <!-- И если админ можно редактировать -->
        @if (Auth::user()->user_lvl >= 1)
            <div class="cards-container">
                <div class="card card-middle mt-6">
                    <img class="theLine" src="{{asset('storage\GUI\cardsHome\TheLine.svg')}}" alt="">
                    <img class="card-img" src="{{ asset('storage/' . $test->img) }}" alt="">
                    <div class="content">
                        <form action="{{route('test3', $test->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="title">
                                <textarea name="Text1" class="form-control " rows="1" required>{{ $test->Text1 }}  </textarea>
                            </div>
                            <div class="description">

                                <p><textarea name="Text2" class="form-control mt-4" rows="1" required>{{ $test->Text2 }}</textarea>
                                </p>
                                <p><textarea name="price" class="form-control mt-4" rows="1" required>{{ $test->price }}</textarea>
                                </p>
                            </div>
                            <button type="submit" class="btn btn-primary">Изменить</button>
                        </form>
                        <form action="{{ route('test2', $test->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm m-1"
                                onclick="return confirm('Вы уверены, что хотите удалить этот пост?');">Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <div class="cards-container">
                <div class="card card-middle mt-6">
                    <img class="theLine" src="{{asset('storage\GUI\cardsHome\TheLine.svg')}}" alt="">
                    <img class="card-img" src="{{ asset('storage/' . $test->img) }}" alt="">
                    <div class="content">
                        <div class="title">
                            {{ $test->Text1 }}
                        </div>
                        <div class="description">

                            <p>{{ $test->Text2 }}</p>
                            <p>{{ $test->price }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    @endforeach

    <h1>Посты пользователя : {{ $user->name }}</h1>
    @if($user->advs->isEmpty())
        <p>пусто</p>
    @else
        @foreach($user->advs as $adv)

            <div class="cards-container">
                <div class="card card-middle mt-6">
                    <img class="theLine" src="{{asset('storage\GUI\cardsHome\TheLine.svg')}}" alt="">
                    <img class="card-img" src="{{ asset('storage/' . $adv->img) }}" alt="">
                    <div class="content">
                        <div class="title">

                            {{ $adv->Text1 }}
                        </div>
                        <div class="description">

                            <p>{{ $adv->Text2 }}</p>
                            <p>{{ $adv->price }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif



    hrth

@endsection