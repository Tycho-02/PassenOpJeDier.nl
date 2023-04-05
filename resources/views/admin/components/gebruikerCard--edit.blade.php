<article class="create-formBlokkeer a-popup">
    <form class="create-formBlokkeer__form" action="/users/{{$gebruiker->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
         <section class="create-formBlokkeer__section">
            <label class="create-formBlokkeer__label" for="role">Role</label>
            <select class="create-formBlokkeer__input create-form__input--role" id="role" name="role">
            @foreach($rollen as $role)
                <option value="{{$role->role}}">{{$role->role}}</option>
            @endforeach
            </select>
         <input type="hidden" name="user_id" value="{{$gebruiker->id}}">
        </section>
        <section class="create-formBlokkeer__btnsection">
            <button class="create-formBlokkeer__button" type="submit">Pas status aan</button>
        </section>
    </form>
