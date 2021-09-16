<?php

namespace Tests\Fake;

class AccountFakeResponse
{

  /**
   * @return false|string
   */
  public function getCurrencyList()
  {
    return json_encode([
      'lista_valute' =>
        [
          0 =>
            [
              'codice' => 'AED',
              'simbolo' => 'AED',
              'cambio' => '4.32170',
            ],
          1 =>
            [
              'codice' => 'ALL',
              'simbolo' => 'ALL',
              'cambio' => '118.40000',
            ],
          2 =>
            [
              'codice' => 'ARS',
              'simbolo' => '$',
              'cambio' => '115.90550',
            ],
          3 =>
            [
              'codice' => 'AUD',
              'simbolo' => 'AUD',
              'cambio' => '1.61314',
            ],
          4 =>
            [
              'codice' => 'AZN',
              'simbolo' => 'AZN',
              'cambio' => '2.00130',
            ],
          5 =>
            [
              'codice' => 'BGN',
              'simbolo' => 'лв',
              'cambio' => '1.95583',
            ],
          6 =>
            [
              'codice' => 'BRL',
              'simbolo' => 'R$',
              'cambio' => '6.20280',
            ],
          7 =>
            [
              'codice' => 'BYN',
              'simbolo' => 'BYN',
              'cambio' => '2.41000',
            ],
          8 =>
            [
              'codice' => 'CAD',
              'simbolo' => 'CAD',
              'cambio' => '1.49226',
            ],
          9 =>
            [
              'codice' => 'CFA',
              'simbolo' => 'CFA',
              'cambio' => '656.68000',
            ],
          10 =>
            [
              'codice' => 'CHF',
              'simbolo' => 'Fr.',
              'cambio' => '1.09116',
            ],
          11 =>
            [
              'codice' => 'CNY',
              'simbolo' => 'CNY',
              'cambio' => '7.59890',
            ],
          12 =>
            [
              'codice' => 'COP',
              'simbolo' => '$',
              'cambio' => '4483.66000',
            ],
          13 =>
            [
              'codice' => 'CRC',
              'simbolo' => '₡',
              'cambio' => '739.88000',
            ],
          14 =>
            [
              'codice' => 'CZK',
              'simbolo' => 'Kč',
              'cambio' => '25.30100',
            ],
          15 =>
            [
              'codice' => 'DKK',
              'simbolo' => 'kr.',
              'cambio' => '7.43580',
            ],
          16 =>
            [
              'codice' => 'DOP',
              'simbolo' => 'DOP',
              'cambio' => '67.04500',
            ],
          17 =>
            [
              'codice' => 'DZD',
              'simbolo' => 'DZD',
              'cambio' => '159.33200',
            ],
          18 =>
            [
              'codice' => 'EGP',
              'simbolo' => 'EGP',
              'cambio' => '18.55970',
            ],
          19 =>
            [
              'codice' => 'EUR',
              'simbolo' => '€',
              'cambio' => '1.00000',
            ],
          20 =>
            [
              'codice' => 'GBP',
              'simbolo' => '£',
              'cambio' => '0.85292',
            ],
          21 =>
            [
              'codice' => 'GHS',
              'simbolo' => 'GHS',
              'cambio' => '5.45834',
            ],
          22 =>
            [
              'codice' => 'GTQ',
              'simbolo' => 'Q',
              'cambio' => '9.12300',
            ],
          23 =>
            [
              'codice' => 'HKD',
              'simbolo' => 'HK$',
              'cambio' => '9.15551',
            ],
          24 =>
            [
              'codice' => 'HRK',
              'simbolo' => 'HRK',
              'cambio' => '7.48050',
            ],
          25 =>
            [
              'codice' => 'HUF',
              'simbolo' => 'HUF',
              'cambio' => '350.60000',
            ],
          26 =>
            [
              'codice' => 'ILS',
              'simbolo' => '₪',
              'cambio' => '3.77860',
            ],
          27 =>
            [
              'codice' => 'INR',
              'simbolo' => 'INR',
              'cambio' => '86.86690',
            ],
          28 =>
            [
              'codice' => 'ISK',
              'simbolo' => 'ISK',
              'cambio' => '149.74300',
            ],
          29 =>
            [
              'codice' => 'JPY',
              'simbolo' => '¥',
              'cambio' => '129.12000',
            ],
          30 =>
            [
              'codice' => 'KES',
              'simbolo' => 'KSh',
              'cambio' => '129.89400',
            ],
          31 =>
            [
              'codice' => 'KRW',
              'simbolo' => 'KRW',
              'cambio' => '1382.40000',
            ],
          32 =>
            [
              'codice' => 'LKR',
              'simbolo' => 'LKR',
              'cambio' => '235.82200',
            ],
          33 =>
            [
              'codice' => 'MAD',
              'simbolo' => 'MAD',
              'cambio' => '10.54700',
            ],
          34 =>
            [
              'codice' => 'MKD',
              'simbolo' => 'MKD',
              'cambio' => '61.57200',
            ],
          35 =>
            [
              'codice' => 'MXN',
              'simbolo' => 'Mex$',
              'cambio' => '23.46620',
            ],
          36 =>
            [
              'codice' => 'MYR',
              'simbolo' => 'MYR',
              'cambio' => '4.91540',
            ],
          37 =>
            [
              'codice' => 'NGN',
              'simbolo' => 'NGN',
              'cambio' => '486.28000',
            ],
          38 =>
            [
              'codice' => 'NIS',
              'simbolo' => 'NIS',
              'cambio' => '4020.00000',
            ],
          39 =>
            [
              'codice' => 'NOK',
              'simbolo' => 'kr',
              'cambio' => '10.13090',
            ],
          40 =>
            [
              'codice' => 'NZD',
              'simbolo' => 'NZD',
              'cambio' => '1.66334',
            ],
          41 =>
            [
              'codice' => 'OMR',
              'simbolo' => 'OMR',
              'cambio' => '0.45508',
            ],
          42 =>
            [
              'codice' => 'PEN',
              'simbolo' => 'PEN',
              'cambio' => '4.84770',
            ],
          43 =>
            [
              'codice' => 'PHP',
              'simbolo' => '₱',
              'cambio' => '58.80900',
            ],
          44 =>
            [
              'codice' => 'PLN',
              'simbolo' => 'zł',
              'cambio' => '4.56890',
            ],
          45 =>
            [
              'codice' => 'QAR',
              'simbolo' => 'QAR',
              'cambio' => '4.30200',
            ],
          46 =>
            [
              'codice' => 'RON',
              'simbolo' => 'RON',
              'cambio' => '4.66891',
            ],
          47 =>
            [
              'codice' => 'RSD',
              'simbolo' => 'RSD',
              'cambio' => '117.39414',
            ],
          48 =>
            [
              'codice' => 'RUB',
              'simbolo' => '₽',
              'cambio' => '85.34200',
            ],
          49 =>
            [
              'codice' => 'SAR',
              'simbolo' => 'SAR',
              'cambio' => '4.41230',
            ],
          50 =>
            [
              'codice' => 'SCR',
              'simbolo' => '$',
              'cambio' => '17.04600',
            ],
          51 =>
            [
              'codice' => 'SEK',
              'simbolo' => 'SEK',
              'cambio' => '10.14130',
            ],
          52 =>
            [
              'codice' => 'SGD',
              'simbolo' => 'SGD',
              'cambio' => '1.58210',
            ],
          53 =>
            [
              'codice' => 'SR',
              'simbolo' => '$',
              'cambio' => '0.00000',
            ],
          54 =>
            [
              'codice' => 'THB',
              'simbolo' => 'THB',
              'cambio' => '38.93900',
            ],
          55 =>
            [
              'codice' => 'TND',
              'simbolo' => 'TND',
              'cambio' => '3.29840',
            ],
          56 =>
            [
              'codice' => 'TRY',
              'simbolo' => 'TRY',
              'cambio' => '10.02980',
            ],
          57 =>
            [
              'codice' => 'TWD',
              'simbolo' => 'TWD',
              'cambio' => '32.70200',
            ],
          58 =>
            [
              'codice' => 'TZS',
              'simbolo' => '$',
              'cambio' => '2739.25000',
            ],
          59 =>
            [
              'codice' => 'UAH',
              'simbolo' => 'UAH',
              'cambio' => '31.63010',
            ],
          60 =>
            [
              'codice' => 'USD',
              'simbolo' => '$',
              'cambio' => '1.17702',
            ],
          61 =>
            [
              'codice' => 'VND',
              'simbolo' => '₫',
              'cambio' => '26887.00000',
            ],
          62 =>
            [
              'codice' => 'ZAR',
              'simbolo' => 'R',
              'cambio' => '17.14150',
            ],
        ],
      'success' => true,
    ]);
  }

