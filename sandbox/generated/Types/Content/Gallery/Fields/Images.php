<?php
/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace eZ\XPI\Types\Content\Gallery\Fields;

use eZ\XPI\Field;
use eZ\XPI\Types\Media\Image\Image;

interface Images extends Field, \Iterator
{
    public function render(): ImagesRenderer;

    public function getItems(): ImagesItems;

    public function current(): Image;
}
