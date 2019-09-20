<?php

namespace App\Rules;

use App\Identity;
use App\Nameable;
use Illuminate\Contracts\Validation\Rule;

class UniqueIdentity implements Rule
{
    /**
     * @var Nameable
     */
    private $model;

    /**
     * UniqueIdentity constructor.
     * @param Nameable $model
     */
    public function __construct(Nameable $model)
    {
        $this->model = $model;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        if ($found = $this->model->identities()->where('name', '=', $value)->first()){
            return true;
        }

        return !Identity::whereName($value)->exists();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'The validation error message.';
    }
}
