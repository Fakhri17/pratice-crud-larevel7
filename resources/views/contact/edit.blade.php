@extends('contact')

@section('main')
<form action="{{ url("/contacts/{$contact->id}") }}" method="post">
  @method('PATCH')
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" value="{{$contact->nama}}" placeholder="Masukkan Nama">
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{$contact->email}}" placeholder="Masukkan Email">
    </div>
  </div>
  <div class="form-group">
    <label for="phone">No. HP</label>
    <input type="number" class="form-control" id="phone" name="phone" value="{{$contact->phone}}" placeholder="Masukkan No HP">
  </div>
  <div class="form-group">
    <label for="adsress">Alamat</label>
    <input type="text" class="form-control" id="address" name="address" value="{{$contact->address}}" placeholder="Masukkan Alamat">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection