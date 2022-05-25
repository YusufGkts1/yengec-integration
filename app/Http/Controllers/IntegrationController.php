<?php

namespace App\Http\Controllers;

use App\Interfaces\IntegrationRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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
            'data' => $this->integrationRepository->fetchIntegrations()
        ]);
    }

    public function store(Request $request): JsonResponse 
    {
        $integrationDetails = $request->only([
            'marketplace',
            'name',
            'email',
            'password'
        ]);

        return response()->json(
            [
                'data' => $this->integrationRepository->createIntegration($integrationDetails)
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
}