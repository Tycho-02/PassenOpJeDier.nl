<li class="a-popup u-list-style-none verwijderCard" data-kind-of-huisdier="{{$huisdier->soort}}">
        <article class="verwijderCard__article"> 
            <header class="verwijderCard__header u-flex-v-center">
                <h2 class="verwijderCard__heading">{{$huisdier->soort}} {{$huisdier->naam}}</h2>
            </header>
            <figure class="verwijderCard__figure">
            <img class="verwijderCard__image" 
                    srcset="
                    {{$huisdier->image640}} 640w,
                    {{$huisdier->image1280}} 1280w,
                    {{$huisdier->image1920}} 1920w
                    "
                    sizes="(min-width: 1500px) 1920px, (min-width: 1000px) 1280px, 640px"
                         src="{{$huisdier->image}}" alt="Foto van {{$huisdier->naam . ' ' . $huisdier->soort}}"/>
                    
            </figure>
            <section class="verwijderCard__textSection">
                <p class="verwijderCard__text">Naam: {{$huisdier->naam}}</p>
                <p class="verwijderCard__text">Soort: {{$huisdier->soort}}</p>
            </section>

            <section class="verwijderCard__btnsection">
                <form action="/huisdieren/{{$huisdier->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="verwijderCard__button">Verwijder oppasaanvraag</button>
                </form> 
                </section>
        </article>  
    
</li>