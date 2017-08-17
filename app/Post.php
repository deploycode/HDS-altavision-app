<?php

namespace altavisionApp;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  use Sluggable;
  public function sluggable()
  {
      return [
          'slug' => [
              'source' => 'title'
          ]
      ];
  }
  protected $table = 'posts';
  protected $fillable = ['first_menu_id','second_menu_id','third_menu_id','title','slug','content'];

    public function firstMenu()
    {
      return $this->belongsTo('altavisionApp\FirstMenu');
    }
    public function secondMenu()
    {
      return $this->belongsTo('altavisionApp\SecondMenu');
    }
    public function thirdMenu()
    {
      return $this->belongsTo('altavisionApp\ThirdMenu');
    }
    public function scopeTitle($query , $name)
    {
        return $query->where('title','LIKE','%'.$name.'%');
    }
}
