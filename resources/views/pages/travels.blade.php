@extends('layout.main-layout')
@section('list-travel')
<table>
    <tr>
      <th> place_of_departure</th>
      <th> place_of_arrival</th>
      <th> departure_date</th>
      <th> retun_day</th>
      <th> info</th>
      <th> price</th>

    </tr>
    @foreach ($travels as $travel)
        <tr>
            <td>
            
                {{$travel ->  place_of_departure}}
            </td>
            <td>
            
                {{$travel ->  place_of_arrival}}
            </td>
            <td>
            
                {{$travel ->  departure_date}}
            </td>
            <td>
            
                {{$travel ->  return_day}}
            </td>
            <td>
            
                {{$travel ->  info}}
            </td>
            <td>
            
                {{$travel ->  price}}
            </td>

        </tr>
        

    @endforeach


  </table>


@endsection