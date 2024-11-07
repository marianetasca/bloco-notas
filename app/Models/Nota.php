<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    public function user()
{
    return $this->belongsTo(User::class);
}

public function categoria()
{
    return $this->belongsTo(Categoria::class);
}

public function tags()
{
    return $this->belongsToMany(Tag::class);
}

}
