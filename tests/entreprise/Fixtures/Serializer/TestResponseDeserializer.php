<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Entreprise\Tests\Fixtures\Serializer;

use WBW\Library\GouvAPI\Entreprise\Model\Etablissement;
use WBW\Library\GouvAPI\Entreprise\Serializer\ResponseDeserializer;

/**
 * Test response deserializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Entreprise\Tests\Fixtures\Serializer
 */
class TestResponseDeserializer extends ResponseDeserializer {

    /**
     * {@inheritDoc}
     */
    public static function deserializeEtablissement(array $data): Etablissement {
        return parent::deserializeEtablissement($data);
    }
}