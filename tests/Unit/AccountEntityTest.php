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

    public function test_licence_duration()
    {
        Http::fake([
            'info/account' => Http::response(
              (new AccountFakeResponse)->getLicenseDuration()
            ),
        ]);

        $account = new Account();
        $response = $account->getLicenseDuration();

        $this->assertIsString($response['tipo_licenza']); // prova
        $this->assertTrue($response['success']); // true
    }

    public function test_payment_method_for_purchase_list()
    {
        Http::fake([
            'info/account' => Http::response(
              (new AccountFakeResponse)->getPaymentMethodForPurchaseList()
            ),
        ]);

        $account = new Account();
        $response = $account->getPaymentMethodForPurchaseList();
        $paymentMethods = $response['lista_metodi_pagamento'];
        $bankTransfer = $response['lista_metodi_pagamento'][0];
        $creditCard = $response['lista_metodi_pagamento'][1];

        $this->assertEquals($bankTransfer['id'], 153);
        $this->assertEquals($bankTransfer['nome_metodo'], 'Bonifico Bancario');
        $this->assertEquals($bankTransfer['campo1'], 'ISTITUTO BANCARIO');
        $this->assertEquals($bankTransfer['desc1'], 'BANCA SPA');
        $this->assertEquals($bankTransfer['campo2'], 'IBAN');

      $this->assertEquals($creditCard['id'], 160);
      $this->assertEquals($creditCard['nome_metodo'], 'Carta di credito');

      $this->assertTrue($response['success']); // true
    }
}
