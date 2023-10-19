@extends('admin')

@section('title', 'Gestion de compte')

@section('content')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success text-center">
                {{session('success')}}
            </div>
        @endif
        <form action="" method="post">
            @csrf
            <label for="name">Nom d'utilisateur</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$use->name}}" disabled>
            <label for="email">Addresse email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{$use->email}}" disabled>
            <label for="role">Choisir une role</label>

            <select name="role" id="role" class="form-control">
                <option value="">Choisir..</option>
                @foreach ($role as $k=>$v)
                    <option value="{{$v}}" @if ($use->role == $v) selected @endif>{{$k}}</option>
                @endforeach
            </select>
            <input type="submit" value="Modifier" class="btn btn-primary" style="margin-top: 20px">
        </form>
    </div>
@endsection
