<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    /**
     * Fields that can not be mass assigned
     * 
     * @var array
     */
    protected $guarded = ['id'];


    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

     public static function returnallnotes()
    {
            $notes = Note::where('user_id', auth()->user()->id)
                        ->orderBy('updated_at', 'DESC')
                        ->get();


        return $notes;
    }
}
