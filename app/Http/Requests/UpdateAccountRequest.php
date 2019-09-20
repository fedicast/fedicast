<?php

namespace App\Http\Requests;


use App\Rules\UniqueIdentity;
use App\User;
use Illuminate\Support\MessageBag;

class UpdateAccountRequest extends AbstractBaseRequest
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
            'username' => ['sometimes','max:48', new UniqueIdentity($this->model())]
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
     * @param MessageBag $messageBag
     * @return bool
     */
    public function persist(MessageBag $messageBag): bool
    {
        $user = $this->model();

        if ($this->has('username')) {
            $user->updateUsername($this->get('username'));
            $messageBag->add('username', __('Your changes have been saved'));
            return true;
        }

        return false;
    }
}
