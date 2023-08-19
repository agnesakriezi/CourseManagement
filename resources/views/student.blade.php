@extends('layots.master')


@section('header')
<nav class="navbar navbar-dark bg-primary">
<a class="navbar-brand" href="#">
    
    <h1 class="text-center">COURSE MANAGMENT SYSTEM</h1>
  </a>
</nav>
  <br>
 <div class="sidebar hidden sm:block w-0 sm:w-1/6 bg-gray-200 h-screen shadow fixed top-0 left-0 bottom-0 z-40 overflow-y-auto">
    <div class="mb-6 mt-20 px-6">
        <div  class="flex items-center text-gray-600 py-2 hover:text-blue-700">
            <!-- <svg class="h-4 w-4 fill-current feather feather-grid" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg> -->
            <a href="/dashboard "span class="ml-2 text-sm font-semibold"><svg class="h-4 w-4 fill-current feather feather-home" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 576 512"><path d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"/></svg>
            Dashboard</span></a>
            <a href="/Addstudent"span class="ml-2 text-sm font-semibold"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
            <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
            </svg>Add New Student</span></a>
            <br>
        </div>
    </div>
</div>
</div>
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
</style>

@section('content')


<table class="table table-striped table-dark">
<div class="w-full sm:w-1/2 mr-2 mb-6">
            <h3 class="text-gray-700 uppercase font-bold mb-2"></h3><div class="w-full sm:w-1/2 text-center border border-gray-200 "> <!--here-->
                <br>
                <h2 class="text-gray-700 uppercase font-bold">Student Details </h2>
        </div>
</div>
<br>
    <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Email</th>
      <th scope="col">Subject Id</th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
     @foreach($students as $student)
    
    <tr>
        <th scope="row">{{ $student->id}}</th>
        <th scope="row">{{ $student->name }}</th>
        <th scope="row">{{ $student->phone}}</div>
        <th scope="row">{{ $student->gender}}</div>
        <th scope="row">{{ $student->dayofbirth}}</div>
        <th scope="row">{{ $student->email}}</div>
        <th scope="row">{{ $student->subject_id}}</div>
        <td></td>
        <td></td>
       <td></td>          
         @endforeach
    </tr>
    </tbody>
</table>

@endsection