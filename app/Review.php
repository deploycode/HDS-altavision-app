<?php

namespace altavisionApp;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
  protected $table ="reviews";
  protected $fillable = ['name', 'review', 'photo'];
}
