<?php

namespace OfflineAgency\FattureInCloud\Entities;

use OfflineAgency\FattureInCloud\FattureInCloud;
use OfflineAgency\FattureInCloud\Requests\Account as Request;

class Account extends FattureInCloud
{
    /**
     * @param  array  $data
     * @return mixed|string
     */
    public function getInfo($data = ['nome'])
    {
        Request::info($data);

        return $this->auth->post('info/account', $data);
    }

    /**
     * @param array $data
     *
     * @return mixed|string
     */
    public function getGenericInfo($data = ['nome'])
    {
        Request::info($data);

        return $this->auth->post('richiesta/info', $data);
    }

  /**
   * @return mixed|string
   */
  public function getLicenseDuration()
  {
    $data = [
      'campi' => 'durata_licenza'
    ];
    return $this->getInfo($data);
  }

  /**
   * @return mixed|string
   */
  public function getLicenceType()
  {
    $data = [
      'campi' => 'tipo_licenza'
    ];
    return $this->getInfo($data);
  }

  /**
   * @return mixed|string
   */
  public function getCurrencyList()
  {
    $data = [
      'campi' => 'lista_valute'
    ];
    return $this->getInfo($data);
  }

  /**
   * @return mixed|string
   */
  public function getVatList()
  {
    $data = [
      'campi' => 'lista_iva'
    ];
    return $this->getInfo($data);
  }

  /**
   * @return mixed|string
   */
  public function getCountryList()
  {
    $data = [
      'campi' => 'lista_paesi'
    ];
    return $this->getInfo($data);
  }

  /**
   * @return mixed|string
   */
  public function getTemplateList()
  {
    $data = [
      'campi' => 'lista_template'
    ];
    return $this->getInfo($data);
  }

  /**
   * @return mixed|string
   */
  public function getPaymentMethodForSalesList()
  {
    $data = [
      'campi' => 'lista_conti'
    ];
    return $this->getInfo($data);
  }

  /**
   * @return mixed|string
   */
  public function getPaymentMethodForPurchaseList()
  {
    $data = [
      'campi' => 'lista_metodi_pagamento'
    ];
    return $this->getInfo($data);
  }
}
