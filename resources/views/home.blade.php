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

</div>

@endsection
