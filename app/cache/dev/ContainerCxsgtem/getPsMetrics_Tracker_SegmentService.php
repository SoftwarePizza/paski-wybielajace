<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'ps_metrics.tracker.segment' shared service.

return $this->services['ps_metrics.tracker.segment'] = new \PrestaShop\Module\Ps_metrics\Tracker\Segment(${($_ = isset($this->services['ps_metrics.helper.segment']) ? $this->services['ps_metrics.helper.segment'] : $this->load('getPsMetrics_Helper_SegmentService.php')) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.prestashop']) ? $this->services['ps_metrics.helper.prestashop'] : ($this->services['ps_metrics.helper.prestashop'] = new \PrestaShop\Module\Ps_metrics\Helper\PrestaShopHelper())) && false ?: '_'}, ${($_ = isset($this->services['ps_metrics.helper.shop']) ? $this->services['ps_metrics.helper.shop'] : $this->load('getPsMetrics_Helper_ShopService.php')) && false ?: '_'});