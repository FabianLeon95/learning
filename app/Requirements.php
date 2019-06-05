<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Requirements
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requirements newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requirements newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requirements query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $course_id
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requirements whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requirements whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requirements whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requirements whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requirements whereUpdatedAt($value)
 */
class Requirements extends Model
{
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
