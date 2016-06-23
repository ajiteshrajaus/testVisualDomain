<?php
class Order {

    protected $orderId;
    protected $datePlaced;
    protected $orderTotal;
    protected $orderReceived;

    /**
     * @param mixed $datePlaced
     */
    public function setDatePlaced($datePlaced)
    {
        $this->datePlaced = $datePlaced;
    }

    /**
     * @return mixed
     */
    public function getDatePlaced()
    {
        return $this->datePlaced;
    }

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param mixed $orderReceived
     */
    public function setOrderReceived($orderReceived)
    {
        $this->orderReceived = $orderReceived;
    }

    /**
     * @return mixed
     */
    public function getOrderReceived()
    {
        return $this->orderReceived;
    }

    /**
     * @param mixed $orderTotal
     */
    public function setOrderTotal($orderTotal)
    {
        $this->orderTotal = $orderTotal;
    }

    /**
     * @return mixed
     */
    public function getOrderTotal()
    {
        return $this->orderTotal;
    }



} 