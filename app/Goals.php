<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Goals
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goals newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goals newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goals query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $course_id
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goals whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goals whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goals whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goals whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goals whereUpdatedAt($value)
 */
class Goals extends Model
{
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
