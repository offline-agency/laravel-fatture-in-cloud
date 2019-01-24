<?php

namespace OfflineAgency\FattureInCloud\Requests;

class Documenti
{
    
    public static function lista($data = []) {

        $allowed = ['anno_competenza','data_inizio','data_fine','cliente','id_cliente','saldato', 'oggetto'];

        $required = ['anno_competenza'];
    
        return Common::parseData($data,$allowed,$required);
    }

    public static function dettagli($data = []) {

        $allowed = ['id'];
        $required = ['id'];

        return Common::parseData($data,$allowed,$required);
    }


    public static function nuovo($data = []) {
    
        $allowed = [ 'id_cliente','nome', 'indirizzo_via', 'indirizzo_cap', 'indirizzo_citta', 'indirizzo_provincia',
            'indirizzo_extra', 'paese', 'lingua', 'cf', 'piva', 'anno_competenza', 'numero', 'data', 'valuta',
            'valuta_cambio', 'prezzi_ivati', 'rivalsa', 'cassa', 'rit_acconto', 'imponibile_ritenuta', 'rit_altra',
            'marca_bollo', 'oggetto_fattura', 'oggetto_interno', 'centro_ricavo', 'note', 'nascondi_scadenza', 'ddt',
            'ftacc', 'mostra_info_pagamento', 'id_template', 'ddt_id_template', 'ftacc_id_template', 'metodo_pagamento',
            'metodo_titoloN','metodo_descN','lista_articoli','lista_pagamenti','ddt_numero','ddt_data','ddt_colli',
            'ddt_peso','ddt_causale', 'ddt_luogo','ddt_trasportatore','ddt_annotazioni'];

        $required = ['nome'];

        return Common::parseData($data,$allowed,$required);
    }

    /**
     * @param       $type, lista
     * @param array $data
     *
     * @return array
     * @throws \Exception
     */
    public static function importa($type, $data = []) {

        $allowed = [ 'id_cliente','nome', 'indirizzo_via', 'indirizzo_cap', 'indirizzo_citta', 'indirizzo_provincia',
            'indirizzo_extra', 'paese', 'lingua', 'cf', 'piva', 'anno_competenza', 'numero', 'data', 'valuta',
            'valuta_cambio', 'prezzi_ivati', 'rivalsa', 'cassa', 'rit_acconto', 'imponibile_ritenuta', 'rit_altra',
            'marca_bollo', 'oggetto_fattura', 'oggetto_interno', 'centro_ricavo', 'note', 'nascondi_scadenza', 'ddt',
            'ftacc', 'mostra_info_pagamento', 'id_template', 'ddt_id_template', 'ftacc_id_template', 'metodo_pagamento',
            'metodo_titoloN','metodo_descN','lista_articoli','lista_pagamenti','ddt_numero','ddt_data','ddt_colli',
            'ddt_peso','ddt_causale', 'ddt_luogo','ddt_trasportatore','ddt_annotazioni'];

        $required = ['nome'];

        if($type == 'singolo') {
            return Common::parseData($data,$allowed,$required);
        }
        else {
            return Common::parseArrayData($data,$allowed,$required);
        }
    }


    public static function modifica($data = []) {
        $allowed = [ 'id', 'id_cliente','nome', 'indirizzo_via', 'indirizzo_cap', 'indirizzo_citta', 'indirizzo_provincia',
            'indirizzo_extra', 'paese', 'lingua', 'cf', 'piva', 'anno_competenza', 'numero', 'data', 'valuta',
            'valuta_cambio', 'prezzi_ivati', 'rivalsa', 'cassa', 'rit_acconto', 'imponibile_ritenuta', 'rit_altra',
            'marca_bollo', 'oggetto_fattura', 'oggetto_interno', 'centro_ricavo', 'note', 'nascondi_scadenza', 'ddt',
            'ftacc', 'mostra_info_pagamento', 'id_template', 'ddt_id_template', 'ftacc_id_template', 'metodo_pagamento',
            'metodo_titoloN','metodo_descN','lista_articoli','lista_pagamenti','ddt_numero','ddt_data','ddt_colli',
            'ddt_peso','ddt_causale', 'ddt_luogo','ddt_trasportatore','ddt_annotazioni'];
        $required = ['id'];

        return Common::parseData($data,$allowed,$required);
    }

    public static function elimina($data = []) {
        $allowed = ['id'];
        $required = ['id'];

        return Common::parseData($data,$allowed,$required);
    }

    public static function info($data = []) {
        $allowed = ['anno_competenza'];
        $required = ['anno_competenza'];

        return Common::parseData($data,$allowed,$required);
    }
}