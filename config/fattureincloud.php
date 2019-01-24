<?php

return [
    "endpoint" => "https://api.fattureincloud.it/v1/",
    "errors" => [
        "0" => [
            "code" => 400,
            "message" => "Errore generico."
        ],
        "1000" => [
            "code" => 401,
            "message" => "Autenticazione fallita. I parametri di utlizzo 'api_uid' e 'api_key' non sono validi."
        ],
        "1001" => [
            "code" => 400,
            "message" => "Uno dei parametri è mancante o non valido."
        ],
        "1004" => [
            "code" => 404,
            "message" => "L'azienda non esiste o è stata disabilitata."
        ],
        "1100" => [
            "code" => 400,
            "message" => "Il contenuto della richiesta non è corretto (probabilmente il json non è formattato correttamente)."
        ],
        "2000" => [
            "code" => 401,
            "message" => "La licenza è scaduta."
        ],
        "2002" => [
            "code" => 420,
            "message" => "Uno dei limiti di richieste (al minuto, orario o annuale) è stato superato."
        ],
        "2004" => [
            "code" => 403,
            "message" => "L'utilizzo delle API è stato bloccato per questo account."
        ],
        "2005" => [
            "code" => 403,
            "message" => "La licenza non consente l'utilizzo di questa funzione."
        ],
        "2006" => [
            "code" => 403,
            "message" => "L'accesso ai dati richiesti è ristretto."
        ]
    ]
];