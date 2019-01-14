<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Post extends Model
{
    //optional
    protected $table="post";

    function getTitleAttribute($value){
        //mutate our title first letter
        return ucfirst($value);

        }
        function settitleAttribute($value){
            //convert title into lower case
            return $this->attributes['title']=strtolower($value);
        }
    function getCreateAttribute($value){
        $date_now=Carbon::now();
        return $date_now-diffForHumans($value);
    }
}
