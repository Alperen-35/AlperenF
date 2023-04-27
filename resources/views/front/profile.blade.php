@extends('front.layouts.master')
@section('content')
<div class="col-md-4 offset-md-4 rounded shadow mb-5 " style="margin-top:200px;">
    <h2 class="text-center text-primary p-3">Profili Düzenle</h2>
    <form action="{{route('profilePost')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Adınız Soyadınız</label>
            <input type="text" class="form-control" id="name" name="name" value="{{Auth::user()->name}}"  placeholder="Adnız Soyadınız" required>
          </div>
        <div class="form-group">
          <label for="email">E-Posta Adresiniz</label>
          <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}" aria-describedby="emailHelp" required placeholder="E-Posta Adresiniz" disabled>
        </div>
        <div class="form-group">
            <label for="phoneNumber">Telefon Numaranız</label>
            <input type="phoneNumber" class="form-control" id="phoneNumber" name="phoneNumber" value="{{Auth::user()->phoneNumber}}" required placeholder="Telefon Numaranız" required>
          </div>
        <div class="form-group">
          <label for="password">Şifreniz</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Yeni Şifreniz" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Şifre Tekrar</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Yeni Şifrenizi tekrar giriniz" required>
          </div>
        <button type="submit" class="btn btn-primary btn-block btn-sm text-info p-3">Güncelle</button>
        <br>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
                <a class="text-info p-3" href="{{route('userDelete',Auth::user()->id)}}">Üyeliğimi Sil</a>
            </div>
            <div class="col-md-4 text-center">

            </div>
        </div>
        <br>
      </form>
</div>
@endsection
