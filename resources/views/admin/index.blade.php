<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    @foreach ($users as $user)
        <article>
            <ul>
                <li>User ID: {{$user->id}}</li>
                <li>Naam: {{$user->name}}</li>
                <li>Email: {{$user->email}}</li>
                <li>Rol: {{$user->role}}</li>
                <li>Geboortedatum: {{$user->geboortedatum}}</li>
                @if ($user->isBlocked)
                    <form action="/admin/{{$user->id}}/unblock" method="POST">
                        @csrf
                        @method('POST')
                        <input type="submit" value="Deblokeer"/>
                    </form>
                @else
                    <form action="/admin/{{$user->id}}/block" method="POST">
                        @csrf
                        @method('POST')
                        <input type="submit" value="Blokkeer"/>
                    </form>
                @endif
            </ul>
        </article>
    @endforeach
</body>
</html>
