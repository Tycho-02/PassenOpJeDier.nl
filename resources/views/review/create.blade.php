@extends('default')


@section('title')
Schrijf een review
@endsection

@section('content')
@include('review.components.reviewHeader--create')
<article class="create-form create-form--bericht a-popup">
    <form class="create-form__form create-form__form--bericht" action="/reviews" method="POST">
        @csrf
        <h2 class="create-form__titel create-form__titel--review">Schrijf een review voor de oppas van {{$huisdier->naam}}</h2>

        <section class="create-form__section create-form__section--bericht">
            <label for="review">review</label>
            <textarea class="create-form__input create-form__input--big create-form__input--big--bericht" name="review" id="review" type="text-area" required></textarea>
        </section>

        <input class="create-form__input create-form__input--big" name="oppasser_id" id="oppasser_id" type="hidden" value="{{$order->infoOppasser->id}}" ></input>

        <input class="create-form__input create-form__input--big" name="huisdier_id" id="huisdier_id" type="hidden" value="{{$huisdier->id}}" ></input>

        <input class="create-form__input create-form__input--big" name="order_id" id="order_id" type="hidden" value="{{$order->id}}" ></input>        

        <section class="create-form__section">
            <button class="create-form__button" type="submit">Plaats review</button>
        </section>

    </form>
</article>
@endsection




