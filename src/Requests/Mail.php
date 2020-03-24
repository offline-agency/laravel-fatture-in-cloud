<?php

namespace OfflineAgency\FattureInCloud\Requests;

use Exception;

class Mail
{
    /**
     * @param array $data
     *
     * @throws Exception
     *
     * @return array
     */
    public static function lista($data = [])
    {
        $allowed = ['filtro', 'destinatario', 'mittente', 'stato', 'data_inizio', 'data_fine', 'pagina'];

        $required = [];

        return Common::parseData($data, $allowed, $required);
    }
}
