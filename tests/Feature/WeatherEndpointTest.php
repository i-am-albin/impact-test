<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WeatherEndpointTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Tests
     * - The weather endpoint cannot be accessed by an anonymous user  - @todo
     * - The weather endpoint can be accessed by logged in user - @todo
     * - The weather endpoint returns an error if no location is provided - @todo
     * - The weather endpoint returns the specified data - @todo
     */

    /**
     * @test
     */
    public function weather_endpoint_cannot_be_accessed_by_anonymous_user() {
        $response = $this->get('/api/get-weather');
        $response->assertForbidden();
    }

    /**
     * @test
     */
    public function weather_endpoint_can_be_accessed_by_logged_in_user() {
        // @todo - Setup user

        // @todo - Login user

        //$this->actingAs($user);
        $response = $this->get('/api/get-weather?search=London');
        $response->assertOk();
    }

    /**
     * @test
     */
    public function weather_endpoint_returns_error_if_no_search_provided() {
        // @todo - Setup user

        // @todo - Login user

        //$this->actingAs($user);
        $response = $this->get('/api/get-weather');
        $response->assertStatus(400);
        $response->assertJsonValidationErrorFor('search');
    }

    /**
     * @test
     */
    public function weather_endpoint_returns_specified_data() {
        // @todo - Setup user

        // @todo - Login user

        //$this->actingAs($user);
        $response = $this->get('/api/get-weather?search=London');
        $response->assertOk();
        $response->assertJsonStructure(
            [
                'data' => [
                    'temp_c',
                    'feelslike_c',
                    'condition' => [
                        "text",
                        "icon",
                        "code",
                    ],
                    'wind_dir',
                    'wind_mph',
                    'uv',
                ],
            ]
        );
    }
}
