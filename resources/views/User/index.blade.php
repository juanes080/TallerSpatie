@extends('Template.Template')
@section('plantillaWeb')
<table class="table">
  <div class="container col-12">
  <a href="/user/create" class="btn btn-primary">Crear</a>
  </div>
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col">Rol</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>

            <td>
               @if ($user->roles->isNotEmpty())
                 

           
            @foreach($user->roles as $r)
            <span class="badge badge-secondary">
            {{$r->name}}
            </span>
            @endforeach
            @endif



            </td>

            <td>
              <td>
                @can('profile.password')
                <a href="/users/{{$user['id']}}"><i class="fa fa-eye"></i></a>
                @endcan

                <a href="/users/{{'id'}}/edit"><i class="fa fa-edit"></i></a>
                <a href="#" data-toggle= "modal" data-target="#deleteModal" data-userid={{$user['id']}}><i class="fas fa-trash-alt"></i></a>
              </td>
                <a class="btn btn-warning" href="{{route('user.edit', $user)}}" role="button">editar</a>
            </td>
            <td>
               <form action="{{route('user.destroy',$user->id)}}" method="Post">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-danger">Eliminar</button>
               </form>
            </td>
          </tr>
        @endforeach


    </tbody>
  </table>
  {{-- {{$users->links()}} --}}
@endsection
