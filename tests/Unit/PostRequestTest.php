<?php

namespace Tests\Unit;

use Tests\TestCase;
// use Faker\Generator as Faker;

class PostRequestTest extends TestCase
{
    // private $faker;

    // public function __construct()
    // {
    //     $this->faker = new Faker;
    // }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testPostRequest()
    {
        // $value = [
        //     'name' => $this->faker->name,
        //     'detail' => $this->faker->paragraph
        // ];

        $value = [
            'name' => 'zaii',
            'detail' => 'zaii'
        ];

        // $response = array(
        //     'success' => true,
        //     'message' => 'Product created successfully.',
        //     'data' =>
        //     array(
        //         'name' => 'zaii',
        //         'detail' => 'zaii',
        //         'updated_at' => '2022-06-02T10:20:05.000000Z',
        //         'created_at' => '2022-06-02T10:20:05.000000Z',
        //         'id' => 1,
        //     ),
        // );

        $this->post(route('products.store'), $value)->assertStatus(200)->assertJson(['data' => $value]);
    }
}
