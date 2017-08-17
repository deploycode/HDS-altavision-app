<?php

namespace altavisionApp;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class SecondMenu extends Model
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
  protected $table ='second_menus';
  protected $fillable = ['name' , 'slug', 'first_menu_id'];

    public function firstMenu()
    {
      return $this->belongsTo('altavisionApp\FirstMenu');
    }
    public function thirdMenus()
    {
      return $this->hasMany('altavisionApp\ThirdMenu');
    }
    public function posts()
    {
      return $this->hasMany('altavisionApp\Post');
    }
    public static function secondsmenus($id){
      return SecondMenu::where('first_menu_id','=', $id)->get();
    }
}
