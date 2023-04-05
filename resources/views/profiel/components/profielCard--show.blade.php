<article class="profielCard a-popup">
     <h2 class="profielCard__subtitel">Buitenaanzicht huis</h2>
     <figure class="profielCard__figure">
     <img class="profielCard__image" 
                    srcset="
                    {{$profiel->foto_huis640}} 640w,
                    {{$profiel->foto_huis1280}} 1280w,
                    {{$profiel->foto_huis1920}} 1920w
                    "
                    sizes="(min-width: 1500px) 1920px, (min-width: 1000px) 1280px, 640px"
                         src="{{$profiel->foto_huis}}" alt="Foto van huisBuitenaanzicht huis van {{$profielEigenaar->name}}"/>
     </figure>
     <section class="profielCard__text">
          <p>{{$profiel->beschrijving_huis}}</p>   
    </section>
</article>

<article class="profielCard a-popup">
     <h2 class="profielCard__subtitel">Woonkamer</h2>
     <figure class="profielCard__figure">
     <img class="profielCard__image" 
                    srcset="
                    {{$profiel->foto_woonkamer640}} 640w,
                    {{$profiel->foto_woonkamer1280}} 1280w,
                    {{$profiel->foto_woonkamer1920}} 1920w
                    "
                    sizes="(min-width: 1500px) 1920px, (min-width: 1000px) 1280px, 640px"
                         src="{{$profiel->foto_woonkamer}}" alt="Foto woonkamer van {{$profielEigenaar->name}}"/>
     </figure>
     <section class="profielCard__text">
          <p>{{$profiel->beschrijving_woonkamer}}</p>   
    </section>
</article>

<article class="profielCard a-popup">
     <h2 class="profielCard__subtitel">Keuken</h2>
     <figure class="profielCard__figure">
     <img class="profielCard__image" 
                    srcset="
                    {{$profiel->foto_keuken640}} 640w,
                    {{$profiel->foto_keuken1280}} 1280w,
                    {{$profiel->foto_keuken1920}} 1920w
                    "
                    sizes="(min-width: 1500px) 1920px, (min-width: 1000px) 1280px, 640px"
                         src="{{$profiel->foto_keuken}}" alt="Foto keuken van {{$profielEigenaar->name}}"/>
     </figure>
     <section class="profielCard__text">
          <p>{{$profiel->beschrijving_keuken}}</p>   
    </section>
</article>