<?php

namespace MagePsycho\DisableRegistration\Block\Adminhtml\System\Config\Form\Field;

use Magento\Framework\Data\Form\Element\AbstractElement;
use Magento\Config\Block\System\Config\Form\Field;

/**
 * @category MagePsycho
 * @package MagePsycho_DisableRegistration
 * @author Raj KB <magepsycho@gmail.com>
 * @website https://www.magepsycho.com
 * @license http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class RestrictionSetting extends Field
{
    /**
     * Set template
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('MagePsycho_DisableRegistration::system/config/form/restriction_setting.phtml');
    }

    public function render(AbstractElement $element)
    {
        $element->unsScope()->unsCanUseWebsiteValue()->unsCanUseDefaultValue();
        return $this->_toHtml();
    }
}
