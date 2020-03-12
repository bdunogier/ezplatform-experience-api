<?php
/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace eZ\XPI\Types\Content\Gallery\Fields;

class ImagesArguments
{
    public $before = null;

    public $after = null;

    public $first = 10;

    public $last = null;

    public $enablePagination = null;

    public $disablePagination = null;
}
