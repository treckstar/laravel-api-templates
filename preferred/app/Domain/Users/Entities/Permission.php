<?php

namespace Preferred\Domain\Users\Entities;

use Illuminate\Database\Eloquent\Builder;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;

/**
 * Class Permission
 *
 * @property string                                                                                      $id
 * @property string                                                                                      $name
 * @property string                                                                                      $guard_name
 * @property \Illuminate\Support\Carbon|null                                                             $created_at
 * @property \Illuminate\Support\Carbon|null                                                             $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Preferred\Domain\Audits\Entities\Audit[]     $audits
 * @property-read int|null                                                                               $audits_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Preferred\Domain\Users\Entities\Permission[] $permissions
 * @property-read int|null                                                                               $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Preferred\Domain\Users\Entities\Role[]       $roles
 * @property-read int|null                                                                               $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Preferred\Domain\Users\Entities\User[]       $users
 * @property-read int|null                                                                               $users_count
 * @method static Builder|Permission newModelQuery()
 * @method static Builder|Permission newQuery()
 * @method static Builder|\Spatie\Permission\Models\Permission permission($permissions)
 * @method static Builder|Permission query()
 * @method static Builder|\Spatie\Permission\Models\Permission role($roles, $guard = null)
 * @method static Builder|Permission whereCreatedAt($value)
 * @method static Builder|Permission whereGuardName($value)
 * @method static Builder|Permission whereId($value)
 * @method static Builder|Permission whereName($value)
 * @method static Builder|Permission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Permission extends \Spatie\Permission\Models\Permission implements AuditableContract
{
    use Auditable;

    public $incrementing = false;

    protected $keyType = 'string';

    protected $casts = [
        'id' => 'string',
    ];

    protected $fillable = [
        'name',
        'guard_name',
    ];
}
