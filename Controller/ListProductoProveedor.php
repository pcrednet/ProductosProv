<?php
namespace FacturaScripts\Plugins\ProductosProv\Controller;

class ListProductoProveedor extends \FacturaScripts\Core\Lib\ExtendedController\ListController
{
    public function getPageData() {
        $data = parent::getPageData();
        $data["title"] = "Produtos Proveedor";
        $data["menu"] = "purchases";
        $data["icon"] = "fas fa-search";
        return $data;
    }

    protected function createViews() {
        $this->createViewsProductoProveedor();
    }

    protected function createViewsProductoProveedor(string $viewName = "ListProductoProveedor") {
        $this->addView($viewName, "ProductoProveedor", "Produtos Proveedor");
        
        // Esto es un ejemplo ... debe de cambiarlo según los nombres de campos del modelo
        // $this->addOrderBy($viewName, ["id"], "id", 2);
        // $this->addOrderBy($viewName, ["name"], "name");
        
        // Esto es un ejemplo ... debe de cambiarlo según los nombres de campos del modelo
        // $this->addSearchFields($viewName, ["id", "name"]);
    }
}
