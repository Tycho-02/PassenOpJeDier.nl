<li class="a-popup u-list-style-none gridCard gridCard--review">
        <article class="gridCard__article"> 
            <header class="gridCard__header u-flex-v-center">
                <h2 class="gridCard__heading">Review van {{$review->infoOrder->infoEigenaar->name}}</h2>
            </header>
            <figure class="gridCard__figure">
            <img class="gridCard__image" 
                    srcset="
                    {{$review->infoHuisdier->image640}} 640w,
                    {{$review->infoHuisdier->image1280}} 1280w,
                    {{$review->infoHuisdier->image1920}} 1920w
                    "
                    sizes="(min-width: 1500px) 1920px, (min-width: 1000px) 1280px, 640px"
                         src="{{$review->infoHuisdier->image}}" alt="Foto van {{$review->infoHuisdier->soort}} {{$review->infoHuisdier->naam}}"/>
            </figure>
            <section class="gridCard__textSection">          
                <h2 class="gridCard__subtitel">Review</h2>
                <p class="gridCard__text">{{$review->review}}</p> 
            </section>
        </article>  
</li>