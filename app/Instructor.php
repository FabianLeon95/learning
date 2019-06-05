<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Instructor
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instructor newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instructor newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instructor query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property string|null $biography
 * @property string|null $website_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instructor whereBiography($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instructor whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instructor whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instructor whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instructor whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instructor whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Instructor whereWebsiteUrl($value)
 */
class Instructor extends Model
{
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
