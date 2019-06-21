<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use App\Http\Middleware\Role;

class RoleMiddlewareTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function guests_cannot_access_admin_dashboard()
    {
        $this->signIn();

        $request = Request::create('/admin/users', 'GET');

        $middleware = new Role;

        $response = $middleware->handle($request, function () { });

        $this->assertEquals($response->getStatusCode(), 302);
    }

    /** @test */
    function guests_cannot_access_owner_dashboard()
    {
        $this->signIn();

        $request = Request::create('/dashboard/chefs', 'GET');

        $middleware = new Role;

        $response = $middleware->handle($request, function () { });

        $this->assertEquals($response->getStatusCode(), 302);
    }

    /** @test */
    function chefs_cannot_access_admin_dashboard()
    {
        $this->signIn(null, 'chef');

        $request = Request::create('/admin/users', 'GET');

        $middleware = new Role;

        $response = $middleware->handle($request, function () { });

        $this->assertEquals($response->getStatusCode(), 302);
    }

    /** @test */
    function chefs_cannot_access_owner_dashboard()
    {
        $this->signIn(null, 'chef');

        $request = Request::create('/dashboard/chefs', 'GET');

        $middleware = new Role;

        $response = $middleware->handle($request, function () { });

        $this->assertEquals($response->getStatusCode(), 302);
    }

    /** @test */
    function owners_can_access_owner_dashboard()
    {
        $this->signIn(null, 'owner');

        $request = Request::create('/dashboard/chefs', 'GET');

        $middleware = new Role;

        $response = $middleware->handle($request, function () { }, 'owner');

        $this->assertEquals($response, null);
    }

    /** @test */
    function owners_cannot_access_admin_dashboard()
    {
        $this->signIn(null, 'owner');

        $request = Request::create('/admin/users', 'GET');

        $middleware = new Role;

        $response = $middleware->handle($request, function () { }, 'admin');

        $this->assertEquals($response->getStatusCode(), 302);
    }

    /** @test */
    function admins_can_access_admin_dashboard()
    {
        $this->signIn(null, 'admin');

        $request = Request::create('/admin/users', 'GET');

        $middleware = new Role;

        $response = $middleware->handle($request, function () { }, 'admin');

        $this->assertEquals($response, null);
    }

    /** @test */
    function admins_can_access_owner_dashboard()
    {
        $this->signIn(null, 'admin');

        $request = Request::create('/dashboard/chefs', 'GET');

        $middleware = new Role;

        $response = $middleware->handle($request, function () { }, 'admin');

        $this->assertEquals($response, null);
    }
}
