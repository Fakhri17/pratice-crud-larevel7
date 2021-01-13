@extends('contact')

@section('main')
  <div class="row">
    <div class="col-md-12"> 
    <table class="table table-striped">
			<thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Address</th>
          <th colspan="2">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($contacts as $contact)
          <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->nama}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->phone}}</td>
            <td>{{$contact->address}}</td>
            <td><button disabled="disabled">EDIT</button></td>
            <td><button disabled="disabled">DELETE</button></td>
          </tr>
        @endforeach
      </tbody>
    </table>
    </div>
  </div>
@endsection