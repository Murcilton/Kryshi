@extends('layouts.layout')

@section('content')

<div class="home-container">

    <div class="home-banner">
        <div class="offer-left">
            <img class="left" src="{{asset('storage\img\image 5.png')}}" alt="">
            <div class="roofTwo">
                <div class="roof-content">
                    <div class="title">
                        <p>Объявления</p>
                    </div>
                    <div class="content">
                        <button class="btnRoofTwo"><i class="fa-solid fa-building"></i> Жилые комплексы</button>
                        <button class="btnRoofTwo"><i class="fa-solid fa-house"></i> Дома и участки</button>
                        <button class="btnRoofTwo second"><i class="fa-solid fa-door-open"></i> Квартиры</button>
                        <button class="btnRoofTwo second"><i class="fa-solid fa-shop"></i> Коммерция</button>
                    </div>
                </div>
                <img src="{{asset('storage/GUI/RoofHomeTwo.svg')}}" alt="">
            </div>
        </div>

        <div class="divider">
            <img src="{{asset('storage/GUI/HomeDivider.svg')}}" alt="">
        </div>

        <div class="offer-right">
            <div class="roofOne">
                <div class="title">
                    <p>Крыши <span>Агенство недвижимости</span></p>
                </div>
                <img src="{{asset('storage/GUI/RoofHomeOne.svg')}}" alt="">
            </div>
            <img class="right" src="{{asset('storage\img\image 4.png')}}" alt="">
        </div>
    </div>

    <div class="cards-container">
        <div class="card card-left">
            <img class="theLine" src="{{asset('storage\GUI\cardsHome\TheLine.svg')}}" alt="">
            <img class="card-img" src="{{asset('storage\GUI\cardsHome\image.png')}}" alt="">
            <div class="content">
                <div class="title">
                    Личный подход <i class="fa-solid fa-handshake-simple"></i>
                </div>
                <div class="description">
                    <p>Юридическое сопровождение</p>
                    <p><span>7</span> ступеней проверки</p>
                </div>
            </div>
        </div>
        
        <div class="card card-middle">
            <img class="theLine" src="{{asset('storage\GUI\cardsHome\TheLine.svg')}}" alt="">
            <img class="card-img" src="{{asset('storage\GUI\cardsHome\image (1).png')}}" alt="">
            <div class="content">
                <div class="title">
                    Охват всей страны <i class="fa-solid fa-city"></i>
                </div>
                <div class="description">
                    <p>Мы в <span>25</span> городах России!</p>
                    <p><span>150+</span> жилых комплексов</p>
                    <p><span>40+</span> партнёров</p>
                </div>
            </div>
        </div>

        <div class="card card-right">
            <img class="theLine" src="{{asset('storage\GUI\cardsHome\TheLine.svg')}}" alt="">
            <img class="card-img" src="{{asset('storage\GUI\cardsHome\image (2).png')}}" alt="">
            <div class="content">
                <div class="title">
                    Работаем с 2010 года <i class="fa-solid fa-star"></i>
                </div>
                <div class="description">
                    <p><span>84%</span> положительных обзоров</p>
                    <p>Больше <span>10 000</span> сделок</p>
                </div>
            </div>
        </div>
    </div>

    <div class="cabinet">
        <a href="{{ route('login') }}">
            <button class="cabinetBtn">Войти в личный кабинет <i class="fa-solid fa-id-card"></i><i class="fa-solid fa-chevron-right"></i> </button>
        </a>
    </div>

</div>

@endsection
