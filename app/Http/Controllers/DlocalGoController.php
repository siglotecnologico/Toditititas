<?php

namespace App\Http\Controllers;

use App\Services\DlocalGoService;
use Illuminate\Http\Request;

class DlocalGoController extends Controller
{
    protected $dlocalGoService;

    public function __construct(DlocalGoService $dlocalGoService)
    {
        $this->dlocalGoService = $dlocalGoService;
    }

    public function getMe()
    {
        $data = $this->dlocalGoService->getMe();
        return response()->json($data);
    }
}
