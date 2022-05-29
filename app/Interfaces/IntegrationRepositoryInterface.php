<?php

namespace App\Interfaces;

use App\Models\Integration\Integration;

interface IntegrationRepositoryInterface 
{
    public function fetchIntegrations();
    public function getIntegrationById($integrationId);
    public function deleteIntegration($integrationId);
    public function createIntegration(array $integrationDetails);
    public function updateIntegration($integrationId, array $newDetails);
}