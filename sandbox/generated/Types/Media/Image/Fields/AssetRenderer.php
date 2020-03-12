<?php
/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace eZ\XPI\Types\Media\Image\Fields;

use eZ\XPI\Field;

interface AssetRenderer extends Field
{
    public function getUrl(): string;

    public function getAlternativeText(): string;

    public function getVariation(string $identifier): AssetVariation;

    public function render(): AssetRenderer;
}
