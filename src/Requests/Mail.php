<?php

namespace OfflineAgency\FattureInCloud\Requests;

class Mail
{
    
    public static function lista($data = []) {

        $allowed = ['filtro','destinatario', 'mittente','stato','data_inizio','data_fine','pagina'];

        $required = [];
    
        return Common::parseData($data,$allowed,$required);
    }
}