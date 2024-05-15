<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;


/**
 * App\Models\Assignment
 *
 * @property int $id
 * @property int $classroom_id
 * @property string $name
 * @property int $marks
 * @property string $description
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|AssignmentUser[] $assignments
 * @property-read int|null $assignments_count
 * @property-read Classroom $classroom
 * @property-read MediaCollection|Media[] $media
 * @property-read int|null $media_count
 * @method static Builder|Assignment newModelQuery()
 * @method static Builder|Assignment newQuery()
 * @method static Builder|Assignment query()
 * @method static Builder|Assignment whereClassroomId($value)
 * @method static Builder|Assignment whereCreatedAt($value)
 * @method static Builder|Assignment whereDescription($value)
 * @method static Builder|Assignment whereId($value)
 * @method static Builder|Assignment whereMarks($value)
 * @method static Builder|Assignment whereName($value)
 * @method static Builder|Assignment whereUpdatedAt($value)
 * @mixin Eloquent
 */
class Assignment extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'classroom_id',
        'name',
        'marks',
        'description',
    ];

    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }

    public function assignments(): HasMany
    {
        return $this->hasMany(AssignmentUser::class);
    }
}
