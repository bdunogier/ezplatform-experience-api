<?php
/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */

namespace eZ\XPI\Types\Content\Gallery\Fields;

interface TitleRenderer
{
    public function __toString(): string;
}
