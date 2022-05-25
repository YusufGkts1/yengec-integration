<?php

namespace App\Repositories;

use App\Interfaces\IntegrationRepositoryInterface;
use App\Models\Integration\Integration;

class IntegrationRepository implements IntegrationRepositoryInterface 
{
    public function fetchIntegrations() 
    {
        return Integration::all();
    }

    public function getIntegrationById($integrationId) 
    {
        return Integration::findOrFail($integrationId);
    }

    public function deleteIntegration($integrationId) 
    {
        Integration::destroy($integrationId);
    }

    public function createIntegration(array $integrationDetails) 
    {
        return (new Integration)->create($integrationDetails);
    }

    public function updateIntegration($integrationId, array $newDetails) 
    {
        return Integration::whereId($integrationId)->update($newDetails);
    }

}