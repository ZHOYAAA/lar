<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Widgets\StatsOverview;

class UserDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.pages.user-dashboard';

    // Menggunakan metode getMiddleware untuk menentukan middleware
    protected static function getMiddleware(): array
    {
        return ['auth', 'role:user']; // Middleware untuk memastikan hanya user dengan role 'user' yang bisa mengakses
    }

    public function mount()
    {
        // Logika untuk mempersiapkan data jika diperlukan
    }

    public function getTitle(): string
    {
        return 'User Dashboard';
    }

    protected function getWidgets(): array
    {
        return [
            StatsOverview::class, // Widget contoh untuk statistik
        ];
    }
}
