<?php

namespace MagePsycho\DisableRegistration\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Module\ModuleListInterface;
use MagePsycho\DisableRegistration\Logger\Logger as ModuleLogger;
use MagePsycho\DisableRegistration\Model\Config;
use MagePsycho\DisableRegistration\Model\System\Config\Source\RegistrationOption;

/**
 * @category   MagePsycho
 * @package    MagePsycho_DisableRegistration
 * @author     Raj KB <magepsycho@gmail.com>
 * @website    https://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Data extends AbstractHelper
{
    /**
     * @var ModuleLogger
     */
    protected $moduleLogger;

    /**
     * @var Config
     */
    protected $config;

    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * @var ModuleListInterface
     */
    protected $moduleList;

    public function __construct(
        Context $context,
        ModuleLogger $moduleLogger,
        Config $config,
        StoreManagerInterface $storeManager,
        ModuleListInterface $moduleList
    ) {
        $this->moduleLogger = $moduleLogger;
        $this->config = $config;
        $this->storeManager = $storeManager;
        $this->moduleList = $moduleList;

        parent::__construct($context);
    }


    public function getConfigHelper()
    {
        return $this->config;
    }

    public function getExtensionVersion()
    {
        $moduleCode = 'MagePsycho_DisableRegistration';
        $moduleInfo = $this->moduleList->getOne($moduleCode);
        return $moduleInfo['setup_version'];
    }

    public function getBaseUrl()
    {
        return $this->storeManager->getStore()->getBaseUrl(
            \Magento\Framework\UrlInterface::URL_TYPE_WEB,
            true
        );
    }

    public function isActive()
    {
        return $this->config->isEnabled();
    }

    public function isRegistrationDisabled()
    {
        return $this->config->getRegistrationOption() == RegistrationOption::DISABLED;
    }

    public function showRegistrationDisabledMessage()
    {
        return $this->config->showRegistrationDisabledMessage();
    }

    /**
     * Logging Utility
     *
     * @param $message
     * @param bool|false $useSeparator
     */
    public function log($message, $useSeparator = false)
    {
        if ($this->isActive()
            && $this->config->isDebugEnabled()
        ) {
            if ($useSeparator) {
                $this->moduleLogger->customLog(str_repeat('=', 100));
            }

            $this->moduleLogger->customLog($message);
        }
    }
}
