@extends('layout.master')

@section('content')
	
<table class="table m-5">
	<thead>
	  <tr>
		
		<th scope="col">name</th>
		<th scope="col">price</th>
		
	  </tr>
	</thead>
	<tbody>
		@foreach ($cars as $value)
	  <tr>
		<td> {{$value['name']}}</td>
		<td>{{$value['price']}}</td>
		
	  </tr>
	  @endforeach

	</tbody>
  </table>

@endsection