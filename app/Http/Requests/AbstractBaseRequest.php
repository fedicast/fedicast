<?php

namespace App\Http\Requests;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\MessageBag;

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
     * @param MessageBag $messageBag
     * @return bool
     */
    public function persist(MessageBag $messageBag): bool
    {
        return false;
    }
}
