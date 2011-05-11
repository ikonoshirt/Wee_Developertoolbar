<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * @category    Cdb
 * @package     Cdb_DeveloperToolbar
 * @author      Stefan Wieczorek <stefan.wieczorek@codingbitch.de>
 * @copyright   Copyright (c) 2010 (http://www.codingbitch.de)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Cdb_DeveloperToolbar_Block_Toolbar_Item_Database extends Cdb_DeveloperToolbar_Block_Toolbar_Item
{
    public function __construct($name, $label = '')
    {
        parent::__construct($name, $label);
        $this->setIcon(Mage::getDesign()->getSkinUrl('images/developertoolbar/database.png'));
        $this->content = new Cdb_DeveloperToolbar_Block_TabContainer_Database('database');
    }

    public function getLabel()
    {
        $profiler = Mage::getSingleton('core/resource')->getConnection('core_write')->getProfiler();
        return $profiler->getTotalNumQueries();
    }
}