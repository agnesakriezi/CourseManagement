
@extends('layots.master')
@section('header')
<!-- Image and text -->
<nav class="navbar navbar-dark bg-primary">
    <div class="topnav">
    <h1 class="text-center">COURSE MANAGMENT SYSTEM</h1>
  <br>
 <div class="sidebar hidden sm:block w-0 sm:w-1/6 bg-gray-200 h-screen shadow fixed top-0 left-0 bottom-0  z-40 overflow-y-auto">
    <div class="mb-6 mt-20 px-2">
        <div  class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <a href="/dashboard "> <svg class="h-4 w-4 fill-current feather feather-home" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
            Dashboard</a>
            
            <a href="/Addclasses"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"  viewBox="0 0 16 16">
            <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
            </svg> Add Classes</a>
        </div>
        </div>
    </div>
<div>
</nav>

@endsection
<style>
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
.topnav-centered  {
  float: none;
  text-align: center;
}
h1{
    color:white;
}
</style>

@section('content')
<div>
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
        <div class="w-full sm:w-1/2 mr-2 mb-6">
            <h3 class="text-gray-700 uppercase font-bold mb-2"></h3><div class="w-full sm:w-1/2 text-center border border-gray-200 "> <!--here-->
                <br>
                <h2 class="text-gray-700 uppercase font-bold">Classes Details </h2>
                      
            </div>  <div class="flex flex-wrap items-center">
                @foreach ($subjects as $subject)
                    <div class="w-full sm:w-1/2 text-center border border-gray-200 "> <!--here-->
                    <br>
                   <a href="/details/{{$subject->id}}"><button type="button" class="btn btn-outline-secondary">Class Details</button></a>
                    <br>
                    <br>
                    <a href="/delcl/{{$subject->id}}"><button type="button" class="btn btn-primary btn-lg btn-block">Delete Class</button></a>
        
                    <br>
                        <div class="card" style="width: 18rem;" >
                        <div class="text-gray-800 uppercase font-semibold px-4 py-4 mb-2">{{ $subject->subject_name }} <img src='img\subimage.jpeg'  class="card-img-top" alt="..."></div>
                        <div class="card-body">
                        <td><a href="/menageattendencs/{{$subject->id}}">Menage Attendencs</a></td>
                        </div>
                    </div>
                <br>
                @endforeach
            </div>
        </div>

    </div>
</div>

@endsection