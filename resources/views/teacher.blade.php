
@extends('layots.master')

@section('header')
<nav class="navbar navbar-dark bg-primary">
<a class="navbar-brand" href="#">
    
    <h1 class="text-center">COURSE MANAGMENT SYSTEM</h1>
  </a>
</nav>
@endsection

@section('sidebar')
 <br>
 <div class="sidebar hidden sm:block w-0 sm:w-1/6 bg-gray-200 h-screen shadow fixed top-0 left-0 bottom-0 z-40 overflow-y-auto">
    <div class="mb-6 mt-20 px-6">
        <div  class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <!-- <svg class="h-4 w-4 fill-current feather feather-grid" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg> -->
            <svg class="h-4 w-4 fill-current feather feather-home" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
            <span class="ml-2 text-sm font-semibold">Dashboard</span>
            <br>
            <b>
        
        </div>
    </div>
</div>
@endsection
<style>
  a h1{

text-align: center;
}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}
.card {
    width: 18rem;
    height: 30px;
     display: flex;
}


</style>
    <title></title>
</head>

<style>
.w3-card-4 {
 float: left;
  width: 25%;
}
.card-title{
    
}

</style>
@section('content')
<br>
<div class="card-group">
  <div class="card">
  <a href="/detailsstudent"><img class="card-img-top" src="/img/students.png" alt="Card image cap"></a>
    <div class="card-body">
    <h2 class="text-center">Students</h2>
   <h3 class="text-center"></h3>
    <br>
    <br>
    <br>
      <h3 class="text-center"></h3>
    </div>
  </div>
  <div class="card">
  <a href="/detailss"><img class="card-img-top" src="/img/subjectss.jpg" alt="Card image cap"><a>
    <div class="card-body">
      <h2 class="text-center">Subjects</h2>
      <h3 class="text-center"></h3>
    </div>
  </div>
    <div class="card">
    <a href="/classes" ><img class="card-img-top" src="/img/classes.jpg" alt="Card image cap"></a>
    <div class="card-body">
      <h2 class="text-center">Classes</h2>
      <h3 class="text-center"></h3>
    </div>
  </div>
</div>

@endsection

<br>
@section('footer')


@endsection

