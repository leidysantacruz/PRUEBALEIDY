<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MiPruebaTest extends TestCase
{
    /**
     * Verifica si la página de inicio responde con estado 200.
     *
     * @return void
     */
    public function test_pagina_de_inicio_responde_con_estado_200()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

