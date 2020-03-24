<?php

namespace OfflineAgency\FattureInCloud\Requests;

class Acquisti
{
    /**
     * @param array $data
     * @return array
     */
    public static function lista($data = [])
    {
        $allowed = ['anno_competenza', 'tipo', 'data_inizio', 'data_fine', 'fornitore', 'id_fornitore', 'saldato'];

        $required = ['anno_competenza'];

        return Common::parseData($data, $allowed, $required);
    }

    /**
     * @param array $data
     * @return array
     */
    public static function dettagli($data = [])
    {
        $allowed = ['id'];
        $required = ['id'];

        return Common::parseData($data, $allowed, $required);
    }
}
