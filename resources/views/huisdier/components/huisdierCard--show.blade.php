<article class="huisdierCard a-popup">
     <figure class="huisdierCard__figure">
     <img class="gridCard__image" 
                    srcset="
                    {{$huisdier->image640}} 640w,
                    {{$huisdier->image1280}} 1280w,
                    {{$huisdier->image1920}} 1920w
                    "
                    sizes="(min-width: 1500px) 1920px, (min-width: 1000px) 1280px, 640px"
                         src="{{$huisdier->image}}" alt="foto van {{$huisdier->soort}} {{$huisdier->naam}}"/>
     </figure>
     <section class="huisdierCard__text">
          <p>Hoi, ik ben <b>{{$huisdier->naam}}</b> en ik ben een {{$huisdier->soort}}.</p>
          <p>Mijn baasje zoekt een oppas op <b>{{$huisdier->wanneer}}</b> voor een duur van <b>{{$huisdier->hoelang}}</b> dagen en hij/zij betaald zelfs <b>{{$huisdier->uurtarief}}</b> euro per uur!</p>
          <br><p>Mocht je vragen hebben, neem contact op: <b>{{$eigenaar->email}}</b></p>

          <h2 class="huisdierCard__subtitel">Beschrijving</h2>
          <p class="huisdierCard__eigenschap huisdierCard__eigenschap--beschrijving">{{$huisdier->beschrijving}}</p>
     </section>

<section class="huisdierCard__btnSection">
          <a href="/huisdieren/{{$huisdier->id}}/orders/create"><button class="huisdierCard__button">Ik wil oppassen</button></a>
          <a class="huisdierCard__back_to_home" href="/huisdieren">Terug naar de anderen</a>
</section>
</article>