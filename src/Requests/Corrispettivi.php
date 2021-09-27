<?php

namespace OfflineAgency\FattureInCloud\Requests;

use Exception;

class Corrispettivi
{
    /**
     * @param  array  $data
     * @return array
     *
     * @throws Exception
     */
    public static function lista(array $data)
    {
        $allowed = ['anno', 'tipo', 'data_inizio', 'data_fine', 'id'];

        $required = ['anno'];

        return Common::parseData($data, $allowed, $required);
    }

    /**
     * @param  array  $data
     * @return array
     *
     * @throws Exception
     */
    public static function nuovo(array $data)
    {
        $allowed = ['tipo', 'data', 'protocollo_auto', 'protocollo', 'protocollo', 'desc', 'centro_ricavo', 'metodo', 'importi_ivati', 'lista_righe'];

        $required = ['tipo'];

        return Common::parseData($data, $allowed, $required);
    }

    /**
     * @param  array  $data
     * @return array
     *
     * @throws Exception
     */
    public static function modifica(array $data)
    {
        $allowed = ['id', 'tipo', 'data', 'protocollo_auto', 'protocollo', 'protocollo', 'desc', 'centro_ricavo', 'metodo', 'importi_ivati', 'lista_righe'];

        $required = ['id', 'tipo'];

        return Common::parseData($data, $allowed, $required);
    }

    /**
     * @param  array  $data
     * @return array
     *
     * @throws Exception
     */
    public static function elimina(array $data)
    {
        $allowed = ['id'];

        $required = ['id'];

        return Common::parseData($data, $allowed, $required);
    }
}
