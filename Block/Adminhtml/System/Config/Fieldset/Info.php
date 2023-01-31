<?php
/**
 * Human Element Inc.
 *
 * @package HumanElement_Base
 * @copyright Copyright (c) 2023 Human Element Inc. (https://www.human-element.com)
 */

namespace HumanElement\Base\Block\Adminhtml\System\Config\Fieldset;

use HumanElement\Base\Helper\Data;
use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Framework\Data\Form\Element\Renderer\RendererInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Module\Dir\Reader;

/**
 * Class Info
 * @package HumanElement\Base\Block\Adminhtml\System\Config\Fieldset
 */
class Info extends Template implements RendererInterface
{
    protected $_template = 'HumanElement_Base::system/config/fieldset/info.phtml';

    protected Data $helper;

    /**
     * Info constructor.
     */
    public function __construct(
        Context $context,
        Data    $helper,
        array   $data = []
    )
    {
        $this->helper = $helper;
        parent::__construct($context, $data);
    }

    /**
     * @param AbstractElement $element
     * @return string
     */
    public function render(AbstractElement $element)
    {
        return $this->toHtml();
    }

    /**
     * @throws LocalizedException
     */
    public function getModuleVersion(): string
    {
        return $this->helper->getModuleVersion();
    }

}
