<?php

namespace App\Models\Integration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Integration extends Model
{    
    use HasFactory;
    private Model $model;

    public function create()
    {
        return $this->model->save();
    }
}
