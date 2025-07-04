<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
   use HasFactory;

   protected $table = 'job_listings'; 

   protected $fillable = ['employer_id', 'title', 'salary'];

   //l'inverse
   // protected $guarded = [];
   // tous les champs sauf ceux indiqués sont autorisés.

   public function employer() {
      return $this->belongsTo(Employer::class);
   }

   public function tags() {
      return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
   }
}
