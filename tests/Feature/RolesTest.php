<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RolesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guests_cannot_access_dashboards()
    {
        $this->get('/dashboard/chefs')->assertRedirect('login');
        $this->get('/dashboard/sets')->assertRedirect('login');
        $this->get('/admin/users')->assertRedirect('login');
        $this->get('/admin/products')->assertRedirect('login');
    }

    /** @test */
    public function chefs_cannot_access_dashboards()
    {
        $this->signIn(null, 'chef');

        $this->get('/dashboard/chefs')->assertRedirect('login');
        $this->get('/dashboard/sets')->assertRedirect('login');
        $this->get('/admin/users')->assertRedirect('login');
        $this->get('/admin/products')->assertRedirect('login');
    }

    /** @test */
    public function owners_can_access_owners_dashboard()
    {
        $this->signIn(null, 'owner');

        $this->get('/dashboard/chefs')->assertStatus(200);
        $this->get('/dashboard/sets')->assertStatus(200);
        $this->get('/admin/users')->assertRedirect('login');
        $this->get('/admin/products')->assertRedirect('login');
    }

    
    /** @test */
    public function admins_can_access_dashboards()
    {
        $this->signIn(null, 'admin');

        $this->get('/dashboard/chefs')->assertStatus(200);
        $this->get('/dashboard/sets')->assertStatus(200);
        $this->get('/admin/users')->assertStatus(200);
        $this->get('/admin/products')->assertStatus(200);
    }
}
