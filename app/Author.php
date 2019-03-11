<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Author extends Authenticatable
{
    use Notifiable;

    protected $guard = 'authors';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //  public function books()
    // {
    //     return $this->hasMany('App\book', 'id_admin');
    // }
    public function book()
    {
        return $this->belongsTo('App\book','id_author','id');
    }

    public function books()
    {
        return $this->hasMany('App\book', 'id_author');
    }
    // public function docs()
    // {
    //     return $this->hasMany('App\docs', 'id');
    // }
    public function stat_naskah()
    {
        return $this->belongTo('App\stat_naskah','id_author','id');
    }
}