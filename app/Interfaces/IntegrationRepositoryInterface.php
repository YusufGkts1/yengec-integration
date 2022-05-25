<?php

namespace App\Interfaces;

interface IntegrationRepositoryInterface 
{
    public function fetchIntegrations();
    public function getIntegrationById($orderId);
    public function deleteIntegration($orderId);
    public function createIntegration(array $orderDetails);
    public function updateIntegration($orderId, array $newDetails);
}