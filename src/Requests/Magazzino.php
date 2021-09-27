<?php

namespace OfflineAgency\FattureInCloud\Requests;

use Exception;

class Magazzino
{
  public static function lista(array $data)
  {
    $allowed = ['anno', 'data_inizio', 'data_fine', 'fornitore', 'id_fornitore', 'mostra_link_allegato'];

    $required = ['anno'];

    return Common::parseData($data, $allowed, $required);
  }

  /**
   * @param  array  $data
   * @return array
   *
   * @throws Exception
   */
  public static function dettagli(array $data)
  {
    $allowed = ['id'];

    $required = ['id'];

    return Common::parseData($data, $allowed, $required);
  }
}
