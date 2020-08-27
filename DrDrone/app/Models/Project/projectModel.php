<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Model;

class projectModel extends Model
{
    protected $table = 'project';
    protected $primaryKey = 'id';
    public $timestamps=false;
    protected $fillable=[
        'project_name',
        'image',
        'project_analysis_id'];
}
