<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $pages = [
            ['url' => route('home')],
            ['url' => route('layanan')],
            ['url' => route('tentang')],
            ['url' => route('portofolio')],
            ['url' => route('testimonial')],
            ['url' => route('artikel')],
            ['url' => route('klien')],
            ['url' => route('kontak')],
        ];

        $articles = Article::query()
            ->where('status', 'published')
            ->orderByDesc('updated_at')
            ->get(['slug', 'updated_at']);

        return response()
            ->view('sitemap', compact('pages', 'articles'))
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
