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
            'username' => ['sometimes','max:48', new UniqueIdentity($this->model())],
            'name' => ['sometimes', 'required', 'max:32'],
            'email' => ['sometimes', 'email'],
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
        $persisted = false;

        if ($this->has('username')) {
            $user->updateUsername($this->get('username'));
            $messageBag->add('username', __('Your username has been updated'));
            $persisted = true;
        }

        if ($this->has('name')) {
            $user->update(['name' => $this->get('name')]);
            $messageBag->add('name', __('Your display name has been updated'));
            $persisted = true;
        }

        if ($this->has('email')) {
            $user->update(['email' => $this->get('email')]);
            $messageBag->add('email', __('Your email address has been updated and a verification email sent'));
            $persisted = true;
        }

        return $persisted;
    }
}
