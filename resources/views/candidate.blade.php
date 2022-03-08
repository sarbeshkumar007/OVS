@extends('layouts.backend.layouts.master')
@section('content')
<style>

  th, td{
    font-size: 12px;
  }
  td a.ed{
    color:red;
    padding:8px 5px;
    background-color:yellow;
    margin-right:5px;
  }
  td a.dl{
    color:red;
    padding:8px 5px;
    background-color:orange;
  }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<table class="table" >
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">F_name</th>
      <th scope="col">L_name</th>
      <th scope="col">Citizenship_no</th>
      <th scope="col">Age</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Qualification</th>
      <th scope="col">Marital_status</th>
      <th scope="col">City</th>
      <th scope="col">Area</th>
      <th scope="col">Upload_photo</th>
      <th scope="col">Party_name</th>
      <th scope="col">Election_symbol</th>
      
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
  @if(isset($candidates))
      @foreach($candidates as $candidate)
      <tr>
      <td>{{$loop->iteration }}</td>
      <td>{{$candidate->F_name}}</td>
      <td>{{$candidate->L_name}}</td>
      <td>{{$candidate->citizenship_no}}</td>
      <td>{{$candidate->age}}</td>
      <td>{{$candidate->email}}</td>
      <td>{{$candidate->gender}}</td>
      <td>{{$candidate->qualification}}</td>
      <td>{{$candidate->marital_status}}</td>
      <td>{{$candidate->city}}</td>
      <td>{{$candidate->area}}</td>
      <td>
        <img src="{{$candidate->upload_photo}}" height="100px" width="100px">
      </td>
      <td>{{$candidate->party_name}}</td>
      <td>{{$candidate->election_symbol}}</td>
     
          <td> <a class="ed" href="{{ route('candidate.edit', $candidate-> id)}}" > Edit </a>
                <a class="dl" href="{{ route('candidate.delete', $candidate-> id)}}">Delete </a></td>
                          </tr>
      @endforeach
    @endif
    <div>
      {{isset($candidates) ? $candidates->links() :''}}
</div>

    
  </tbody>
</table>

@endsection