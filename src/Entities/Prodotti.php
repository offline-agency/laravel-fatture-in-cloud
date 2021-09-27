<?php

namespace OfflineAgency\FattureInCloud\Entities;

use Exception;
use OfflineAgency\FattureInCloud\Requests\Prodotti as Request;

class Prodotti extends Anagrafica
{
  /**
   * @param  array  $data
   * @return mixed|string
   *
   * @throws Exception
   */
  public function lista($data = [])
  {
    Request::lista($data);

    return $this->auth->post('prodotti/lista', $data);
  }

  /**
   * @param  array  $data
   * @return mixed|string
   *
   * @throws Exception
   */
  public function nuovo($data = [])
  {
    Request::nuovo($data);

    return $this->auth->post('prodotti/nuovo', $data);
  }

  /**
   * @param  array  $data
   * @return mixed|string
   *
   * @throws Exception
   */
  public function importa($data = [])
  {
    Request::dettagli($data);

    return $this->auth->post('prodotti/dettagli', $data);
  }

  /**
   * @param  array  $data
   * @return mixed|string
   *
   * @throws Exception
   */
  public function modifica($data = [])
  {
    Request::modifica($data);

    return $this->auth->post('prodotti/modifica', $data);
  }

  /**
   * @param  array  $data
   * @return mixed|string
   *
   * @throws Exception
   */
  public function elimina($data = [])
  {
    Request::elimina($data);

    return $this->auth->post('prodotti/elimina', $data);
  }
}
