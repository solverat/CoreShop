<?php
/**
 * CoreShop.
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2015-2020 Dominik Pfaffenbauer (https://www.pfaffenbauer.at)
 * @license    https://www.coreshop.org/license     GNU General Public License version 3 (GPLv3)
 */

declare(strict_types=1);

namespace CoreShop\Bundle\StoreBundle\CoreExtension;

use CoreShop\Bundle\ResourceBundle\CoreExtension\Select;

class Store extends Select
{
    /**
     * Static type of this element.
     *
     * @var string
     */
    public $fieldtype = 'coreShopStore';

    /**
     * {@inheritdoc}
     */
    protected function getRepository()
    {
        return \Pimcore::getContainer()->get('coreshop.repository.store');
    }

    /**
     * {@inheritdoc}
     */
    protected function getModel()
    {
        return \Pimcore::getContainer()->getParameter('coreshop.model.store.class');
    }
}
