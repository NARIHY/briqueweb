@extends('admin')
@section('title', 'Contact')
@section('content')
<div class="pagetitle">
    <h1>Dashboard</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('Admin.index')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Contacts</li>
        </ol>
        </nav>
</div>
<div class="container">
    <h3 class="text-center">Contact received</h3>
    <div class="table-responsive">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($contact as $contacts)
                    <tr>
                        <th scope="row">{{$contacts->id}}</th>
                        <td>{{$contacts->name}}</td>
                        <td>{{$contacts->email}}</td>
                        <td>{{$contacts->telephone}}</td>
                        <td>


                                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Contact send by {{$contacts->email}}</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <h4>Sender: {{$contacts->name}}</h4>
                                        <h4>Email: {{$contacts->email}}</h4>
                                        <h4>Phone: {{$contacts->telephone}}</h4>
                                        <p style="text-align: justify">
                                            {{$contacts->message}}
                                        </p>
                                        </div>
                                        <div class="modal-footer">
                                            <h4>Briqueweb</h4>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Show</button>


                        </td>
                    </tr>
                @empty
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td>
                        Empty
                    </td>
                    <td></td>
                    <td>

                    </td>
                  </tr>
                @endforelse

            </tbody>
          </table>

    </div>
</div>
@endsection
