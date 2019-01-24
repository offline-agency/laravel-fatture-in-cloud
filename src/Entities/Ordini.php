<?php

namespace OfflineAgency\FattureInCloud\Entities;

use OfflineAgency\FattureInCloud\Entities\Documenti;
use OfflineAgency\FattureInCloud\Requests\Fatture as Request;

class Ordini extends Documenti {

    protected $docType = 'ordini';

}