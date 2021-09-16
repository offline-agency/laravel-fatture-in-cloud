<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Http;
use OfflineAgency\FattureInCloud\Entities\Account;
use Tests\Fake\AccountFakeResponse;
use Tests\TestCase;

class AccountEntityTest extends TestCase
{
    public function test_country_list()
    {
        Http::fake([
            'info/account' => Http::response(
              (new AccountFakeResponse)->getCountryList()
            ),
        ]);

        $account = new Account();
        $response = $account->getCountryList();

        $this->assertIsArray($response['lista_paesi']); // [] string
    $this->assertIsString($response['lista_paesi'][0]); // Afghanistan
    $this->assertTrue($response['success']); // true
    }

    public function test_currency_list()
    {
        Http::fake([
            'info/account' => Http::response(
              (new AccountFakeResponse)->getCurrencyList()
            ),
        ]);

        $account = new Account();
        $response = $account->getCurrencyList();

        $currency = $response['lista_valute'][0];
        $codice = $currency['codice']; //AED
    $simbolo = $currency['codice']; //AED
    $cambio = $currency['codice']; //4.32170

    $this->assertIsArray($response['lista_valute']);
        $this->assertIsArray($currency);
        $this->assertIsString($codice);
        $this->assertIsString($simbolo);
        $this->assertIsString($cambio);
        $this->assertTrue($response['success']); // true
    }

    public function test_licence_type()
    {
        Http::fake([
            'info/account' => Http::response(
              (new AccountFakeResponse)->getLicenceType()
            ),
        ]);

        $account = new Account();
        $response = $account->getLicenceType();

        $this->assertIsString($response['tipo_licenza']); // prova
    $this->assertTrue($response['success']); // true
    }
}
