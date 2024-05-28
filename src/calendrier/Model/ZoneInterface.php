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

namespace WBW\Library\GouvApi\Calendrier\Model;

/**
 * Zone interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Calendrier\Model
 */
interface ZoneInterface {

    /**
     * Zone "Alsace Moselle".
     *
     * @var string
     */
    public const ZONE_ALSACE_MOSELLE = "alsace-moselle";

    /**
     * Zone "Guadeloupe".
     *
     * @var string
     */
    public const ZONE_GUADELOUPE = "guadeloupe";

    /**
     * Zone "Guyane".
     *
     * @var string
     */
    public const ZONE_GUYANE = "guyane";

    /**
     * Zone "La Réunion".
     *
     * @var string
     */
    public const ZONE_LA_REUNION = "la-reunion";

    /**
     * Zone "Martinique".
     *
     * @var string
     */
    public const ZONE_MARTINIQUE = "martinique";

    /**
     * Zone "Mayotte".
     *
     * @var string
     */
    public const ZONE_MAYOTTE = "mayotte";

    /**
     * Zone "Métropole".
     *
     * @var string
     */
    public const ZONE_METROPOLE = "metropole";

    /**
     * Zone "Nouvelle Calédonie".
     *
     * @var string
     */
    public const ZONE_NOUVELLE_CALEDONIE = "nouvelle-caledonie";

    /**
     * Zone "Polynésie Française".
     *
     * @var string
     */
    public const ZONE_POLYNESIE_FRANCAISE = "polynesie-francaise";

    /**
     * Zone "Saint Barthélémy".
     *
     * @var string
     */
    public const ZONE_SAINT_BARTHELEMY = "saint-barthelemy";

    /**
     * Zone "Saint Martin".
     *
     * @var string
     */
    public const ZONE_SAINT_MARTIN = "saint-martin";

    /**
     * Zone "Saint Pierre et Miquelon".
     *
     * @var string
     */
    public const ZONE_SAINT_PIERRE_MIQUELON = "saint-pierre-et-miquelon";

    /**
     * Zone "Wallis et Futuna".
     *
     * @var string
     */
    public const ZONE_WALLIS_FUTUNA = "wallis-et-futuna";
}
