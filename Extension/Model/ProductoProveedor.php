<?php
namespace FacturaScripts\Plugins\ProductosProv\Extension\Model;

class ProductoProveedor
{
    // Ejemplo para añadir un método ... añadir el método usado()
    public function usado() {
        return function() {
            return $this->usado;
        };
    }
    
    // ***************************************
    // ** Métodos disponibles para extender **
    // ***************************************
    
    // clear()
    public function clear() {
       return function() {
            // tu código aquí
         };
    }
    
    // delete() se ejecuta una vez realizado el delete() del modelo.
    public function delete() {
       return function() {
            // tu código aquí
         };
    }
    
    // deleteBefore() se ejecuta antes de hacer el delete() del modelo. Si devolvemos false, impedimos el delete().
    public function deleteBefore() {
       return function() {
            // tu código aquí
         };
    }

    // save() se ejecuta una vez realizado el save() del modelo.
    public function save() {
       return function() {
            // tu código aquí
         };
    }
    
    // saveBefore() se ejecuta antes de hacer el save() del modelo. Si devolvemos false, impedimos el save().
    public function saveBefore() {
       return function() {
            // tu código aquí
         };
    }

    // saveInsert() se ejecuta una vez realizado el saveInsert() del modelo.
    public function saveInsert() {
       return function() {
            // tu código aquí
         };
    }
    
    // saveInsertBefore() se ejecuta antes de hacer el saveInsert() del modelo. Si devolvemos false, impedimos el saveInsert().
    public function saveInsertBefore() {
       return function() {
            // tu código aquí
         };
    }
    
    // saveUpdate() se ejecuta una vez realizado el saveUpdate() del modelo.
    public function saveUpdate() {
       return function() {
            // tu código aquí
         };
    }
    
    // saveUpdateBefore() se ejecuta antes de hacer el saveUpdate() del modelo. Si devolvemos false, impedimos el saveUpdate().
    public function saveUpdateBefore() {
       return function() {
            // tu código aquí
         };
    }

}
