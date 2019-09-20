<?php

namespace App\Http\Requests;


use App\Rules\UniqueIdentity;
use App\User;
use Illuminate\Support\MessageBag;

class DeleteAccountRequest extends AbstractBaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'i-understand' => ['required', 'filled'],
        ];
    }

    /**
     * This method returns the model for the given request.
     *
     * @return User
     */
    public function model(): User
    {
        return $this->user();
    }

    /**
     * @param MessageBag|null $messageBag
     * @return bool
     */
    public function persist(MessageBag $messageBag = null): bool
    {
        $user = $this->model();
        return true;
    }
}
