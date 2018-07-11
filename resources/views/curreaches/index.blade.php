@extends('layout')



@section('content')
<!--　▼ ジャンボトロン　 -->
    <div class="jumbotron topimg">
      <div class="text-center container">
        <h1>Welcome to curreach</h1>
        <p>curreachはカレー好きの皆様に寄り添う専門情報サイトです</p>
        <a class="btn btn-warning btn-lg" href="#" role="button">Learn more »</a>
      </div>
    </div>
<!--　▲ ジャンボトロン　 -->

<div class="container-fluid">
  <div class="row">

    <div class="col-md-2 col-md-offset-1 sideover">
      @include('sidebar')
    </div>

<!--
<div class="col-md-2 col-md-offset-1 sidebar">
      <div class="panel panel-default">
      <p>Sidebar</p>
      <ul class="sideMenu nav nav-sidebar">
        <a href="/mapsearch/"><li>●地図から探す</li></a>
        <li>カレーの種類から探す</li>
        <li>メインの食材から探す</li>
        <li>カレー/ナンから探す</li>
        <a href="/detailedsearch/"><li>カレーを検索</li></a>
      </ul>
    </div>
    </div>
-->

    <div class="col-md-8">
      <div class="panel panel-default">
        <div>
          <h2 class="lead">人気の店舗</h2>
          <ul class="slick-box3">
            @foreach ($shops as $shop)
              <li><a href="/shops/{{$shop->id}}">
                <div class="textonphoto">
                @if($shop->photos()->exists())
                  <img src="/images/shops/{{$shop->photos()->first()->image}}" alt="{{$shop->shop_name}}"/>
                @else
                  <img src="/images/noimage.png"/>
                @endif
                  <p>
                    {{$shop->shop_name}}<br/>
                    <span class="star-rating">
                      <span class="star-rating-front" style="width: {{(round($shop->reviews()->avg('rate')))*2}}0%">★★★★★</span>
                      <span class="star-rating-back">★★★★★</span>
                    </span>
                  </p>
                </div>
              </a></li>
            @endforeach
          </ul>
        </div>
        <hr>
        <div>
          <h2 class="lead">人気のカレー</h2>
          <ul class="slick-box3">
            @foreach ($curries as $curry)
              <li><a href="/shops/{{$curry->shop_id}}/curries/{{$curry->id}}">
                <div class="textonphoto">
                @if($curry->photos()->exists())
                  <img src="/images/curries/{{$curry->photos()->first()->image}}" alt="{{$curry->curry_name}}"/>
                @else
                  <img src="/images/noimage.png"/>
                @endif
                  <p>
                    {{$curry->curry_name}}<br/>
                    <span class="star-rating">
                      <span class="star-rating-front" style="width: {{(round($curry->reviews()->avg('rate')))*2}}0%">★★★★★</span>
                      <span class="star-rating-back">★★★★★</span>
                    </span>
                  </p>
                </div>
              </a></li>
            @endforeach
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>


@endsection
