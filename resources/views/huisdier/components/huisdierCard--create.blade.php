<article class="create-form a-popup">
    <form class="create-form__form" action="/huisdieren" method="POST">
        @csrf
        <section class="create-form__section">
            <label for="naam">Naam van uw huisdier</label>
            <input class="create-form__input" name="naam" id="naam" type="text" required/>
        </section>

        <section class="create-form__section">
            <label for="soort">Soort</label>
            <select class="create-form__input create-form__input--soort" id="soort" name="soort">
                @foreach($soorten as $soort)
                    <option value="{{$soort->soort}}">{{$soort->soort}}</option>
                @endforeach
            </select>
        </section>

        <section class="create-form__section">
            <label for="afbeelding">Afbeelding</label>
            <select class="create-form__input create-form__input--afbeelding" id="afbeelding" name="afbeelding">
                @foreach($afbeeldingen as $afbeelding)
                    <option value="{{$afbeelding->image}}">{{$afbeelding->image}}</option>
                @endforeach
            </select>
        </section>

        <section class="create-form__section">
            <label for="wanneer">Wanneer</label>
            <input class="create-form__input" name="wanneer" id="wanneer" type="text" placeholder="vb. 1 januari" required></input>
        </section>
        
        <section class="create-form__section">
            <label for="uurtarief">Uurtarief (in euro's)</label>
            <input class="create-form__input create-form__input--number" name="uurtarief" id="uurtarief" type="number" placeholder="vb. 10" value="0" required></input>
        </section>

        <section class="create-form__section">
            <label for="hoelang">Hoelang (in dagen)</label>
            <input class="create-form__input create-form__input--number" name="hoelang" id="hoelang" type="number" value="0" required></input>
        </section>

        <section class="create-form__section">
            <label for="beschrijving">Beschrijving</label>
            <textarea class="create-form__input create-form__input--big" name="beschrijving" id="beschrijving" type="text-area" ></textarea>
        </section>        

        <section class="create-form__section">
            <button class="create-form__button" type="submit">Huisdier toevoegen</button>
        </section>

    </form>
</article>