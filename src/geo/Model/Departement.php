<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\GouvApi\Geo\Model;

use WBW\Library\Common\Traits\Floats\FloatScoreTrait;
use WBW\Library\Common\Traits\Strings\StringCodeTrait;
use WBW\Library\GouvApi\Common\Traits\Strings\StringNomTrait;
use WBW\Library\GouvApi\Geo\Traits\Strings\StringCodeRegionTrait;

/**
 * Département.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Geo\Model
 */
class Departement {

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
