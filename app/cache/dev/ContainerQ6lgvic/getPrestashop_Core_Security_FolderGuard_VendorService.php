<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.security.folder_guard.vendor' shared service.

return $this->services['prestashop.core.security.folder_guard.vendor'] = new \PrestaShop\PrestaShop\Core\Security\HtaccessFolderGuard(($this->targetDirs[2].'/Resources/security/.htaccess.dist'));
