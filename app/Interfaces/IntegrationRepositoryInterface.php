<?php

namespace App\Interfaces;

interface IntegrationRepositoryInterface 
{
    public function fetchIntegrations();
    public function getIntegrationById($integrationId);
    public function deleteIntegration($integrationId);
    public function createIntegration(array $integrationDetails);
    public function updateIntegration($integrationId, array $newDetails);
}