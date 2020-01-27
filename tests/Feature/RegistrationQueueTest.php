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

    public function test_registration_helper_isOpen_listens_to_config()
    {
        config()->set('registration.open', false);
        $helper = new Registration();
        $this->assertFalse($helper->isOpen());
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

    public function test_registration_helper_hasQueue_listens_to_config()
    {
        config()->set('registration.queue', false);
        $helper = new Registration();
        $this->assertFalse($helper->hasQueue());
    }

    public function test_invites_disabled_by_default()
    {
        $helper = new Registration();
        $this->assertFalse($helper->invitesAllowed());
    }

    public function test_registration_helper_invitesAllowed_listens_to_config()
    {
        config()->set('registration.invites', 'ENABLED');
        $helper = new Registration();
        $this->assertTrue($helper->invitesAllowed());
    }

    public function test_registration_helper_invitesAllowed_invites_open_limited()
    {
        config()->set('registration.invites', Registration::INVITES_OPEN_LIMITED);
        $helper = new Registration();
        $this->assertTrue($helper->invitesAllowed());

        config()->set('registration.open', false);
        $this->assertFalse($helper->invitesAllowed());
        config()->set('registration.open', true);

        for ($i = 0; $i < 100; $i++) {
            factory(User::class)->create();
        }

        $this->assertFalse($helper->invitesAllowed());
    }

    public function test_registration_helper_invitesAllowed_invites_limited()
    {
        config()->set('registration.invites', Registration::INVITES_INVITES_LIMITED);
        config()->set('registration.open', false);
        $helper = new Registration();
        $this->assertTrue($helper->invitesAllowed());

        for ($i = 0; $i < 100; $i++) {
            factory(User::class)->create();
        }

        $this->assertFalse($helper->invitesAllowed());
    }
}
