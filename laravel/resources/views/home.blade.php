@extends('master')

@section('title', 'Homepage')
@section('content')
<!-- почему-то не смогла подключить <link href="/css/app.css" rel="stylesheet">, простите :,( -->

<style type="text/css">
a.button15 {
  display: inline-block;
  font-family: arial,sans-serif;
  font-size: 11px;
  font-weight: bold;
  color: rgb(68,68,68);
  text-decoration: none;
  user-select: none;
  padding: .2em 1.2em;
  outline: none;
  border: 1px solid rgba(0,0,0,.1);
  border-radius: 2px;
  background: rgb(245,245,245) linear-gradient(#f4f4f4, #f1f1f1);
  transition: all .218s ease 0s;
}
a.button15:hover {
  color: rgb(24,24,24);
  border: 1px solid rgb(198,198,198);
  background: #f7f7f7 linear-gradient(#f7f7f7, #f1f1f1);
  box-shadow: 0 1px 2px rgba(0,0,0,.1);
}
a.button15:active {
  color: rgb(51,51,51);
  border: 1px solid rgb(204,204,204);
  background: rgb(238,238,238) linear-gradient(rgb(238,238,238), rgb(224,224,224));
  box-shadow: 0 1px 2px rgba(0,0,0,.1) inset;
}

   </style>
<main role="main">
<section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">TASKS BOARD</h1>
          <p class="lead text-muted">It can be used for visual task management and workflow coordination in event companies, marketing and interactive agencies or sales departments. </p>
          <p>
              <form action="/create" method="post"> 
            <!-- <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a> -->
            <link href="\css\style.css" rel="stylesheet">
            <input type="text" name="title" placeholder="Title">
            <input type="text" name="content" placeholder="Content">
            </p>
             {{ csrf_field() }}
             <input type="submit" value="Add" style="button15"/>
             <!-- <button  type="submit">Submit</button> -->
              </form>
          
        </div>
      </section>
    <center>
      @foreach($tasks as $task)
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      
      <div class="album py-5 bg-light">
        <!-- <div class="container"> -->
         
          
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <!-- <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap"> -->
                <strong>{{$task->title}}</strong>
                <div class="card-body">
                  <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                  {{$task->content}}
                  <div class="d-flex justify-content-between align-items-center">
                    
                      <button type="button" class="btn btn-sm btn-outline-secondary"> <a href="/task/{{$task->id}}">View</a></button>
                      
                    <small class="text-muted">{{$task->created_at->diffForHumans()}}</small>
                  </div>
                </div>
              </div>
            </div>
         
          

      </div>
      @endforeach
    </center>
</main>
@endsection
