<?php
/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */

namespace eZ\XPI\Types\Content\Gallery\Fields;

interface ImagesRenderer
{
    public function __toString(): string;

    public function withPagination(bool $enable): ImagesRenderer;

    public function withItemsPerPage(int $itemsPerPage): ImagesRenderer;
}
