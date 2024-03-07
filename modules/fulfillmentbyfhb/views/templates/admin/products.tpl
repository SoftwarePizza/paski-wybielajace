<form action="" class="form-horizontal">
    <div class="panel">
        <div class="panel-heading">
            <i class="icon-AdminCatalog"></i>
            Products
        </div>
        <div class="panel-body">

            <div class="row">
                <div class="col-md-4">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Products in e-shop</th>
                                <th>Exported products</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Simple products</td>
                                <td>{$simpleProductCount}</td>
                                <td>{$exportedSimpleProductCount}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <br>

            <a href="index.php?fc=module&controller=AdminFulfillmentByFhbProducts&do=export&token={$token|escape:'html':'UTF-8'}" class="btn btn-success">Export products</a>
        </div>
    </div>
</form>