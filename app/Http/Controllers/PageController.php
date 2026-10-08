<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Client;
use App\Models\ContactSetting;
use App\Models\Portfolio;
use App\Models\Testimonial;

class PageController extends Controller
{
    public function home()
    {
        $testimonials = Testimonial::where('status', 'published')
            ->latest()
            ->take(4)
            ->get();

        $articles = Article::with('category')
            ->where('status', 'published')
            ->latest('published_at')
            ->take(4)
            ->get();

        $clients = Client::where('status', 'published')
            ->latest()
            ->take(8)
            ->get();

        return view('pages.home', compact(
            'testimonials',
            'articles',
            'clients'
        ));
    }

    public function layanan()
    {
        return view('pages.layanan');
    }

    public function tentang()
    {
        return view('pages.tentang');
    }

    public function portofolio()
    {
        $featuredPortfolio = Portfolio::where('status', 'published')
            ->where('featured', true)
            ->latest()
            ->first();

        if (!$featuredPortfolio) {
            $featuredPortfolio = Portfolio::where('status', 'published')
                ->latest()
                ->first();
        }

        $portfolios = Portfolio::where('status', 'published')
            ->when($featuredPortfolio, function ($query) use ($featuredPortfolio) {
                $query->where('id', '!=', $featuredPortfolio->id);
            })
            ->latest()
            ->get();

        return view('pages.portofolio', compact(
            'featuredPortfolio',
            'portfolios'
        ));
    }

    public function testimonial()
    {
        $testimonials = Testimonial::where('status', 'published')
            ->latest()
            ->get();

        return view('pages.testimonial', compact('testimonials'));
    }

    public function artikel()
    {
        $featuredArticle = Article::with('category')
            ->where('status', 'published')
            ->latest('published_at')
            ->first();

        $articles = Article::with('category')
            ->where('status', 'published')
            ->when($featuredArticle, function ($query) use ($featuredArticle) {
                $query->where('id', '!=', $featuredArticle->id);
            })
            ->latest('published_at')
            ->paginate(9);

        return view('pages.artikel', compact(
            'featuredArticle',
            'articles'
        ));
    }

    public function artikelDetail(string $slug)
    {
        $article = Article::with('category')
            ->where('status', 'published')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('pages.artikel-detail', compact('article'));
    }

    public function klien()
    {
        $clients = Client::where('status', 'published')
            ->latest()
            ->get();

        return view('pages.klien', compact('clients'));
    }

    public function kontak()
    {
        $contact = ContactSetting::first();

        return view('pages.kontak', compact('contact'));
    }
}