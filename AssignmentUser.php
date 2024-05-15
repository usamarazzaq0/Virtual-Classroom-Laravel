<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
 * @property int $id
 * @property int $assignment_id
 * @property int $user_id
 * @property int|null $marks
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Assignment $assignment
 * @property-read MediaCollection|Media[] $media
 * @property-read int|null $media_count
 * @property-read User $user
 * @method static Builder|AssignmentUser newModelQuery()
 * @method static Builder|AssignmentUser newQuery()
 * @method static Builder|AssignmentUser query()
 * @method static Builder|AssignmentUser whereAssignmentId($value)
 * @method static Builder|AssignmentUser whereCreatedAt($value)
 * @method static Builder|AssignmentUser whereId($value)
 * @method static Builder|AssignmentUser whereMarks($value)
 * @method static Builder|AssignmentUser whereUpdatedAt($value)
 * @method static Builder|AssignmentUser whereUserId($value)
 * @mixin Eloquent
 */
class AssignmentUser extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
      'assignment_id',
      'user_id',
      'marks',
    ];

    public function assignment(): BelongsTo
    {
        return $this->belongsTo(Assignment::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
