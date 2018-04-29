<?php

namespace Geodesy\Datum;

use Geodesy\Models\PRS92Model;

class PRS92 extends BaseDatum implements DatumInterface
{


    public function __construct()
    {
        parent::__construct(new PRS92Model);
    }

    public function datum(): array
    {
        return array (
            'TranslationVectors' => array(
                'x' => 127.62153,
                'y' => 67.24339,
                'z' => 47.04738,
                ),
            'RotationalVectors' => array (
                'x' => -3.06803,
                'y' => 4.90297,
                'z' => 1.57807,
                ),
            'Scale' => 1.06002,
        );
    }

}