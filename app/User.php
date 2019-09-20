<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Str;

/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $identity_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Identity[] $identities
 * @property-read int|null $identities_count
 * @property-read \App\Identity|null $identity
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIdentityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable implements MustVerifyEmail, Nameable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * All usernames this account may have had, this is because we want to be able to redirect
     * to the current profile page from any of the users defined usernames. At least for a
     * while...
     *
     * @return MorphMany|Identity[]|null
     */
    public function identities(): MorphMany
    {
        return $this->morphMany(Identity::class, 'nameable');
    }

    /**
     * The users current username.
     *
     * @return BelongsTo|Identity|null
     */
    public function identity(): BelongsTo
    {
        return $this->belongsTo(Identity::class, 'identity_id');
    }

    /**
     * @param string|null $username
     * @return Identity|null
     */
    public function updateUsername(?string $username = null): ?Identity
    {
        // If the username is the same then do not update.
        if ($found = $this->identity) {
            if ($found->name === $username) {
                return $found;
            }
        }

        // If the $username is null or empty then the user is removing it
        if (is_null($username)) {
            $this->identity_id = null;
            $this->save();
            return null;
        }

        // Is this an old username for this account? if so re-associate it.
        if ($found = $this->identities()->where('name','=', $username)->first()){
            $this->identity()->associate($found)->save();
            return $found;
        }

        if ($saved = $this->identities()->save(new Identity(['name' => Str::slug($username)]))) {
            $this->identity()->associate($saved)->save();
            return $saved;
        }

        return null;
    }
}
