<?php

namespace altavisionApp;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class ThirdMenu extends Model
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
  protected $table = 'third_menus';
  protected $fillable = ['name' , 'second_menu_id','slug'];

    public function secondMenu()
    {
      return $this->belongsTo('altavisionApp\SecondMenu');
    }
    public function posts()
    {
      return $this->hasMany('altavisionApp\Post');
    }
    public static function thirdsmenus($id){
      return ThirdMenu::where('second_menu_id','=', $id)->get();
    }
}
