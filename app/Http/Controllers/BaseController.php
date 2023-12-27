<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class BaseController extends Controller
{
    public function __construct(private readonly string $viewPrefix, private readonly array $data = [])
    {
    }

    public function index(): View
    {
        return view("{$this->viewPrefix}.index", $this->data);
    }
}
