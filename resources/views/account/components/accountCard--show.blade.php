<article class="accountCard a-popup">
     <figure class="accountCard__figure">
     <img class="accountCard__image" 
                    srcset="
                    {{$huisdier->image640}} 640w,
                    {{$huisdier->image1280}} 1280w,
                    {{$huisdier->image1920}} 1920w
                    "
                    sizes="(min-width: 1500px) 1920px, (min-width: 1000px) 1280px, 640px"
                         src="{{$huisdier->image}}" alt="Foto van {{$huisdier->naam . ' ' . $huisdier->soort}}"/>
     </figure>
     <section class="accountCard__textsection">
          <h2 class="accountCard__subtitel">Bericht oppasser</h2>
          <p class="accountCard__text accountCard__text--berichtOppasser">{{$oppasser->name}}: {{$orderAanvraag->bericht}}</p>
          <p class="accountCard__text">Bekijk <a href="/profielen/{{$oppasser->id}}" target="_blank" class="huisdierCard__link">hier</a> profiel van {{$oppasser->name}}</p>
     </section>

    <section class="accountCard__btnSection">
          <a href="/reviews/create" class="accountCard__link"><button class="accountCard__button">Accepteren</button></a>
          <form action="/orders/{{$orderAanvraag->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="#" class="accountCard__link"><button class="accountCard__button accountCard__button--weigeren" type="submit">Weigeren</button></a>
            </form> 
                   
    </section>

    <a class="accountCard__back_to_home" href="/huisdieren">Terug naar de anderen</a>
</article>