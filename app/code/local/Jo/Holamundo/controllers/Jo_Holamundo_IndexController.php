<?php
class Jo_HolaMundo_IndexController extends Mage_Core_Controller_Front_Action
{
    function indexAction()
    {
        echo "Estamos en el index";
    }

    function testAction()
    {
        echo "Estamos en test";
    }
}