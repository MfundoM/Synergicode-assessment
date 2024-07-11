<?php

namespace Tests\Unit;

use App\Models\ContactUs;
use Tests\TestCase;


class ContactUsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    //Check if form exists
    public function test_form()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    //Check if form posts successfully
    public function test_form_post()
    {
        $response = $this->post('/contactus', [
            'name' => 'Jane Doe',
            'email' => 'janedoe@gmail.com',
            'message' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        ]);

        $response->assertRedirect('/success');
    }

    //Check if data exists in database
    public function test_if_data_exists_in_database()
    {
        $this->assertDatabaseHas('contact_us', [
            'name' => 'Jane Doe'
        ]);
    }
}
