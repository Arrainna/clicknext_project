<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Workspace extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    public function userCreate()
    {
        return $this->belongsTo(User::class,'user_create');
    }

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }
}
