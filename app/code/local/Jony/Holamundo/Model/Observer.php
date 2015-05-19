<?php

/**
 * Nuestra clase debe nombrarse siguiendo la estructura de nuestro
 * Observer.php, empezando desde el namespace, separando los directorios
 * con guiones bajos.
 */

class Jony_Holamundo_Model_Observer{
    /**
     * Magento pasa como primer parámetro de los eventos un Varien_Event_Observer
     */
    public function control(Varien_Event_Observer $observer){
        // Recupera el producto que está siendo actualizado desde el evento observador.
        $product = $observer->getEvent()->getProduct();

        // Escribe una nueva linea en var/log/product-updates.log
        $name = $product->getName();
        $sku = $product->getSku();
        Mage::log(
            "{$name} ({$sku}) updated",
            null,
            'product-updates.log'
        );
    }
}

?>