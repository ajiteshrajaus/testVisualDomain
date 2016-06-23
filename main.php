<?php

require_once("Coffee.php");
require_once("Customer.php");
require_once("Order.php");

/**************************Set values for class variables *****************************/
    $coffeObj=new Coffee();
    $coffeObj->setType('Cupucciono');
    $coffeObj->setSize('Small');
    $coffeObj->setPrice('3.5');

    $customerObj=new Customer();
    $customerObj->setFirstName('Ajitesh');
    $customerObj->setLastName('Raj');
    $customerObj->setEmailId('ajiteshraj960@gmail.com');

    $orderObj=new Order();
    $orderObj->setDatePlaced(new \DateTime('now'));// Class variable will need to be changed to date time variable
    $orderObj->setOrderId('1000987');
    $orderObj->setOrderReceived('1');
    $orderObj->setOrderTotal('3.5');

/**************************** Print values for class variable **********************************/
        echo $coffeObj->getPrice()."\n";
        echo $coffeObj->getType()."\n";
        echo $coffeObj->getSize()."\n";

        echo "\n"; echo "\n"; echo "\n";


        echo $customerObj->getFirstName()."\n";
        echo $customerObj->getLastName()."\n";
        echo $customerObj->getEmailId()."\n";

        echo "\n"; echo "\n"; echo "\n";

        echo $orderObj->getOrderId()."\n";
        echo $orderObj->getOrderTotal()."\n";
        echo $orderObj->getOrderReceived()."\n";
        echo $orderObj->getDatePlaced()->format('Y-m-d H:i:s')."\n";


