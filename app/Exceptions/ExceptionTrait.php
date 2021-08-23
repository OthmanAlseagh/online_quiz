<?php

namespace App\Exceptions;

use Illuminate\Support\Facades\Log;
use Throwable;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Illuminate\Support\Facades\App;

trait ExceptionTrait
{

    /**
     * Creates a new JSON response based on exception type.
     *
     * @param Request $request
     * @param Throwable $e
     * @return \Illuminate\Http\JsonResponse
     */
    protected function getJsonResponseForException(Request $request, Throwable $e)
    {
        switch (true) {
            case $this->isModelNotFoundException($e):
                $retval = $this->modelNotFound();
                break;
            case $this->isAuthorizationException($e):
                $retval = $this->forbidden();
                break;
            case $this->isUnauthorizedException($e):
                $retval = $this->unauthorized();
                break;
            default:
            {
                if (App::environment('production')) {
                    $retval = $this->badRequest();
                } else {
                    return parent::render($request, $e);
                }

            }
        }

        return $retval;
    }

    /**
     * Determines if the given exception is an Eloquent model not found.
     *
     * @param Throwable $e
     * @return bool
     */
    protected function isModelNotFoundException(Throwable $e)
    {
        return $e instanceof ModelNotFoundException;
    }

    /**
     * Returns json response for Eloquent model not found exception.
     *
     * @param string $message
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function modelNotFound($message = 'Error', $statusCode = 404)
    {
        $message ='exceptions.record_not_found';
        return $this->jsonResponse($message, null, $statusCode);
    }

    /**
     * Returns json response.
     *
     * @param array|null $data
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function jsonResponse($message, $data = null, $status_code = 404)
    {
        $data = $data ?: [];

        $response = [
            'success' => false,
            'message' => $message,
            'data' => $data,
            'status_code' => $status_code
        ];

        return response()->json($response, $status_code);
    }

    /**
     * Determines if the given exception is an Eloquent model not found.
     *
     * @param Throwable $e
     * @return bool
     */
    protected function isAuthorizationException(Throwable $e)
    {
        return $e instanceof AuthorizationException;
    }

    /**
     * Returns json response for Eloquent model not found exception.
     *
     * @param string $message
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function unauthorized($message = 'Error', $statusCode = 401)
    {


        $message = 'exceptions.login_required';
        return $this->jsonResponse($message, null, $statusCode);
    }

    /**
     * Determines if the given exception is an Eloquent model not found.
     *
     * @param Throwable $e
     * @return bool
     */
    protected function isUnauthorizedException(Throwable $e)
    {
        return $e instanceof UnauthorizedHttpException | $e instanceof AuthenticationException;
    }

    /**
     * Returns json response for generic bad request.
     *
     * @param string $message
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function badRequest($message = 'Error', $statusCode = 400)
    {
        $message = 'exceptions.bad_request';
        return $this->jsonResponse($message, null, $statusCode);
    }

    /**
     * Returns json response for Eloquent model not found exception.
     *
     * @param string $message
     * @param int $statusCode
     * @return \Illuminate\Http\JsonResponse
     */
    protected function forbidden($message = 'Error', $statusCode = 403)
    {
        $message = 'exceptions.forbidden';
        return $this->jsonResponse($message, null, $statusCode);
    }

}