<?php

namespace App\Http\Helpers;

use Exception;
use Carbon\Carbon;
use InvalidArgumentException;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class S3Helper
{
    private array $directoryType = ['users', 'products', 'categories'];

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
        $filename  = $directoryType . '_' . uniqid() . '_' . time() . '.' . $extension;
        $now       = Carbon::now();
        $path      = 'images/' . $directoryType . '/' . $now->year . '/' . $now->month . '/';
        if (Storage::disk('s3')->exists($path)) {
            Storage::disk('s3')->makeDirectory($path);
        }
        try {
            $image = Image::make($file);
            $image->resize(480, 480, function ($constraint) {
                $constraint->aspectRatio();
            });
            $imageData = (string) $image->encode($extension);
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
            $filename  = $directoryType . '_' . uniqid() . '_' . time() . '.' . $extension;
            $now       = Carbon::now();
            $path      = 'images/' . $directoryType . '/' . $now->year . '/' . $now->month . '/';

            if (Storage::disk('s3')->exists($path)) {
                Storage::disk('s3')->makeDirectory($path);
            }

            try {
                $image = Image::make($file);
                $image->resize(480, 480, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $imageData = (string) $image->encode($extension);
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

    /**
     * Delete a file from Amazon S3.
     *
     * @param string $filePath The path of the file to delete, e.g., 'images/users/2023/09/user_12345.jpg'
     * @throws Exception If the file deletion fails.
     */
    public function deleteFileFromS3(string $filePath)
    {
        try {
            $s3Disk = Storage::disk('s3');

            if ($s3Disk->exists($filePath)) {
                $s3Disk->delete($filePath);
            } else {
                throw new Exception('File not found on S3');
            }
        } catch (Exception $e) {
            throw new Exception('Image deletion failed: ' . $e->getMessage());
        }
    }
}
