<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contato extends Model
{
    public function lista()
    {
        return (object) [
            'nome'=>'Ygor',
            'tel'=>'21986853664'
        ];
    }
}
