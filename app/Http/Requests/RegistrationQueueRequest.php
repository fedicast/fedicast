<?php

namespace App\Http\Requests;


use App\Entities\RegistrationQueue;
use Illuminate\Support\MessageBag;

class RegistrationQueueRequest extends AbstractBaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:registration_queue'],
        ];
    }

    /**
     * This method returns the model for the given request.
     *
     * @return RegistrationQueue
     */
    public function model(): RegistrationQueue
    {
        return new RegistrationQueue();
    }

    /**
     * @param MessageBag|null $messageBag
     * @return bool
     */
    public function persist(MessageBag $messageBag = null): bool
    {
        $model = $this->model();
        $model->name = $this->get('name');
        $model->email = $this->get('email');
        $model->is_supporter = (bool) $this->get('is_supporter', false);
        return $model->save();
    }
}
