<?php

namespace Tests\Feature;

use App\Registration;
use App\User;
use Route;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationQueueTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_open_by_default()
    {
        $helper = new Registration();

        $this->assertTrue(config('registration.open'), true);
        $this->assertTrue($helper->isOpen());
    }

    public function test_registration_closed_when_limit_hit()
    {
        $helper = new Registration();
        $this->assertFalse($helper->hasQueue());

        for ($i = 0; $i < 99; $i++) {
            factory(User::class)->create();
        }

        $this->assertFalse(Route::has('auth.queue'));

        $this->assertEquals(99, User::query()->count('id'));
        $this->assertEquals(99, app()->get('cache')->get('user.count'));
        $this->assertTrue($helper->isOpen());

        factory(User::class)->create();
        $this->assertEquals(100, User::query()->count('id'));
        $this->assertEquals(100, app()->get('cache')->get('user.count'));
        $this->assertFalse($helper->isOpen());

        $this->assertTrue($helper->hasQueue());
    }
}
