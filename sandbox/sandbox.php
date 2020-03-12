<?php
/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
$out = new OutputInterface();

$gallery = new eZ\XPI\Types\Gallery\Gallery;
$out->writeln($gallery->getTitle());
foreach ($gallery->getImages() as $image) {
    $out->writelin($image->getUrl());
}
