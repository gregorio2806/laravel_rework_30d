<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job{
    public static function all():array
    {
        return [
    [
            'id' => '1',
            'title' => "Director",
            'salary' => 'P50,000'
        ],
        [
            'id' => '2',
            'title' => "Programmer",
            'salary' => 'P10,000'
        ],
        [
            'id' => '3',
            'title' => "Teacher",
            'salary' => 'P40,000'
        ]
        ];
    }

    public static function find(int $id):array
    {
                // Arr::first($jobs, function($job) use ($id){
        //     return $job['id'] == $id;
        // });

         $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

         if (!$job){
            abort(404);
         }else{
            return $job;
         }
    }
}

?>