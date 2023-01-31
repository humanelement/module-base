<?php
/**
 * Human Element Inc.
 *
 * @package HumanElement_Base
 * @copyright Copyright (c) 2023 Human Element Inc. (https://www.human-element.com)
 */

namespace HumanElement\Base\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Module\ModuleList\Loader;

class Data extends AbstractHelper
{

    private Loader $loader;

    public function __construct(
        Context $context,
        Loader  $loader
    )
    {
        $this->loader = $loader;
        parent::__construct($context);
    }


    /**
     * @throws LocalizedException
     */
    public function getModuleVersion(): string
    {
        $modules = $this->loader->load();
        $v = "";
        if (isset($modules['HumanElement_Base'])) {
            $v = $modules['HumanElement_Base']['setup_version'];
        }
        return $v;
    }

}