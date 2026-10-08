<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Client;
use App\Models\ContactMessage;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Visitor;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $today = now()->startOfDay();
        $week = now()->subDays(6)->startOfDay();
        $month = now()->subDays(29)->startOfDay();

        $todayPageViews = Visitor::where('visited_at', '>=', $today)->count();

        $weekVisitors = Visitor::where('visited_at', '>=', $week)->count();

        $monthVisitors = Visitor::where('visited_at', '>=', $month)->count();

        $uniqueToday = Visitor::where('visited_at', '>=', $today)
            ->distinct('visitor_hash')
            ->count('visitor_hash');

        $draftContent =
            Article::where('status', 'draft')->count() +
            Portfolio::where('status', 'draft')->count() +
            Testimonial::where('status', 'draft')->count() +
            Client::where('status', 'draft')->count();

        return [
            Stat::make('Artikel', Article::count())
                ->description('Total artikel')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('primary'),

            Stat::make('Portfolio', Portfolio::count())
                ->description('Total project')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('info'),

            Stat::make('Testimonial', Testimonial::count())
                ->description('Total testimonial')
                ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->color('success'),

            Stat::make('Klien', Client::count())
                ->description('Total klien')
                ->descriptionIcon('heroicon-m-building-office-2')
                ->color('warning'),

            Stat::make('Pesan Baru', ContactMessage::where('status', 'new')->count())
                ->description('Belum ditangani')
                ->descriptionIcon('heroicon-m-inbox')
                ->color('danger'),

            Stat::make('Pengunjung Hari Ini', $uniqueToday)
                ->description($todayPageViews . ' page views')
                ->descriptionIcon('heroicon-m-users')
                ->color('gray'),

            Stat::make('Traffic 7 Hari', $weekVisitors)
                ->description('Total page views')
                ->descriptionIcon('heroicon-m-chart-bar')
                ->color('gray'),

            Stat::make('Traffic 30 Hari', $monthVisitors)
                ->description('Total page views')
                ->descriptionIcon('heroicon-m-chart-bar-square')
                ->color('gray'),

            Stat::make('Draft Konten', $draftContent)
                ->description('Menunggu dipublikasikan')
                ->descriptionIcon('heroicon-m-pencil-square')
                ->color('warning'),
        ];
    }
}