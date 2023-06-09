<?php

namespace App\Classes;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Response;

/**
 * This class to build the response of the API with the same structure for all responses and to make it easy
 * to change the response structure in the future if needed. I used Facade design pattern to make it easy to use.
 */
final class Responder
{

    // status code
    private int $status_code = 200;

    // status
    private string $status = 'success';

    // data
    private ?array $data = null; // ?array means that the data can be null

    // message
    private ?string $message = null;

    // error
    private ?array $errors = null;

    // locale
    private string $locale = 'en';

    // others
    private array $others = [];

    public function __construct()
    {
        $this->locale = app()->getLocale();
    }

    // init function
    public static function init(): self
    {
        return new self();
    }

    // set status code
    public function setStatusCode(int $status_code): self
    {
        $this->status_code = $status_code;
        return $this;
    }

    // set status
    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }


    // set others
    public function setOthers($others): self
    {
        $this->others = $others;

        return $this;
    }

    // set data
    public function setData(array|Collection|LengthAwarePaginator|JsonResource $data): self
    {
        switch (true) {
            case ($data instanceof Collection):
                $this->data = $data->toArray();
                break;
            case $data instanceof LengthAwarePaginator:
                $this->data = [
                    'data' => $data->items(),
                    'meta' => [
                        'total' => $data->total(),
                        'count' => $data->count(),
                        'per_page' => $data->perPage(),
                        'current_page' => $data->currentPage(),
                        'total_pages' => $data->lastPage(),
                    ],
                ];
                break;
            case $data instanceof JsonResource:
                try{
                    $data = (array) $data->response(request())->getData();
                    $this->data = Arr::get($data, 'data');
                    unset($data['data']);
                    $this->others = $data;
                }catch (Exception $e){
                    $this->data = $data;
                }
//                $this->data = $data->toArray(request());
                break;
            default:
                $this->data = $data;
                break;
        }
        return $this;
    }

    // set message
    public function setMessage(string $message): self
    {
        $this->message = $message;
        return $this;
    }

    // set error
    public function setErrors(array $errors): self
    {
        $this->errors = $errors;
        return $this;
    }

    // success
    public function success(): self
    {
        $this->status = 'success';
        $this->status_code = 200;
        return $this;
    }



    public function getDataHandled(): array|Collection|JsonResource|null
    {
        if((!$this->data || (is_array($this->data) && count($this->data) === 0))){
            return null;
        }

        return $this->data;
    }


    /**
     * build the response
     * @return JsonResponse
     */
    public function respond(): JsonResponse
    {
        return Response::json(array_merge([
            'status_code' => $this->status_code,
            'status' => $this->status ?? 'success',
            'message' => $this->message ?? null,
            'locale' => $this->locale,
            'data' => $this->getDataHandled(),
        ],
            $this->errors? ['errors' => $this->errors] : [],
            $this->others
        ), $this->status_code);
    }
}
