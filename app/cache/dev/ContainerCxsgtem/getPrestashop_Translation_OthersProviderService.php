<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.translation.others_provider' shared service.

return $this->services['prestashop.translation.others_provider'] = new \PrestaShopBundle\Translation\Provider\OthersProvider(${($_ = isset($this->services['prestashop.translation.database_loader']) ? $this->services['prestashop.translation.database_loader'] : $this->load('getPrestashop_Translation_DatabaseLoaderService.php')) && false ?: '_'}, ($this->targetDirs[2].'/Resources/translations'));