<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use App\Models\student;
use App\Models\User;
use Illuminate\Support\Str;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class StudentTest extends TestCase
{

    protected $headers = ['Accept' => 'application/json'];
    protected $user;

    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function createToken(){
        $this->user = $user =
            User::factory()->create();
    }

    public function test_store_new_student(){
        $this->createToken();
        Sanctum::actingAs($this->user);

        $response = $this->post('/api/students',[
            'name' => "minaa",
            'school_id' => 2,
        ], $this->headers);
        $response->assertStatus(200);

    }

    public function test_get_all_students(){
        $this->createToken();
        Sanctum::actingAs($this->user);
        $response = $this->get('/api/students', $this->headers);

        $response->assertStatus(200);

    }
}
