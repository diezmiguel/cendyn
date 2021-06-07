<?php

namespace App\Http\Controllers;

use App\Services\FakerService;
use App\Services\PersonService;
use App\Utils\Constants;
use App\Utils\Validate;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class PersonController extends Controller
{
    protected $personService;

    public function __construct(PersonService $personService)
    {
        $this->personService = $personService;
    }

    public function index(): JsonResponse
    {
        $limit = request()->input('limit', 10) ?? 10;
        if (!Validate::validateLimit($limit)) {
            return response()->json(Constants::LIMIT_ERROR, 400);
        }
        $data = FakerService::generatePersonCollection($limit);

        return response()->json($data);
    }

    /**
     * Returns the posts by the give user.
     */
    public function show($id): ?string
    {
        $data = $this->personService->getUserPosts($id);

        return $data;
    }
}
