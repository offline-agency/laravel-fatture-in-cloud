<?php

namespace OfflineAgency\FattureInCloud\Requests;

use Exception;

class Acquisti
{
    /**
     * @param array $data
     *
     * @return array
     * @throws Exception
     */
    public static function lista($data = [])
    {
        $allowed = ['anno', 'tipo', 'data_inizio', 'data_fine', 'fornitore', 'id_fornitore', 'saldato','mostra_link_allegato'];

        $required = ['anno'];

        return Common::parseData($data, $allowed, $required);
    }

    /**
     * @param array $data
     *
     * @return array
     * @throws Exception
     */
    public static function dettagli($data = [])
    {
        $allowed = ['id'];
        $required = ['id'];

        return Common::parseData($data, $allowed, $required);
    }

    public static function nuovo(array $data)
    {
        $allowed = [''];
        $required = [''];

        return Common::parseData($data, $allowed, $required);
    }

    public static function modifica(array $data)
    {
        $allowed = [''];
        $required = [''];

        return Common::parseData($data, $allowed, $required);
    }

    public static function elimina(array $data)
    {
        $allowed = [''];
        $required = [''];

        return Common::parseData($data, $allowed, $required);
    }

    public static function info(array $data)
    {
        $allowed = [''];
        $required = [''];

        return Common::parseData($data, $allowed, $required);
    }
}
