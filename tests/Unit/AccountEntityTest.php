<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Http;
use OfflineAgency\FattureInCloud\Entities\Account;
use Tests\TestCase;

class AccountEntityTest extends TestCase
{
  public function test_country_list()
  {
    Http::fake([
      'info/account' => Http::response($this->getHttpResponse('info.account.country'))
    ]);

    $account = new Account();
    $response = $account->getCountryList();

    $this->assertIsArray($response['lista_paesi']); // [] string
    $this->assertIsString($response['lista_paesi'][0]); // Afghanistan
    $this->assertTrue($response['success']); // true
  }

}
