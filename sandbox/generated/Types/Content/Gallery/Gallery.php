<?php
/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace eZ\XPI\Types\Content\Gallery;

use eZ\XPI\Types\Content\Gallery\Fields;
use eZ\XPI\Types\Content\Gallery\Renderer\GalleryCarouselRenderer;

interface Gallery
{
    public function getTitle(): Fields\Title;

    public function getImages(Fields\ImagesArguments $args): Fields\Images;

    public function render(): GalleryRenderer;

    public function renderCarousel(): GalleryCarouselRenderer;
}
