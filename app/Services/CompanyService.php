<?php

namespace App\Services;

use App\Services\Traits\ConsumeExternalService;

class CompanyService
{
    use ConsumeExternalService;

    protected $token;
    protected $url;

    public function __construct()
    {
        $this->token = config('services.micro_01.token');
        $this->url = config('services.micro_01_url');
    }

    public function getCompany(string $company)
    {
        $response = $this->request('get', "/companies/{$company}");
        dd($response->body());
    }
}
