<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\AssociationMessageRequest as StoreRequest;
use App\Http\Requests\AssociationMessageRequest as UpdateRequest;

class AssociationMessageCrudController extends CrudController
{

    const SINGLE_NAME = 'formulaire association';
    const PLURAL_NAME = 'formulaires association';

    public function setUp()
    {

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/
        $this->crud->setModel("App\AssociationMessage");
        $this->crud->setRoute("admin/association-messages");
        $this->crud->setEntityNameStrings(static::SINGLE_NAME, static::PLURAL_NAME);

        /*
		|--------------------------------------------------------------------------
		| BASIC CRUD INFORMATION
		|--------------------------------------------------------------------------
		*/

        $this->crud->setFromDb();

        // ------ CRUD FIELDS
        $this->crud->addFields([
            [
                'name' => 'lastname',
                'label' => 'Nom',
            ],
            [
                'name' => 'firstname',
                'label' => 'Prénom',
            ],
            [
                'name' => 'email',
                'label' => 'Adresse mail',
            ],
            [
                'label' => 'Votre demande',
                'name' => 'message',
                'type' => 'textarea',
            ],
        ]);

        // ------ CRUD COLUMNS
        $this->crud->removeColumn('lastname');
        $this->crud->setColumnDetails('firstname', [
            'label' => 'Nom & Prénom',
            'type' => "model_function",
            'function_name' => 'getFullNameAttribute',
        ]);
        $this->crud->setColumnDetails('email', [
            'label' => 'Adresse mail'
        ]);
        $this->crud->setColumnDetails('message', [
            'label' => 'Votre demande'
        ]);

        // ------ CRUD ACCESS
        $this->crud->denyAccess(['create']);
        
        $this->crud->orderBy('updated_at', 'desc');
    }

	public function store(StoreRequest $request)
	{
		// your additional operations before save here
        $redirect_location = parent::storeCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
	}

	public function update(UpdateRequest $request)
	{
		// your additional operations before save here
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
	}
}
