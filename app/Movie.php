<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title','original_title','poster','year','premiere_world','premiere_country','video_url','rating','duration','country','description','fb_id'
    ];
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
    public function url()
    {
        $this->put('url', urlencode(str_replace(' ','_','/movie/'.$this->title.'/'.$this->id)));
    }
}
