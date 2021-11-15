<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Entreprise\Model\Attribute;

/**
 * String activité principale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Entreprise\Model\Attribute
 */
trait StringActivitePrincipaleTrait {

    /**
     * Activité principale.
     *
     * @var string|null
     */
    protected $activitePrincipale;

    /**
     * Get the activité principale.
     *
     * @return string|null Returns the activité principale.
     */
    public function getActivitePrincipale(): ?string {
        return $this->activitePrincipale;
    }

    /**
     * Set the activité principale.
     *
     * @param string|null $activitePrincipale The activité principale.
     * @return self Returns this instance.
     */
    public function setActivitePrincipale(?string $activitePrincipale): self {
        $this->activitePrincipale = $activitePrincipale;
        return $this;
    }
}