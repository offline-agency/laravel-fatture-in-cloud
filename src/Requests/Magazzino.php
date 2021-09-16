<?php


namespace OfflineAgency\FattureInCloud\Requests;


use Exception;

class Magazzino
{
    public static function lista(array $data)
    {
        $allowed = [];

        $required = [];

        return Common::parseData($data, $allowed, $required);
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public static function dettagli(array $data)
    {
        $allowed = [];

        $required = [];

        return Common::parseData($data, $allowed, $required);
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public static function nuovo(array $data)
    {
        $allowed = [];

        $required = [];

        return Common::parseData($data, $allowed, $required);
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public static function modifica(array $data)
    {
        $allowed = [];

        $required = [];

        return Common::parseData($data, $allowed, $required);
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public static function elimina(array $data)
    {
        $allowed = [];

        $required = [];

        return Common::parseData($data, $allowed, $required);
    }

    /**
     * @param array $data
     * @return array
     * @throws Exception
     */
    public static function info(array $data)
    {
        $allowed = [];

        $required = [];

        return Common::parseData($data, $allowed, $required);
    }
}
