@extends('Template.Template')
@section('plantillaWeb')
    <section class="container">
      <form action="{{route('user.update',$user)}}" method="POST">
        {{csrf_field()}}
        <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label" >Nombres</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="colFormLabel"name="name" value="{{$user->name}}" placeholder="col-form-label">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="colFormLabel"name="email" value="{{$user->email}}" placeholder="col-form-label">
            </div>
          </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabel" name="password" value="{{$user->password}}" placeholder="col-form-label">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Rol</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="colFormLabel" name="rol" value="{{$user->rol}}" placeholder="col-form-label">
            </div>
          </div>

          <input type="submit" name="btn_1" value="Actualizar">
    </form>

    </section>

    @endsection
