<?php

namespace Tests\App\Http\Controllers\Admin;


use App\Http\Controllers\Admin\AssociationMessageCrudController;
use Faker\Factory;

class AssociationMessageCrudControllerTest extends BaseCrudControllerTest
{
    private $message;

    public function setUp()
    {
        parent::setUp();

        $faker = Factory::create();

        $this->message = [
            'firstname' => $faker->firstName,
            'lastname' => $faker->lastName,
            'email' => $faker->safeEmail,
            'message' => $faker->text,
        ];
    }

    /**
     * Test the list view is displayed ok.
     */
    public function testList()
    {
        $this->visit('/admin/school')
             ->see(AssociationMessageCrudController::PLURAL_NAME);
    }

    /**
     * Test we can edit an entity.
     */
    public function testEdit()
    {

        $this->visit('/admin/association-messages/1/edit')
             ->submitForm($this->saveButtonText, $this->message)
             ->seePageIs('/admin/association-messages')
        ;

        $this->seeInDatabase('association_messages', $this->message);
    }

    /**
     * Test we get all error messages when we omit necessary parameters.
     */
    public function testEditMissingParameters()
    {
        $message = $this->message;
        $message['email'] = null;

        $this->visit('/admin/association-messages/1/edit')
             ->submitForm($this->saveButtonText, $message)
             ->see($this->requiredFieldMessage('adresse mail'))
        ;
    }
}
