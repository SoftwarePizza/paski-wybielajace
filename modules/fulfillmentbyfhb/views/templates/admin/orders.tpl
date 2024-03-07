<form action="" class="form-horizontal">

    {foreach from=$exportResult key=i item=result}
        <div class="alert alert-{$result->getStatus()}">
            {$result}
        </div>
    {/foreach}

    <div class="panel">
        <div class="panel-heading">
            <i class="icon-AdminCatalog"></i>
            Orders
        </div>
        <div class="panel-body">
            {if not count($exportStates)}
                <div class="alert alert-danger">Order state for export is not defined. Please configure fulfillment settings.</div>
            {else}
                <div class="row">
                    <div class="col-md-4">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>State</th>
                                    <th>Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                {foreach from=$exportStates key=id item=state}
                                    <tr>
                                        <th>{$state}</th>
                                        <th>{$orderCount[$id]}</th>
                                    </tr>
                                {/foreach}
                            </tbody>
                        </table>
                    </div>
                </div>

                <br>

                <a href="index.php?fc=module&controller=AdminFulfillmentByFhbOrders&do=export&token={$token|escape:'html':'UTF-8'}" class="btn btn-success">Export orders</a>
            {/if}
        </div>
    </div>
</form>