<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Calendrier\Model;

use WBW\Library\GouvAPI\Common\Model\Attribute\StringNomTrait;
use WBW\Library\Traits\DateTimes\DateTimeDateTrait;

/**
 * Jour férié.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Calendrier\Model
 */
class JourFerie {

    use DateTimeDateTrait;
    use StringNomTrait;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }
}