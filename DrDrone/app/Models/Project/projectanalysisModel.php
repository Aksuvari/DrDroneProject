<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Model;

class projectanalysisModel extends Model
{
    protected $table = 'project_analysis';
    protected $primaryKey = 'id';
    public $timestamps=false;
    protected $fillable=[
        'moisture',
        'medicine',
    ];
}
