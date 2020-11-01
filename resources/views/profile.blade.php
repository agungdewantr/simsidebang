@extends('layouts.layout')

@section('title','Profil Anda')

@section('namahalaman')
  <h4>Profile Anda</h4>
@endsection


@section('content')
<div class="section-body">
  <h2 class="section-title">Hi, {{auth()->user()->name}}!</h2>
  <p class="section-lead">
    Ini adalah profile anda
  </p>

  <div class="row mt-sm-4">
    <div class="col-12 col-md-12 col-lg-5">
      <div class="card profile-widget">
        <div class="profile-widget-header">
          <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
        </div>
        <div class="profile-widget-description">
          <div class="profile-widget-name">{{auth()->user()->name}} <div class="text-muted d-inline font-weight-normal"><div class="slash"></div> {{auth()->user()->role}}</div></div>
            <div class="profile-widget-name">{{auth()->user()->email}}</div>
        </div>
        <div class="card-footer text-center">
          <div class="font-weight-bold mb-2">Follow Ujang On</div>
          <a href="#" class="btn btn-social-icon btn-facebook mr-1">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="btn btn-social-icon btn-twitter mr-1">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="btn btn-social-icon btn-github mr-1">
            <i class="fab fa-github"></i>
          </a>
          <a href="#" class="btn btn-social-icon btn-instagram">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-12 col-lg-7">
      <div class="card">
        <div class="form-group">
          @if (session('status'))
            <div class="alert alert-info" role="alert">
                {{ session('status') }}
            </div>
          @endif
        </div>
        <form method="post" class="needs-validation" action="/profile">
          @method('patch')
          @csrf
          <div class="card-header">
            <h4>Edit Profile</h4>
          </div>
          <div class="card-body">
              <div class="row">
                  <input name="id" type="hidden" class="form-control" value="{{auth()->user()->id}}" required="">
                <div class="form-group col-md-6 col-12">
                  <label for="nama">Nama</label>
                  <input name="nama" id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" value="{{auth()->user()->name}}">
                  @error('nama')
                    <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group col-md-6 col-12">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{auth()->user()->email}}">
                  @error('email')
                    <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6 col-12">
                  <label for="password">{{ __('Password') }}</label>
                  <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="">
                  @error('password')
                    <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
                <div class="form-group col-md-6 col-12">
                  <label for="konfirmasi">{{ __(' Konfirmasi Password') }}</label>
                  <input type="password" id="konfirmasi" name="konfirmasi" class="form-control @error('konfirmasi') is-invalid @enderror" value="">
                  @error('konfirmasi')
                    <div class="invalid-feedback">{{$message}}</div>
                  @enderror
                </div>
              </div>
          </div>
          <div class="card-footer text-center">
            <button class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
