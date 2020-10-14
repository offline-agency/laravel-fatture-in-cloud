<?php

namespace Tests\Unit\Entities;

use Mockery as m;
use OfflineAgency\FattureInCloud\Auth;
use OfflineAgency\FattureInCloud\Entities\Account;
use Tests\TestCase;

class AccountEntityTest extends TestCase
{
    /** @test */
    public function it_call_api_with_auth()
    {
        // Arrange
        $request = ['campi' => ['nome', 'durata_licenza', 'tipo_licenza']];
        $auth = m::mock(Auth::class);
        $auth->shouldReceive('post')
            ->with('info/account', $request)
            ->once()
            ->andReturn(['success' => true]);

        app()->bind(Auth::class, function () use ($auth) {
            return $auth;
        });

        // Act
        $account = new Account();
        $response = $account->getInfo($request);

        // Assert
        $this->assertIsArray($response);
        $this->assertTrue($response['success']);
    }
}
