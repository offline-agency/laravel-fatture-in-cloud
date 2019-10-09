<?php

namespace OfflineAgency\FattureInCloud\Requests;

class Documenti
{
    /**
     * @param array $data
     *
     * @return array
     */
    public static function lista($data = [])
    {
        $allowed = ['anno', 'data_inizio', 'data_fine', 'cliente', 'fornitore', 'id_fornitore', 'id_cliente', 'saldato', 'oggetto', 'ogni_ddt',
            'PA_tipo_cliente', 'PA', 'pagina', ];

        $required = ['anno'];

        return Common::parseData($data, $allowed, $required);
    }

    /**
     * @param array $data
     *
     * @return array
     */
    public static function dettagli($data = [])
    {
        $allowed = ['id'];
        $required = ['id'];

        return Common::parseData($data, $allowed, $required);
    }

    /**
     * @param array $data
     *
     * @return array
     */
    public static function nuovo($data = [])
    {
        $allowed = ['id_cliente', 'id_fornitore', 'nome', 'indirizzo_via', 'indirizzo_cap', 'indirizzo_citta', 'indirizzo_provincia',
            'indirizzo_extra', 'paese', 'paese_iso', 'lingua', 'cf', 'piva', 'autocompila_anagrafica', 'salva_anagrafica',
            'numero', 'data', 'valuta', 'valuta_cambio', 'prezzi_ivati', 'rivalsa', 'cassa', 'rit_acconto', 'imponibile_ritenuta', 'rit_altra',
            'marca_bollo', 'oggetto_visibile', 'oggetto_interno', 'centro_ricavo', 'centro_costo', 'note', 'nascondi_scadenza', 'ddt',
            'ftacc', 'mostra_info_pagamento', 'id_template', 'ddt_id_template', 'ftacc_id_template', 'metodo_pagamento',
            'metodo_titoloN', 'metodo_descN', 'mostra_totali', 'mostra_bottone_paypal', 'mostra_bottone_bonifico', 'mostra_bottone_notifica',
            'lista_articoli', 'lista_pagamenti', 'ddt_numero', 'ddt_data', 'ddt_colli', 'ddt_peso', 'ddt_causale', 'ddt_luogo', 'ddt_trasportatore',
            'ddt_annotazioni', 'PA', 'PA_tipo_cliente', 'PA_tipo', 'PA_numero', 'PA_data', 'PA_cup', 'PA_cig', 'PA_codice', 'PA_pec', 'PA_esigibilita',
            'PA_modalita_pagamento', 'PA_istituto_credito', 'PA_iban', 'PA_beneficiario', 'extra_anagrafica', 'split_payment', ];

        $required = ['nome'];

        return Common::parseData($data, $allowed, $required);
    }

    /**
     * @param       $type singolo, lista
     * @param array $data
     *
     * @throws \Exception
     *
     * @return array
     */
    /* public static function importa($type, $data = []) {

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
     }*/

    /**
     * @param array $data
     *
     * @return array
     */
    public static function modifica($data = [])
    {
        $allowed = ['id', 'id_cliente', 'id_fornitore', 'nome', 'indirizzo_via', 'indirizzo_cap', 'indirizzo_citta', 'indirizzo_provincia',
            'indirizzo_extra', 'paese', 'paese_iso', 'lingua', 'cf', 'piva', 'autocompila_anagrafica', 'salva_anagrafica', 'numero', 'data', 'valuta',
            'valuta_cambio', 'prezzi_ivati', 'rivalsa', 'cassa', 'rit_acconto', 'imponibile_ritenuta', 'rit_altra',
            'marca_bollo', 'oggetto_visibile', 'oggetto_interno', 'centro_ricavo', 'centro_costo', 'note', 'nascondi_scadenza', 'ddt',
            'ftacc',  'id_template', 'ddt_id_template', 'ftacc_id_template', 'mostra_info_pagamento', 'metodo_pagamento',
            'metodo_titoloN', 'metodo_descN', 'mostra_totali', 'mostra_bottone_paypal', 'mostra_bottone_bonifico', 'mostra_bottone_notifica', 'lista_articoli', 'lista_pagamenti', 'ddt_numero', 'ddt_data', 'ddt_colli',
            'ddt_peso', 'ddt_causale', 'ddt_luogo', 'ddt_trasportatore', 'ddt_annotazioni', 'PA', 'PA_tipo_cliente', 'PA_tipo', 'PA_numero', 'PA_data',
            'PA_cup', 'PA_cig', 'PA_codice', 'PA_pec', 'PA_esigibilita', 'PA_modalita_pagamento', 'PA_istituto_credito', 'PA_iban', 'PA_beneficiario',
            'split_payment', 'extra_anagrafica', ];
        $required = ['id'];

        return Common::parseData($data, $allowed, $required);
    }

    /**
     * @param array $data
     *
     * @return array
     */
    public static function elimina($data = [])
    {
        $allowed = ['id'];
        $required = ['id'];

        return Common::parseData($data, $allowed, $required);
    }

    /**
     * @param array $data
     *
     * @return array
     */
    public static function info($data = [])
    {
        $allowed = ['anno_competenza'];
        $required = ['anno_competenza'];

        return Common::parseData($data, $allowed, $required);
    }
}
