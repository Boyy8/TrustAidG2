<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    // 1. Custom Primary Key from SDD
    protected $primaryKey = 'userId';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'roleId',
        'userName',
        'userPassword',
        'userEmail',
        'userPhoneNumber',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'userPassword',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'userPassword' => 'hashed',
        ];
    }

    /**
     * Tell Laravel Auth to use 'userPassword' instead of 'password'
     */
    public function getAuthPassword()
    {
        return $this->userPassword;
    }

    // --- Eloquent Relationships from SDD ---

    public function role()
    {
        return $this->belongsTo(Role::class, 'roleId', 'roleId');
    }

    public function financial()
    {
        return $this->hasOne(Financial::class, 'userId', 'userId');
    }

    public function eligibilities()
    {
        return $this->hasMany(Eligibility::class, 'userId', 'userId');
    }

    public function tokens()
    {
        return $this->hasMany(Token::class, 'userId', 'userId');
    }

    public function transactionLogs()
    {
        return $this->hasMany(TransactionLog::class, 'userId', 'userId');
    }

    public function reports()
    {
        return $this->hasMany(Report::class, 'userId', 'userId');
    }
}