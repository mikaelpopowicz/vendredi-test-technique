<?php

namespace App\Http\Requests;

use Backpack\CRUD\app\Http\Requests\CrudRequest;

class AssociationMessageRequest extends CrudRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => 'required|min:5|max:255',
            'lastname' => 'required|min:5|max:255',
            'email' => 'required|email',
            'message' => 'required|string|min:2|max:500',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'firstname' => 'prénom',
            'lastname' => 'nom',
            'email' => 'adresse mail',
            'message' => 'votre demande',
        ];
    }
}
