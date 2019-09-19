<?php

namespace App\Http\Requests;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

abstract class AbstractBaseRequest extends FormRequest
{
    /**
     * This method returns the model for the given request.
     *
     * @return Model
     */
    abstract public function model();

    /**
     * This method persists the model with any changes required for this request.
     *
     * @return bool
     */
    public function persist(): bool
    {
        return false;
    }
}
