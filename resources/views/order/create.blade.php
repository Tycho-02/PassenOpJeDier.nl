@extends('default')


@section('title')
    Bericht naar eigenaar
@endsection

@section('content')
<article class="create-form create-form--bericht a-popup">
    <h2 class="create-form__titel">Schrijf een bericht naar de eigenaar</h2>
    <form class="create-form__form create-form__form--bericht" action="/orders" method="POST">
        @csrf

        <input class="create-form__input" name="user_id" id="user_id" type="hidden" value="{{$eigenaar->id}}"></input>
        
        <input class="create-form__input" name="huisdier_id" id="huisdier_id" type="hidden" value="{{$huisdier->id}}"></input>

        <section class="create-form__section create-form__section--bericht">
            <label for="bericht">Bericht</label>
            <textarea class="create-form__input create-form__input--big create-form__input--big--bericht" name="bericht" id="bericht" type="text-area" required></textarea>
        </section>        

        <section class="create-form__section">
            <button class="create-form__button" type="submit">Bericht versturen</button>
        </section>

    </form>
</article>
@endsection
