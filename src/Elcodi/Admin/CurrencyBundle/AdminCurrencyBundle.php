<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014-2015 Elcodi.com
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

namespace Elcodi\Admin\CurrencyBundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

use Elcodi\Admin\CurrencyBundle\DependencyInjection\AdminCurrencyExtension;
use Elcodi\Bundle\CoreBundle\Abstracts\AbstractElcodiBundle;

/**
 * Class AdminCurrencyBundle
 */
class AdminCurrencyBundle extends AbstractElcodiBundle
{
    /**
     * Returns the bundle's container extension.
     *
     * @return ExtensionInterface The container extension
     */
    public function getContainerExtension()
    {
        return new AdminCurrencyExtension();
    }
}
