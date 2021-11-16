<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Entreprise\Serializer;

use WBW\Library\GouvAPI\Entreprise\Request\AbstractRequest;
use WBW\Library\GouvAPI\Entreprise\Request\EtablissementsRequest;
use WBW\Library\GouvAPI\Entreprise\Request\UnitesLegalesRequest;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Request serializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Entreprise\Serializer
 */
class RequestSerializer {

    /**
     * Serializes an établissements request.
     *
     * @param EtablissementsRequest $request The request.
     * @return array Returns the serialized request.
     */
    public static function serializeEtablissementsRequest(EtablissementsRequest $request): array {
        return static::serializeRequest($request);
    }

    /**
     * Serializes a request.
     *
     * @param AbstractRequest $request The request.
     * @return array Returns the serialized request.
     */
    protected static function serializeRequest(AbstractRequest $request): array {

        $result = [];
        ArrayHelper::set($result, "page", $request->getPage(), [null, 1]);
        ArrayHelper::set($result, "per_page", $request->getPerPage(), [null, 20]);

        return $result;
    }

    /**
     * Serializes an unités légales request.
     *
     * @param UnitesLegalesRequest $request The request.
     * @return array Returns the serialized request.
     */
    public static function serializeUnitesLegalesRequest(UnitesLegalesRequest $request): array {
        return static::serializeRequest($request);
    }
}