<?php

namespace altavisionApp;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class FirstMenu extends Model
{
  use Sluggable;
  public function sluggable()
  {
      return [
          'slug' => [
              'source' => 'name'
          ]
      ];
  }
  protected $table = 'first_menus';
  protected $fillable = ['name', 'slug'];

    public function secondMenus()
    {
      return $this->hasMany('altavisionApp\SecondMenu');
    }
    public function posts()
    {
      return $this->hasMany('altavisionApp\Post');
    }
}
