<?php

namespace MagePsycho\DisableRegistration\Plugin\Customer\Model;

use Magento\Customer\Model\Registration;
use MagePsycho\DisableRegistration\Helper\Data as DisableRegistrationHelper;

/**
 * @category   MagePsycho
 * @package    MagePsycho_DisableRegistration
 * @author     Raj KB <magepsycho@gmail.com>
 * @website    https://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class DisableRegistrationPlugin
{
    /**
     * @var DisableRegistrationHelper
     */
    protected $helper;

    public function __construct(
        DisableRegistrationHelper $helper
    ) {
        $this->helper = $helper;
    }

    public function afterIsAllowed(
        Registration $subject,
        $result
    ) {
        $this->helper->log(__METHOD__, true);
        if ($this->helper->isActive()
            && $this->helper->isRegistrationDisabled()
        ) {
            return false;
        }
        return true;
    }
}
