<?php

require_once __DIR__ . '/../../autoload.php';

final class AdminFulfillmentByFhbOrdersController extends AdminController
{
    /** @var \FHB\Prestashop\Services\OrderExport */
    private $orderExport;

    /** @var \FHB\Prestashop\Services\Result[] */
    private $exportResult = [];

    public function __construct()
    {
        $this->bootstrap = true;
        $this->context = Context::getContext();
        $this->orderExport = new \FHB\Prestashop\Services\OrderExport();

        parent::__construct();

        if (isset($_GET['do']) && $_GET['do'] === 'export') {
            $this->actionExport();
        }
    }

    public function renderList()
    {
        $template = $this->context->smarty->createTemplate(__DIR__ . '/../../views/templates/admin/orders.tpl');
        $exportStates = $this->orderExport->getExportStates();
        $orderCount = [];

        foreach ($exportStates as $id => $name) {
            $orderCount[$id] = $this->orderExport->countByState($id);
        }

        $template->assign('token', $this->token);
        $template->assign('orderCount', $orderCount);
        $template->assign('exportStates', $exportStates);
        $template->assign('exportResult', $this->exportResult);

        return $template->fetch();
    }

    private function actionExport()
    {
        $exportStates = $this->orderExport->getExportStates();

        if (count($exportStates) === 0) {
            $this->errors[] = 'Order state for export is not defined. Please configure fulfillment settings.';
            return;
        }

        $this->exportResult = [];

        foreach ($exportStates as $id => $name) {
            $this->exportResult = array_merge( $this->exportResult, $this->orderExport->exportByState($id));
        }
    }
}