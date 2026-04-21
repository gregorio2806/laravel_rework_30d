<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model{
    use HasFactory;

    protected $table = 'job_listings';

    protected $fillable = ['employer_id','title','salary'];
    // protected $guarded =[]; // to disable and enable all to be fillable no protection you can also add a specific fields you want to guard inside the array

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
    }

}

?>