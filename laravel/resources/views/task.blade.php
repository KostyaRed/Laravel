@extends('master')

@section('title', 'task->title')

@section('content')

<style type="text/css">
.margin {
margin-left: 5%;
}
   </style>
 <center>
 
<h1 >You can handle it!</h1> </center>
<div class="margin">
<p>

<h3>{{$task->title}}</h3>
<p>{{$task->content}}</p>
</div>
@endsection
