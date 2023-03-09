<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
	protected $fillable = [
        'project_id',
        'filename',
    ];

	public function realisations()
    {
        return $this->belongsTo(Realisation::class,'project_id','id');
    }
}
