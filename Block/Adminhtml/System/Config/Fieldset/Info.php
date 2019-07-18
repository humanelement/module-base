<?php
/**
 * Human Element Inc.
 *
 * @package HumanElement_Base
 * @copyright Copyright (c) 2019 Human Element Inc. (https://www.human-element.com)
 */
namespace HumanElement\Base\Block\Adminhtml\System\Config\Fieldset;

/**
 * Class Info
 * @package HumanElement\Base\Block\Adminhtml\System\Config\Fieldset
 */
class Info extends \Magento\Backend\Block\Template implements \Magento\Framework\Data\Form\Element\Renderer\RendererInterface
{
    /**
     * @var string
     */
    protected $_template = 'HumanElement_Base::system/config/fieldset/info.phtml';

    /**
     * @var \Magento\Framework\App\ProductMetadataInterface
     */
    private $_metaData;

    /**
     * @var \HumanElement\Base\Helper\Data
     */
    private $_helper;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\App\ProductMetadataInterface $productMetaData
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\App\ProductMetadataInterface $productMetaData,
        \HumanElement\Base\Helper\Data $helper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_metaData = $productMetaData;
        $this->_helper = $helper;
    }

    /**
     * @param \Magento\Framework\Data\Form\Element\AbstractElement $element
     * @return mixed
     */
    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        return $this->toHtml();
    }

    /**
     * @return mixed
     */
    public function getModuleVersion()
    {
        return $this->_helper->getModuleVersion();
    }
}
