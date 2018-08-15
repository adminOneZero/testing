@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <h2 align="center" > Edit profile </h2>
        <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ $user->name }}'s Profile</h2>
            <form enctype="multipart/form-data" action="profile" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <hr>
                <div class="row mt-5">
                  <div class="col">

                    <p>name :              <br><input type="text" name="name" value="{{ $user->name }}"> </p>
                    <p>Email :             <br></b><input type="text" name="email" value="{{ $user->email }}"> </p>
                    <p>password :          <br></b><input type="password" name="aa" > </p>
                    <p>confirm password :  <br></b><input type="password" name="bb" > </p>


                  </div>
                  <input type="submit" class="pull-right btn btn-sm btn-primary" value="save">
                </div>



            </form>
        </div>



    </div>
</div>
@endsection
