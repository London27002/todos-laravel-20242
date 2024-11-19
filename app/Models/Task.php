<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $primaryKey= 'id_task';

    protected $fillable = [
        'task_name',
        'task_description',
        'task_is_done',
        'task_observation'
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(
            Project::class,
        'id_project',
        'id_project');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }



}