<?php

require_once __DIR__ . '/../../autoload.php';

final class AdminFulfillmentByFhbProductsController extends AdminController
{
    /** @var \FHB\Prestashop\Services\ProductExport */
    private $productExport;

    public function __construct()
    {
        $this->bootstrap = true;
        $this->context = Context::getContext();
        $this->className = 'Products';
        $this->table = 'products';
        $this->productExport = new \FHB\Prestashop\Services\ProductExport();

        parent::__construct();

        if (isset($_GET['do']) && $_GET['do'] === 'export') {
            $this->actionExport();
        }
    }

    public function renderList()
    {
        $template = $this->context->smarty->createTemplate(__DIR__ . '/../../views/templates/admin/products.tpl');
        $products = \Product::getProducts(1, 0, null, 'id_product', 'ASC');
        $exportedProductCount = 0;

        try {
            $exportedProductCount = $this->productExport->getExportedProductCount();
        }
        catch (\Exception $e) {
            $this->errors[] = $e->getMessage();
        }

        $template->assign('token', $this->token);
        $template->assign('simpleProductCount', count($products));
        $template->assign('exportedSimpleProductCount', $exportedProductCount);

        return $template->fetch();
    }

    private function actionExport()
    {
        try {
            $this->productExport->exportAll();
            $this->confirmations[] = 'Products exported';
        }
        catch (\Exception $e) {
            $this->errors[] = $e->getMessage();
        }
    }
}