<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory,SoftDeletes;
    protected $guarded = ['id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function creator() : BelongsTo
    {
        return $this->belongsTo(User::class,'created_by');
    }
    public function updater() : BelongsTo
    {
        return $this->belongsTo(User::class,'updated_by');
    }
    public function deleter(): BelongsTo
    {
       return $this->belongsTo(User::class, 'deleted_by');
    }

    public function assigner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }



}
