<?php

namespace OfflineAgency\FattureInCloud\Requests;

class Anagrafica
{
    
    public static function lista($data = []) {

        $allowed = ['filtro','id','nome','cf','piva','pagina'];

        $required = [];

        return Common::parseData($data,$allowed,$required);
    }


    public static function nuovo($data = []) {
        $allowed = [
             'nome', 'referente', 'indirizzo_via', 'indirizzo_cap', 'indirizzo_citta', 'indirizzo_provincia',
             'indirizzo_extra', 'paese', 'mail', 'tel', 'fax', 'piva', 'cf', 'termini_pagamento', 'pagamento_fine_mese',
             'cod_iva_default', 'extra', 'PA', 'PA_codice', 'type', 'first_name', 'last_name'
         ];

        $required = ['nome'];

        return Common::parseData($data,$allowed,$required);
    }

    /**
     * @param       $type singolo, lista
     * @param array $data
     *
     * @return array
     * @throws \Exception
     */
    public static function importa($type, $data = []) {
        $allowed = [
             'nome', 'referente', 'indirizzo_via', 'indirizzo_cap', 'indirizzo_citta', 'indirizzo_provincia',
             'indirizzo_extra', 'paese', 'mail', 'tel', 'fax', 'piva', 'cf', 'termini_pagamento', 'pagamento_fine_mese',
             'cod_iva_default', 'extra', 'PA', 'PA_codice', 'type', 'first_name', 'last_name'
         ];

        $required = ['nome'];

        if($type == 'singolo') {
            return Common::parseData($data,$allowed,$required);
        }
        else {
            return Common::parseArrayData($data,$allowed,$required);
        }
    }


    public static function modifica($data = []) {
        $allowed = [
            'id', 'nome', 'referente', 'indirizzo_via', 'indirizzo_cap', 'indirizzo_citta', 'indirizzo_provincia',
            'indirizzo_extra', 'paese', 'mail', 'tel', 'fax', 'piva', 'cf', 'termini_pagamento', 'pagamento_fine_mese',
            'cod_iva_default', 'extra', 'PA', 'PA_codice', 'type', 'first_name', 'last_name'
        ];

        $required = ['id'];

        return Common::parseData($data,$allowed,$required);
    }



    public static function elimina($data = []) {
        $allowed = [
            'id'
        ];

        $required = ['id'];

        return Common::parseData($data,$allowed,$required);
    }
}
