<?php

namespace App\Http\Controllers;

use App\Interfaces\IntegrationRepositoryInterface;
use App\Models\Integration\Integration;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class IntegrationController extends Controller 
{
    private IntegrationRepositoryInterface $integrationRepository;

    public function __construct(IntegrationRepositoryInterface $integrationRepository) 
    {
        $this->integrationRepository = $integrationRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json([
            'status' =>  '200',
            'data' => $this->integrationRepository->fetchIntegrations(),
            'message' => 'Integrations OK'
        ]);
    }

    public function store(Request $request): JsonResponse 
    {
        if($request->marketplace == "n11" || $request->marketplace == "trendyol"){
            $integrationDetails = $request->only([ 
                'marketplace',
                'username',
                'password']);
        }else throw new Exception("Marketplace must be n11 or trendyol!");

        return response()->json(
            [
                'status' => '200',
                'data' => $this->integrationRepository->createIntegration($integrationDetails),
                'message' => 'Integration created'
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request): JsonResponse 
    {
        $integrationId = $request->route('id');

        return response()->json([
            'data' => $this->integrationRepository->getIntegrationById($integrationId)
        ]);
    }

    public function update(Request $request): JsonResponse 
    {
        $integrationId = $request->route('id');
        $integrationDetails = $request->only([
            'client',
            'details'
        ]);

        return response()->json([
            'data' => $this->integrationRepository->updateIntegration($integrationId, $integrationDetails)
        ]);
    }

    public function destroy(Request $request): JsonResponse 
    {
        $integrationId = $request->route('id');
        $this->integrationRepository->deleteIntegration($integrationId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}// $integrationDetails = array(
            //     'marketplace' => $request->marketplace,
            //     'username' => $request->username,
            //     'password' => Hash::make($request->password)
            // );