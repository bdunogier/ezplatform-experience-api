<?php
/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace eZ\XPI\Types;

interface Gallery
{
    public function getTitle(): GalleryTitle;

    public function getImages(): GalleryImages;
}
