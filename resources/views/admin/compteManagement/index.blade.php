@extends('admin')

@section('title', 'gestion des compte')

@section('content')
<div class="pagetitle">

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5 text-center" id="exampleModalToggleLabel">Ajouter un compte</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <x-guest-layout>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!-- Name -->
                            <div>
                                <x-input-label for="name" :value="__('Username')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required autocomplete="new-password" />

                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <x-primary-button class="ml-4">
                                    {{ __('Inscrire') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </x-guest-layout>
                </div>
                <div class="modal-footer">
                    Briqueweb
                </div>
            </div>
            </div>
        </div>
    </div>
      <a href="#" class="btn btn-success" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" style="float: right">Ajouter</a>

    <h1>Gestion des comptes</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('Admin.index')}}">Tableau de bord</a></li>
        <li class="breadcrumb-item active">Gestion des comptes</li>
      </ol>
    </nav>
  </div>
  <div class="container">
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($user as $users)
                    <tr>
                        <th scope="row">{{$users->id}}</th>
                        <td> {{$users->name}} </td>
                        @php
                            $role = App\Models\Role::findOrFail($users->role);
                        @endphp
                        <td> {{$role->title}} </td>
                        <td>
                            <a href="{{route('Admin.CompteManagement.view', ['userId' => $users->id])}}" class="btn btn-primary">Voir</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td>Aucun utilisateur inscrit pour le moments</td>
                        <td></td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{$user->links()}}
    </div>

  </div>
@endsection
