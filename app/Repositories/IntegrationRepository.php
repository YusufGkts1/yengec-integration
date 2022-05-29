<?php

namespace App\Repositories;

use App\Interfaces\IntegrationRepositoryInterface;
use App\Models\Integration\Integration;
use Illuminate\Database\Connection;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class IntegrationRepository implements IntegrationRepositoryInterface 
{
    protected $db;

    public function __construct(Connection $db)
    {
        $this->db = $db; // <-- how to set this DB to 'another' DB connection, instead of default connection
    }


    
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
        $integrationDetails['password'] = Hash::make($integrationDetails['password']);
        return Integration::create($integrationDetails);
    }

    public function updateIntegration($integrationId, array $newDetails) 
    {
        return Integration::whereId($integrationId)->update($newDetails);
    }
}