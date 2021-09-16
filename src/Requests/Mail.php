<?php

namespace OfflineAgency\FattureInCloud\Requests;

use Exception;

class Mail
{
    /**
     * @param  array  $data
     * @return array
     *
     * @throws Exception
     */
    public static function lista($data = [])
    {
        $allowed = ['filtro', 'destinatario', 'mittente', 'stato', 'data_inizio', 'data_fine', 'pagina'];

        $required = [];

        return Common::parseData($data, $allowed, $required);
    }
}
