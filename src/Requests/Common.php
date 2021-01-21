<?php

namespace OfflineAgency\FattureInCloud\Requests;

class Common
{
    /**
     * @param null $params
     *
     * @throws \Exception
     */
    public static function missingParams($params = null)
    {
        throw new \Exception('Parametri obbligatori mancanti'.(($params) ? ': '.implode(', ', $params) : '.'));
    }

    /**
     * @param $data
     * @param $allowed
     *
     * @return array
     */
    public static function filterData($data, $allowed)
    {
        if (! $data || ! $allowed) {
            return [];
        }

        return array_intersect_key($data, array_flip($allowed));
    }

    /**
     * Checks if multiple keys exist in an array.
     *
     * @return array
     */
    public static function array_keys_exist(array $needles, array $haystack)
    {
        $missing = [];
        foreach ($needles as $needle) {
            if (! array_key_exists($needle, $haystack)) {
                $missing[] = $needle;
            }
        }

        return $missing;
    }

    /**
     * @param $data
     * @param $allowed
     * @param $required
     *
     * @throws \Exception
     *
     * @return array
     */
    public static function parseData($data, $allowed, $required)
    {
        $data = self::filterData($data, $allowed);
        $missing = self::array_keys_exist($required, $data);

        if (count($missing) > 0) {
            self::missingParams($missing);
        }

        return $data;
    }

    /**
     * @param $array
     * @param $allowed
     * @param $required
     *
     * @return array
     */
    public static function parseArrayData($array, $allowed, $required)
    {
        $lista = [];
        foreach ($array as $data) {
            $filtered = self::filterData($data, $allowed);
            $missing = self::array_keys_exist($required, $data);

            if (count($missing) == 0) {
                $lista[] = $filtered;
            }
        }

        return $lista;
    }
}
