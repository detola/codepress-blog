<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $upload = '/images/';


    protected $fillable = ['path', 'size'];

    public function user()
    {

    }

    public function getPathAttribute($photo)
    {

        return $this->upload . $photo;
    }

    //Check for empty password and encrypt if password found
    public function setPasswordAttribute($password)
    {
        if(!empty($password))
        {
            $this->attributes['password'] = bcrypt($password);
        }
    }
}
