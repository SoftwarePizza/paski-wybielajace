<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.translation.reader.legacy_file' shared service.

return $this->services['prestashop.translation.reader.legacy_file'] = new \PrestaShop\PrestaShop\Core\Translation\Storage\Loader\LegacyFileReader(${($_ = isset($this->services['prestashop.core.translation.locale.converter']) ? $this->services['prestashop.core.translation.locale.converter'] : ($this->services['prestashop.core.translation.locale.converter'] = new \PrestaShop\PrestaShop\Core\Translation\Locale\Converter(($this->targetDirs[2].'/Resources/translations/../legacy-to-standard-locales.json')))) && false ?: '_'});
