<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.template_cache_warmer' shared service.

return $this->services['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer((new \Symfony\Component\DependencyInjection\ServiceLocator(['twig' => function () {
    $f = function (\Twig\Environment $v) { return $v; }; return $f(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'});
}]))->withContext('twig.template_cache_warmer', $this), new \PrestaShopBundle\Twig\Locator\ModuleTemplateIterator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, $this->targetDirs[2], [($this->targetDirs[2].'/../src/PrestaShopBundle/Resources/views/Admin/Product') => 'Product', ($this->targetDirs[2].'/../src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm') => 'Twig', ($this->targetDirs[2].'/../src/PrestaShopBundle/Resources/views/Admin/Common') => 'Common', ($this->targetDirs[2].'/../src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters') => 'AdvancedParameters', ($this->targetDirs[2].'/../src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters') => 'ShopParameters', ($this->targetDirs[2].'/../modules') => 'Modules', ($this->targetDirs[3].'/mails/themes') => 'MailThemes', ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form') => NULL], ($this->targetDirs[3].'/templates')));
