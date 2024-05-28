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

namespace WBW\Library\GouvApi\Entreprise\Tests\Traits\Strings;

use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Entreprise\Tests\Fixtures\Traits\Strings\TestStringCreatedAtTrait;

/**
 * String created at trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Traits\Strings
 */
class StringCreatedAtTraitTest extends AbstractTestCase {

    /**
     * Test setCreatedAt()
     *
     * @return void
     */
    public function testSetCreatedAt(): void {

        $obj = new TestStringCreatedAtTrait();

        $obj->setCreatedAt("createdAt");
        $this->assertEquals("createdAt", $obj->getCreatedAt());
    }
}
