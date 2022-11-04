<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Comments
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Comments newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comments newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comments query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $text
 * @property int|null $parent_id
 * @property string $ip
 * @property string $email
 * @property string $name
 * @property string $commentable_type
 * @property int $commentable_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CommentsFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Comments whereCommentableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comments whereCommentableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comments whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comments whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comments whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comments whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comments whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comments whereUpdatedAt($value)
 */
class Comments extends Model
{
    use HasFactory;


}
