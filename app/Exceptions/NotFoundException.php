<?php
declare(strict_types = 1);

namespace App\Exceptions;

use Exception;
use Log;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class NotFoundException extends Exception
{
    /**
     * Report the exception.
     */
    public function report(): void
    {
        Log::debug('404');
    }

    /**
     * Render the exception into an HTTP response.
     */
    public function render(Request $request): JsonResponse
    {
        return response()->json(['message' => $this->getMessage()], 404);
    }
}
