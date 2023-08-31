<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.repository.product_repository' shared service.

return $this->services['prestashop.adapter.product.repository.product_repository'] = new \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'jr_', ${($_ = isset($this->services['prestashop.adapter.product.validate.product_validator']) ? $this->services['prestashop.adapter.product.validate.product_validator'] : ($this->services['prestashop.adapter.product.validate.product_validator'] = new \PrestaShop\PrestaShop\Adapter\Product\Validate\ProductValidator())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getContext()->shop->id_category, ${($_ = isset($this->services['prestashop.adapter.tax_rules_group.repository.tax_rules_group_repository']) ? $this->services['prestashop.adapter.tax_rules_group.repository.tax_rules_group_repository'] : $this->load('getPrestashop_Adapter_TaxRulesGroup_Repository_TaxRulesGroupRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.manufacturer.repository.manufacturer_repository']) ? $this->services['prestashop.adapter.manufacturer.repository.manufacturer_repository'] : ($this->services['prestashop.adapter.manufacturer.repository.manufacturer_repository'] = new \PrestaShop\PrestaShop\Adapter\Manufacturer\Repository\ManufacturerRepository())) && false ?: '_'});
