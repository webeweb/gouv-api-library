<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\GouvApi\Calendrier\Serializer;

use DateTime;
use WBW\Library\GouvApi\Calendrier\Model\JourFerie;
use WBW\Library\GouvApi\Calendrier\Response\JoursFeriesResponse;

/**
 * Response deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Calendrier\Serializer
 */
class ResponseDeserializer {

    /**
     * Deserialize a jours fériés response.
     *
     * @param string $rawResponse The raw response.
     * @return JoursFeriesResponse Returns the jours fériés response.
     */
    public static function deserializeJoursFeriesResponse(string $rawResponse): JoursFeriesResponse {

        $model = new JoursFeriesResponse();
        $model->setRawResponse($rawResponse);

        $response = json_decode($rawResponse, true);
        if (null === $response) {
            return $model;
        }

        foreach ($response as $k => $v) {

            $buffer = new JourFerie();
            $buffer->setDate(DateTime::createFromFormat("Y-m-d", $k));
            $buffer->setNom($v);

            $model->addJourFerie($buffer);
        }

        return $model;
    }
}
