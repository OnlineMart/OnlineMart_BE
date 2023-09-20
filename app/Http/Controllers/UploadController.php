<?php

namespace App\Http\Controllers;

use App\Http\Helpers\S3Helper;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class UploadController extends Controller
{
    protected S3Helper $imageService;

    public function __construct()
    {
        $this->imageService = new S3Helper;
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $data = Storage::disk('s3')->allFiles();

        return jsonResponse($data, 200, 'Get all files success!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return JsonResponse
     * @throws ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        $this->validate($request, [
            'file' => 'required',
        ]);

        $files = $request->file('file');
        try {
            $path_images = $this->imageService->uploadMultipleFilesToS3($files, 'users');
            $root_url_images = $this->imageService->getS3ObjectUrl();

            return jsonResponse(['root_url' => $root_url_images, 'image_url' => $path_images], 200, 'Uploaded successfully!');
        } catch (Exception $e) {
            return jsonResponse([], 500, $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
