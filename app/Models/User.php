<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function getNameAttribute(): string
    {
        return $this->nama ?? $this->username ?? 'User';
    }

    protected $table = 'm_user';
    protected $primaryKey = 'user_id';
    // protected $fillable = ['level_id', 'username', 'name', 'password', 'email'];
    protected $fillable = [
        'username',
        'email',
        'nama',
        'password',
        'level_id',
    ];
    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id', 'level_id');
    }

    public function stoks()
    {
        return $this->hasMany(t_stok::class, 'user_id', 'user_id');
    }

    public function penjualans()
    {
        return $this->hasMany(t_penjualan::class, 'user_id', 'user_id');
    }
}
