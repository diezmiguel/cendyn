<?php

namespace App\Http\Controllers;

use App\Services\QuoteService;

class QuoteController extends Controller
{
    protected $quoteService;

    public function __construct(QuoteService $quoteService)
    {
        $this->quoteService = $quoteService;
    }

    public function quote(): string
    {
        return $this->quoteService->getQuote();
    }
}
