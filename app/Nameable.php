<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

interface Nameable
{
    /**
     * All identities this model may have had.
     *
     * @return MorphMany|Identity[]|null
     */
    public function identities(): MorphMany;

    /**
     * The models current identity.
     *
     * @return BelongsTo|Identity|null
     */
    public function identity(): BelongsTo;
}
