<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'tpay.repository.transaction' shared service.

return $this->services['tpay.repository.transaction'] = new \Tpay\Repository\TransactionsRepository(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, ${($_ = isset($this->services['doctrine.orm.default_entity_manager']) ? $this->services['doctrine.orm.default_entity_manager'] : $this->getDoctrine_Orm_DefaultEntityManagerService()) && false ?: '_'}, ${($_ = isset($this->services['tpay.handler.repository_query_handler']) ? $this->services['tpay.handler.repository_query_handler'] : ($this->services['tpay.handler.repository_query_handler'] = new \Tpay\Handler\RepositoryQueryHandler())) && false ?: '_'}, 'ps_');
