<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014-2016 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 * @author Elcodi Team <tech@elcodi.com>
 */

namespace Elcodi\Admin\GeoBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

use Elcodi\Admin\GeoBundle\DependencyInjection\AdminGeoExtension;
use Elcodi\Bundle\CoreBundle\Abstracts\AbstractElcodiBundle;

/**
 * Class AdminGeoBundle
 */
class AdminGeoBundle extends AbstractElcodiBundle
{
    /**
     * Returns the bundle's container extension.
     *
     * @return ExtensionInterface The container extension
     */
    public function getContainerExtension()
    {
        return new AdminGeoExtension();
    }
}