  /**
   * @return false|string
   */
  public function getCountryList()
  {
    return json_encode([
      'lista_paesi' => [
        0 => 'Afghanistan',
        1 => 'Albania',
        2 => 'Algeria',
        3 => 'Andorra',
        4 => 'Angola',
        5 => 'Anguilla',
        6 => 'Antartide',
        7 => 'Antigua e Barbuda',
        8 => 'Antille Olandesi',
        9 => 'Arabia Saudita',
        10 => 'Argentina',
        11 => 'Armenia',
        12 => 'Aruba',
        13 => 'Australia',
        14 => 'Austria',
        15 => 'Azerbaigian',
        16 => 'Bahamas',
        17 => 'Bahrain',
        18 => 'Bangladesh',
        19 => 'Barbados',
        20 => 'Belgio',
        21 => 'Belize',
        22 => 'Benin',
        23 => 'Bermuda',
        24 => 'Bhutan',
        25 => 'Bielorussia',
        26 => 'Bolivia',
        27 => 'Bosnia ed Erzegovina',
        28 => 'Botswana',
        29 => 'Brasile',
        30 => 'Brunei',
        31 => 'Bulgaria',
        32 => 'Burkina Faso',
        33 => 'Burundi',
        34 => 'Cambogia',
        35 => 'Camerun',
        36 => 'Canada',
        37 => 'Capo Verde',
        38 => 'Ciad',
        39 => 'Cile',
        40 => 'Cina',
        41 => 'Cipro',
        42 => 'Città del Vaticano',
        43 => 'Colombia',
        44 => 'Comore',
        45 => 'Corea del Nord',
        46 => 'Corea del Sud',
        47 => 'Costa Rica',
        48 => 'Costa d\'Avorio',
        49 => 'Croazia',
        50 => 'Cuba',
        51 => 'Danimarca',
        52 => 'Dominica',
        53 => 'Ecuador',
        54 => 'Egitto',
        55 => 'El Salvador',
        56 => 'Emirati Arabi Uniti',
        57 => 'Eritrea',
        58 => 'Estonia',
        59 => 'Etiopia',
        60 => 'Fiji',
        61 => 'Filippine',
        62 => 'Finlandia',
        63 => 'Francia',
        64 => 'Gabon',
        65 => 'Gambia',
        66 => 'Georgia',
        67 => 'Georgia del Sud e isole Sandwich',
        68 => 'Germania',
        69 => 'Ghana',
        70 => 'Giamaica',
        71 => 'Giappone',
        72 => 'Gibilterra',
        73 => 'Gibuti',
        74 => 'Giordania',
        75 => 'Grecia',
        76 => 'Grenada',
        77 => 'Groenlandia',
        78 => 'Guadalupa',
        79 => 'Guam',
        80 => 'Guatemala',
        81 => 'Guinea',
        82 => 'Guinea Equatoriale',
        83 => 'Guinea-Bissau',
        84 => 'Guyana',
        85 => 'Guyana Francese',
        86 => 'Haiti',
        87 => 'Heard Island e McDonald Islands',
        88 => 'Honduras',
        89 => 'Hong Kong',
        90 => 'India',
        91 => 'Indonesia',
        92 => 'Iran',
        93 => 'Iraq',
        94 => 'Irlanda',
        95 => 'Islanda',
        96 => 'Isola Bouvet',
        97 => 'Isola Christmas',
        98 => 'Isola di Man',
        99 => 'Isola Norfolk',
        100 => 'Isole Canarie (Spagna)',
        101 => 'Isole Cayman',
        102 => 'Isole Cocos e Keeling',
        103 => 'Isole Cook',
        104 => 'Isole Falkland',
        105 => 'Isole Fær Øer',
        106 => 'Isole Marianne Settentrionali',
        107 => 'Isole Marshall',
        108 => 'Isole Minori Esterne degli USA',
        109 => 'Isole Pitcairn',
        110 => 'Isole Salomone',
        111 => 'Isole Vergini Americane',
        112 => 'Isole Vergini Britanniche',
        113 => 'Isole Åland',
        114 => 'Israele',
        115 => 'Italia',
        116 => 'Jersey - Channel Islands',
        117 => 'Kazakistan',
        118 => 'Kenia',
        119 => 'Kirghizistan',
        120 => 'Kiribati',
        121 => 'Kosovo',
        122 => 'Kuwait',
        123 => 'Laos',
        124 => 'Lesotho',
        125 => 'Lettonia',
        126 => 'Libano',
        127 => 'Liberia',
        128 => 'Libia',
        129 => 'Liechtenstein',
        130 => 'Lituania',
        131 => 'Lussemburgo',
        132 => 'Macao',
        133 => 'Macedonia',
        134 => 'Macedonia del Nord',
        135 => 'Madagascar',
        136 => 'Malawi',
        137 => 'Malaysia',
        138 => 'Maldive',
        139 => 'Mali',
        140 => 'Malta',
        141 => 'Marocco',
        142 => 'Martinica',
        143 => 'Mauritania',
        144 => 'Mauritius',
        145 => 'Mayotte',
        146 => 'Messico',
        147 => 'Micronesia',
        148 => 'Moldavia',
        149 => 'Monaco',
        150 => 'Mongolia',
        151 => 'Montenegro',
        152 => 'Montserrat',
        153 => 'Mozambico',
        154 => 'Myanmar',
        155 => 'Namibia',
        156 => 'Nauru',
        157 => 'Nepal',
        158 => 'Nicaragua',
        159 => 'Niger',
        160 => 'Nigeria',
        161 => 'Niue',
        162 => 'Norvegia',
        163 => 'Nuova Caledonia',
        164 => 'Nuova Zelanda',
        165 => 'Oman',
        166 => 'Paesi Bassi',
        167 => 'Pakistan',
        168 => 'Palau',
        169 => 'Panama',
        170 => 'Papua Nuova Guinea',
        171 => 'Paraguay',
        172 => 'Perù',
        173 => 'Polinesia Francese',
        174 => 'Polonia',
        175 => 'Porto Rico',
        176 => 'Portogallo',
        177 => 'Qatar',
        178 => 'Regno Unito',
        179 => 'Repubblica Ceca',
        180 => 'Repubblica Centrafricana',
        181 => 'Repubblica Democratica del Congo',
        182 => 'Repubblica Dominicana',
        183 => 'Repubblica del Congo',
        184 => 'Riunione',
        185 => 'Romania',
        186 => 'Ruanda',
        187 => 'Russia',
        188 => 'Sahara Occidentale',
        189 => 'Saint Barthelemy',
        190 => 'Saint Kitts e Nevis',
        191 => 'Saint Pierre e Miquelon',
        192 => 'Saint Vincent e Grenadine',
        193 => 'Samoa',
        194 => 'Samoa Americane',
        195 => 'San Marino',
        196 => 'Sant\'Elena',
        197 => 'Santa Lucia',
        198 => 'Senegal',
        199 => 'Serbia',
        200 => 'Seychelles',
        201 => 'Sierra Leone',
        202 => 'Singapore',
        203 => 'Siria',
        204 => 'Slovacchia',
        205 => 'Slovenia',
        206 => 'Somalia',
        207 => 'Spagna',
        208 => 'Sri Lanka',
        209 => 'Stato di Palestina',
        210 => 'Stati Uniti',
        211 => 'Sudafrica',
        212 => 'Sud Sudan',
        213 => 'Sudan',
        214 => 'Suriname',
        215 => 'Svalbard e Jan Mayen',
        216 => 'Svezia',
        217 => 'Svizzera',
        218 => 'Swaziland',
        219 => 'São Tomé e Príncipe',
        220 => 'Tagikistan',
        221 => 'Taiwan',
        222 => 'Tanzania',
        223 => 'Terre australi e ant. francesi',
        224 => 'Territori Palestinesi',
        225 => 'Terr. Britannico dell\'Oc. Ind.',
        226 => 'Thailandia',
        227 => 'Timor Est',
        228 => 'Togo',
        229 => 'Tokelau',
        230 => 'Tonga',
        231 => 'Trinidad e Tobago',
        232 => 'Tunisia',
        233 => 'Turchia',
        234 => 'Turkmenistan',
        235 => 'Turks e Caicos',
        236 => 'Tuvalu',
        237 => 'Ucraina',
        238 => 'Uganda',
        239 => 'Ungheria',
        240 => 'Uruguay',
        241 => 'Uzbekistan',
        242 => 'Vanuatu',
        243 => 'Venezuela',
        244 => 'Vietnam',
        245 => 'Wallis e Futuna',
        246 => 'Yemen',
        247 => 'Zambia',
        248 => 'Zimbabwe',
      ],
      'success' => true,
    ]);
  }

  public function getLicenceType()
  {
    return json_encode([
      'tipo_licenza' => 'prova',
      'success' => true,
    ]);
  }


}
