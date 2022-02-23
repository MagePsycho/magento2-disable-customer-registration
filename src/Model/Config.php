<?php

namespace MagePsycho\DisableRegistration\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * @category   MagePsycho
 * @package    MagePsycho_DisableRegistration
 * @author     Raj KB <magepsycho@gmail.com>
 * @website    https://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Config implements ConfigInterface
{
    const XML_PATH_ENABLED = 'magepsycho_disableregistration/general/enabled';
    const XML_PATH_DEBUG = 'magepsycho_disableregistration/general/debug';

    const XML_PATH_REGISTRATION_OPTION = 'magepsycho_disableregistration/registration/registration_option';
    const XML_PATH_REGISTRATION_ENABLE_DISABLED_MESSAGE = 'magepsycho_disableregistration/registration/enable_disabled_message';
    const XML_PATH_REGISTRATION_DISABLED_MESSAGE = 'magepsycho_disableregistration/registration/disabled_message';

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @inheritDoc
     */
    public function getConfigFlag($xmlPath, $storeId = null)
    {
        return $this->scopeConfig->isSetFlag(
            $xmlPath,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    /**
     * @inheritDoc
     */
    public function getConfigValue($xmlPath, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $xmlPath,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    public function isEnabled($storeId = null)
    {
        return $this->getConfigFlag(self::XML_PATH_ENABLED, $storeId);
    }

    public function isDebugEnabled($storeId = null)
    {
        return $this->getConfigFlag(self::XML_PATH_DEBUG, $storeId);
    }

    public function getRegistrationOption($storeId = null)
    {
        return $this->getConfigValue(self::XML_PATH_REGISTRATION_OPTION, $storeId);
    }

    public function showRegistrationDisabledMessage($storeId = null)
    {
        return $this->getConfigValue(self::XML_PATH_REGISTRATION_ENABLE_DISABLED_MESSAGE, $storeId);
    }

    public function getRegistrationDisabledMessage($storeId = null)
    {
        return $this->getConfigValue(self::XML_PATH_REGISTRATION_DISABLED_MESSAGE, $storeId);
    }
}
