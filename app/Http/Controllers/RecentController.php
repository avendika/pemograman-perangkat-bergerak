<?php

namespace App\Http\Controllers;

use App\Models\News; // ← Tambahkan ini
use Illuminate\Http\Request;

class RecentController extends Controller
{
    /**
     * Menampilkan daftar berita terbaru (sementara: semua berita).
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $newsList = News::latest()->get(); // Bisa pakai pagination jika perlu
        return view('recent', compact('newsList'));
    }

    /**
     * Menangani pencarian berita berdasarkan keyword.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function search(Request $request)
    {
        $keyword = $request->input('search');

        $newsList = News::where('title', 'like', "%{$keyword}%")
                        ->orWhere('description', 'like', "%{$keyword}%")
                        ->get();

        return view('news.index', compact('newsList', 'keyword'));
    }
}
