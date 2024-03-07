<?php

require_once __DIR__ . '/../../autoload.php';

final class FulfillmentByFhbInvoiceModuleFrontController extends ModuleFrontController
{
    public function initContent()
    {
        if (empty($_GET['order'])) {
            $this->badRequest('Missing order parameter');
        }

        /** @var \Order $order */
        $order = Order::getByReference($_GET['order'])->getFirst();

        if ($order === false) {
            $this->notFound(sprintf('Order %s not found', $_GET['order']));
        }

        $invoices = $order->getInvoicesCollection();

        if ($invoices->count() === 0) {
            $this->notFound(sprintf('No invoices for order %s', $_GET['order']));
        }

        $pdf = new PDF($invoices, PDF::TEMPLATE_INVOICE, Context::getContext()->smarty);
        $pdf->render();
    }

    private function notFound($message)
    {
        header('Content-Type: application/json');
        http_response_code(404);

        echo json_encode([
            'status' => 'not_found',
            'message' => $message
        ]);

        die();
    }

    private function badRequest($message)
    {
        header('Content-Type: application/json');
        http_response_code(400);

        echo json_encode([
            'status' => 'error',
            'message' => $message
        ]);

        die();
    }
}