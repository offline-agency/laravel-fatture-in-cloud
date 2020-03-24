<?php

namespace OfflineAgency\FattureInCloud\Requests;

use Exception;

class Prodotti
{
    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public static function lista($data = [])
    {
        $allowed = ['filtro', 'id', 'nome', 'cod', 'desc', 'categoria', 'pagina'];

        $required = [];

        return Common::parseData($data, $allowed, $required);
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public static function nuovo($data = [])
    {
        $allowed = ['cod', 'nome', 'desc', 'prezzo_ivato', 'prezzo_netto', 'prezzo_lordo', 'costo', 'cod_iva', 'um',
            'categoria', 'note', 'magazzino', 'giacenza_iniziale', ];

        $required = ['nome'];

        return Common::parseData($data, $allowed, $required);
    }


    /**
     * @param $type
     * @param array $data
     * @return array
     * @throws Exception
     */
    public static function importa($type, $data = [])
    {
        $allowed = ['cod', 'nome', 'desc', 'prezzo_ivato', 'prezzo_netto', 'prezzo_lordo', 'costo', 'cod_iva', 'um',
            'categoria', 'note', 'magazzino', 'giacenza_iniziale', ];

        $required = ['nome'];

        if ($type == 'singolo') {
            return Common::parseData($data, $allowed, $required);
        } else {
            return Common::parseArrayData($data, $allowed, $required);
        }
    }

    /**
     * @param array $data
     * @return array
     * @throws \Exception
     */
    public static function modifica($data = [])
    {
        $allowed = ['id', 'cod', 'nome', 'desc', 'prezzo_ivato', 'prezzo_netto', 'prezzo_lordo', 'costo', 'cod_iva', 'um',
            'categoria', 'note', 'magazzino', 'giacenza_iniziale', ];
        $required = ['id'];

        return Common::parseData($data, $allowed, $required);
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public static function elimina($data = [])
    {
        $allowed = ['id'];
        $required = ['id'];

        return Common::parseData($data, $allowed, $required);
    }
}
