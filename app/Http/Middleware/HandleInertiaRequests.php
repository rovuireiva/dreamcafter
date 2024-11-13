<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use Tighten\Ziggy\Ziggy;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app'; // Default view untuk halaman utama

    /**
     * Determine the root view dynamically based on the request route.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    public function rootView(Request $request): string
    {
        // Tentukan app.blade.php untuk halaman tertentu
        if ($request->is('/') || $request->is('welcome') || $request->is('produk') || $request->is('portofolio') || $request->is('blog') || $request->is('tentang')) {
            return 'app'; // Menggunakan app.blade.php
        }
    
        // Default ke layout.blade.php untuk rute lainnya
        return 'layout';
    }
    

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return [
            ...parent::share($request),
            'ziggy' => fn () => [
                ...(new Ziggy)->toArray(),
                'location' => $request->url(),
            ],
            // Share layout berdasarkan rute
            'layout' => $this->rootView($request), // Akan menjadi 'layout' untuk semua selain '/'.
        ];
    }
}