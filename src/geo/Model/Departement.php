<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Geo\Model;

use WBW\Library\GouvApi\Common\Model\Attribute\StringNomTrait;
use WBW\Library\GouvApi\Geo\Model\Attribute\StringCodeRegionTrait;
use WBW\Library\Traits\Floats\FloatScoreTrait;
use WBW\Library\Traits\Strings\StringCodeTrait;

/**
 * Département.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Geo\Model
 */
class Departement
{

    use FloatScoreTrait;
    use StringCodeRegionTrait;
    use StringCodeTrait;
    use StringNomTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO TO
    }
}