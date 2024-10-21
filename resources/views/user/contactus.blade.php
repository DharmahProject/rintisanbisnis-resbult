@extends('layouts.template')

@section('content')

<div class="container mt-5">
    <h2 class="text-center">Bootstrap Table Example</h2>
    <table class="table table-bordered table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Age</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John</td>
          <td>Doe</td>
          <td>john@example.com</td>
          <td>28</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jane</td>
          <td>Smith</td>
          <td>jane@example.com</td>
          <td>34</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Michael</td>
          <td>Johnson</td>
          <td>michael@example.com</td>
          <td>45</td>
        </tr>
      </tbody>
    </table>
  </div>
  
@endsection