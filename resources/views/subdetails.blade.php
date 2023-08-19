@extends('layots.master')


@section('header')
<nav class="navbar navbar-dark bg-primary">
<div class="topnav">
    <div class="w3-blue">
      <h1 class="text-center">COURSE MANAGMENT SYSTEM</h1>
    </div>
  <br>
 <div class="sidebar hidden sm:block w-0 sm:w-1/6 bg-gray-200 h-screen shadow fixed top-0 left-0 bottom-0 z-40 overflow-y-auto">
    <div class="mb-6 mt-20 px-6">
        <div  class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <a href="/dashboard "> <svg class="h-4 w-4 fill-current feather feather-home" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
            Dashboard</a>
            <a href="/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
                <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
            </svg>Back</a>
            <br>
            <br>
        </div>
    </div>
    </div>
</nav>
@endsection

<style>
 h1 {
  color:white;
}
    .topnav {
  position: relative;
  overflow: hidden;
}
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
</style>

@section('content')


<table class="table table-striped table-dark">
        <div class="w-full sm:w-1/2 text-center border border-gray-200 "> <!--here-->
                <br>
                <h2 class="text-gray-700 uppercase font-bold">Subject Details </h2>
                      
            </div>
    <thead>
    <tr>
      <th scope="col">Subject Id</th>
      <th scope="col">Subjects Name</th>
      <th scope="col">Credits</th>
      <th scope="col">Subjects Code</th>
      <th scope="col">Teacher Id</th>
      <th scope="col">Description</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
     @foreach($subjects as $subject)
    
    <tr>
    <th scope="row">{{ $subject->id}}</th>
        <th scope="row">{{ $subject->subject_name}}</th>
        <th scope="row">{{ $subject->slug}}</th>
        <th scope="row">{{ $subject->subject_code}}</th>
        <th scope="row">{{ $subject->teacher_id }}</div>
        <th scope="row">{{ $subject->description}}</div>
        <td></td>
        <td></td>
       <td></td>          
         @endforeach
    </tr>
    </tbody>
</table>

@endsection