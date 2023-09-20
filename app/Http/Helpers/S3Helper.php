<?php

namespace App\Http\Helpers;

use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use InvalidArgumentException;

class S3Helper
{
    private array $directoryType = ['users', 'products'];

    /**
     * @param        $file
     * @param string $directoryType
     *
     * @return string
     * @throws Exception
     */
    public function uploadSingleFileToS3($file, string $directoryType): string
    {
        if (!in_array($directoryType, $this->directoryType)) {
            throw new InvalidArgumentException('Invalid directory type!');
        }

        $extension = strtolower($file->getClientOriginalExtension());
        $filename = $directoryType . '_' . uniqid() . '_' . time() . '.' . $extension;
        $now = Carbon::now();
        $path = 'images/' . $directoryType . '/' . $now->year . '/' . $now->month . '/';
        if (Storage::disk('s3')->exists($path)) {
            Storage::disk('s3')->makeDirectory($path);
        }
        try {
            $image = Image::make($file);
            $image->resize(480, 480, function ($constraint) {
                $constraint->aspectRatio();
            });
            $imageData = (string)$image->encode($extension);
            Storage::disk('s3')->put($path . $filename, $imageData);

            return $path . $filename;
        } catch (Exception $e) {
            throw new Exception('Image upload failed: ' . $e->getMessage());
        }
    }


    /**
     * @param array  $files
     * @param string $directoryType
     *
     * @return array
     */
    public function uploadMultipleFilesToS3(array $files, string $directoryType): array
    {
        if (!in_array($directoryType, $this->directoryType)) {
            throw new InvalidArgumentException('Invalid directory type!');
        }

        $uploadedFiles = [];

        foreach ($files as $file) {
            $extension = strtolower($file->getClientOriginalExtension());
            $filename = $directoryType . '_' . uniqid() . '_' . time() . '.' . $extension;
            $now = Carbon::now();
            $path = 'images/' . $directoryType . '/' . $now->year . '/' . $now->month . '/';

            if (Storage::disk('s3')->exists($path)) {
                Storage::disk('s3')->makeDirectory($path);
            }

            try {
                $image = Image::make($file);
                $image->resize(480, 480, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $imageData = (string)$image->encode($extension);
                Storage::disk('s3')->put($path . $filename, $imageData);

                $uploadedFiles[] = $path . $filename;
            } catch (Exception $e) {
                continue;
            }
        }

        return $uploadedFiles;
    }


    /**
     * @return string
     */
    function getS3ObjectUrl(): string
    {
        $bucket = config('filesystems.disks.s3.bucket');
        $region = config('filesystems.disks.s3.region');

        return "https://{$bucket}.s3.{$region}.amazonaws.com/";
    }
}
