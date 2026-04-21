<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
   return view('home');

});
Route::get('/jobs', function () {
  // $jobs = Job::all();  // this is lazy loading
  // $jobs = Job::with('employer')->get(); // this is eager loading
  // $jobs = Job::with('employer')->paginate(3); // this is eager loading
  $jobs = Job::with('employer')->latest()->paginate(1); // this is eager loading

  return view('jobs.index', [
    
    'jobs' => $jobs
]);
});
Route::get('/jobs/create',function (){
return view('jobs.create');
});

Route::post('/jobs', function(){

request()->validate([
  'title'=> ['required', 'min:2'],
  'salary'=>['required']
]);
// dd('hello from the post request');
// dd(request()->all());
// dd(request('title));

Job::create([
  'title'=>request('title'),
  'salary'=>request('salary'),
  'employer_id'=> 1
]);
return redirect('/jobs');
});

Route::get('/jobs/{id}', function ($id){

       $job = Job::find($id);

        // dd($job);
 return view('jobs.show', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
