<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Model\Attribute;

/**
 * String created at trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Model\Attribute
 */
trait StringCreatedAtTrait {

    /**
     * Created at.
     *
     * @var string|null
     */
    protected $createdAt;

    /**
     * Get the created at.
     *
     * @return string|null Returns the created at.
     */
    public function getCreatedAt(): ?string {
        return $this->createdAt;
    }

    /**
     * Set the created at.
     *
     * @param string|null $createdAt The created at.
     * @return self Returns this instance.
     */
    public function setCreatedAt(?string $createdAt): self {
        $this->createdAt = $createdAt;
        return $this;
    }
}
