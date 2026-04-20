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
  $jobs = Job::with('employer')->paginate(1); // this is eager loading

  return view('jobs', [
    
    'jobs' => $jobs
]);
});
Route::get('/jobs/{id}', function ($id){

       $job = Job::find($id);

        // dd($job);
 return view('job', ['job' => $job]);
});
Route::get('/contact', function () {
    return view('contact');
});
