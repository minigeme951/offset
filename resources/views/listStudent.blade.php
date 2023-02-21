@extends('layouts.app')

@section('content')
<table style="border: 1px solid black">
<tr style="border: 1px solid black">
    <td  style="border: 1px solid black">Имя</td>
    <td style="border: 1px solid black">Фамилия</td>
    <td style="border: 1px solid black">Группа</td>
    <td style="border: 1px solid black">Почта</td>
    <td style="border: 1px solid black">Телефон</td>
    <td style="border: 1px solid black">Фото</td>
</tr>
@foreach($stud as $obstud)
<tr style="border: 1px solid black">
    <td style="border: 1px solid black; padding: 8px">{{$obstud->Name}}</td>
    <td style="border: 1px solid black; padding: 8px">{{$obstud->Surname}}</td>
    <td style="border: 1px solid black; padding: 8px">{{$obstud->Groups}}</td>
    <td style="border: 1px solid black; padding: 8px">{{$obstud->email}}</td>
    <td style="border: 1px solid black; padding: 8px">{{$obstud->number}}</td>
    <td style="border: 1px solid black; padding: 8px"><img src="{{$obstud->img}}" alt="none"></td>
</tr>
@endforeach
</table>
@endsection