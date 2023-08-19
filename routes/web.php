<?php

use Illuminate\Support\Facades\Route;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Attendenc;
use App\Models\addattendenc;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function(){
    $students=Student::count();
    $subjects=Subject::count();
    $subjects=Subject::count();

    return view('teacher', compact('students','subjects'));
});

Route::get('/', function () {
    $subjects=Subject::all();
    return view('teacher',compact('subjects'));
});

Route::get('classes', function () {
    $subjects=Subject::all();
    return view('showclasses',compact('subjects'));

});

Route::get('dashboard', function () {
    $subjects=Subject::all();
    return view('teacher',compact('subjects'));
});

Route::get('/Addclasses', function () {
    $subjects=Subject::all();
    return view('addclasses',compact('subjects'));
});

Route::post('addsub', function (Request $request) {
    $newsub= new Subject;
    $newsub->id=$request->id;
    $newsub->subject_name=$request->subject_name;
    $newsub->slug=$request->slug;
    $newsub->subject_code=$request->subject_code;
    $newsub->teacher_id=$request->teacher_id;
    $newsub->description=$request->description;

    $newsub->save();
    return redirect('/');
});

Route::get('/details/{id}',function ($id){
    $subjects=Subject::where('id',$id)->get();
    return view('subdetails',compact('subjects'));
});
Route::get('/delcl/{id}',function ($id){
    $suject=Subject::find($id);
    $suject->delete();
    return redirect('/classes');
});

Route::get('/detailss',function(){
    $subjects=Subject::all();
    return view('subdetails',compact('subjects'));
});

Route::get('/detailsstudent',function(){
    $students=Student::all();
    return view('student',compact('students'));
});

Route::get('/Addstudent', function () {
    $students=Student::all();
    return view('addstudent',compact('students'));
});

Route::post('/newstudent', function (Request $request) {
    $student=new Student;

    $student->id=$request->id;
    $student->name=$request->name;
    $student->phone=$request->phone;
    $student->gender=$request->gender;
    $student->dayofbirth=$request->dayofbirth;
    $student->address=$request->address;
    $student->email=$request->email;
    $student->subject_id=$request->subject_id;
    $student->save();

    return redirect('/');
});

Route::get('/attendencs', function () {
    $students=Student::all();
    return view('attendenc',compact('students'));
});


Route::get('/menageattendencs/{id}',function ($id){
        $subjects=Subject::where('id',$id)->get();
        $students=Student::where('subject_id',$id)->get();
    /* $students=Student::where('id',$id)->get();*/

    return view('attendenc',compact('students','subjects'));
});


Route::post('/newattendencs{id}', function(Request $request,$id){
    $student=Student::where('id',$id)->get();

    $student->id=$request->id;
    $student->name=$request->name;
    $student->Present=$request->Present;

     $student->save();
     return redirect('/');
});



