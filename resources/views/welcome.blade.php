@extends('layouts.app')

@section('content')

    <header class="hero is-fullheight-with-navbar is-warning is-bold">
        <div class="hero-head"></div>
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered is-reversed-mobile">
                    <div class="column">
                        <h1 class="title is-3">
                            Саморезы в ленте на заказ
                        </h1>
                        <h2 class="subtitle is-5">
                            Саморезы любого типа и размера
                        </h2>
                    </div>
                    <div class="column">
                        <div class="box">
                            <figure class="image is-fullwidth">
                                <img src="/img/background/header.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-foot">
            <div class="container">
                <div class="level">
                    <div class="level-item">
                        <span class="icon is-large">
                            <i class="fas fa-chevron-down fa-lg"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

@endsection
