<?php
/**
 * Human Element Inc.
 *
 * @package HumanElement_Base
 * @copyright Copyright (c) 2019 Human Element Inc. (https://www.human-element.com)
 */

namespace HumanElement\Base\Helper;

use Magento\Framework\App\Helper\Context;
use Magento\Framework\Exception\ValidatorException;
use Magento\Store\Model\Store;
use Symfony\Component\Config\Definition\Exception\Exception;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var \Magento\Framework\Module\ModuleList\Loader
     */
    private $_loader;

    public function __construct(
        Context $context,
        \Magento\Framework\Module\ModuleList\Loader $loader
    )
    {
        $this->_loader = $loader;
        parent::__construct($context);
    }


    /**
     * @return string
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getModuleVersion()
    {
        $modules = $this->_loader->load();
        $v = "";
        if (isset($modules['HumanElement_Base'])) {
            $v = $modules['HumanElement_Base']['setup_version'];
        }
        return $v;
    }

}