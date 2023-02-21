@extends('layouts.app')

@section('content')
<table class="">
<tr>
    <td>Имя</td>
    <td>Фамилия</td>
    <td>Группа</td>
    <td>Почта</td>
    <td>Телефон</td>
    <td>Фото</td>
</tr>
@foreach($stud as $obstud)
<tr>
    <td>{{$obstud->Name}}</td>
    <td>{{$obstud->Surname}}</td>
    <td>{{$obstud->Groups}}</td>
    <td>{{$obstud->email}}</td>
    <td>{{$obstud->number}}</td>
    <td><img src="{{$obstud->img}}" alt="none"></td>
</tr>
@endforeach
</table>
@endsection