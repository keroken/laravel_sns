<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    
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
    
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    
    public function friends()
    {
        return $this->belongsToMany('App\User', 'friends_users', 'user_id', 'friend_id');
    }
    
    public function addFriend(User $user)
    {
        $this->friends()->attach($user->id);   
    }
    
    public function removeFriend(User $user)
    {
        $this->friends()->detach($user->id);
    }
    
    
    
}
