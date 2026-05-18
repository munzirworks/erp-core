<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('dashboard.index', [
            'stats' => [
                [
                    'label' => __('Access level'),
                    'value' => auth()->user()->role->label(),
                ],
                [
                    'label' => __('Login email'),
                    'value' => auth()->user()->email,
                ],
                [
                    'label' => __('Account status'),
                    'value' => __('Active'),
                ],
            ],
        ]);
    }
}
