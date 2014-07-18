<?php

namespace PaymentSuite\BanwireGatewayBundle;

use PaymentSuite\PaymentCoreBundle\PaymentMethodInterface;

class BanwiregatewayMethod implements PaymentMethodInterface
{
    /**
     * Get BanwireGateway method name
     *
     * @return string Payment name
     */
    public function getPaymentName()
    {
        return 'BanwireGateway';
    }

    /**
     * @var float
     *
     * BanwireGateway amount
     */
    private $amount;


    /**
     * @var string
     *
     * BanwireGateway reference
     */
    private $reference;


    /**
     * @var string
     */
    private $banwireGatewayTransactionId;


    /**
     * @var string
     */
    private $codeError;

    /**
     * @var string
     */
    private $banwireId;


    /**
     * @param string codeError
     *
     * @return $this
     */
    public function setCodeError($codeError)
    {
        $this->codeError= $codeError;

        return $this;
    }

    /**
     * @return string
     */
    public function getCodeError()
    {
        return $this->codeError;
    }

    /**
     * @param string $banwireGatewayTransactionId
     *
     * @return $this
     */
    public function setBanwireGatewayTransactionId($banwireGatewayTransactionId)
    {
        $this->banwireGatewayTransactionId= $banwireGatewayTransactionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getBanwireGatewayTransactionId()
    {
        return $this->banwireGatewayTransactionId;
    }


    /**
     * @param string $reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }


    /**
     * set amount
     *
     * @param float $amount Amount
     *
     * @return BanwireGatewayMethod self Object
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }


    /**
     * Get amount
     *
     * @return float amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set banwire gateway id
     *
     * @param string $banwireId
     *
     * @return $this
     */
    public function setBanwireId($banwireId)
    {
        $this->banwireId = $banwireId;

        return $this;
    }


    /**
     * Get banwire gateway id
     *
     * @return string
     */

    public function getBanwireId()
    {
        return $this->banwireId;
    }
}