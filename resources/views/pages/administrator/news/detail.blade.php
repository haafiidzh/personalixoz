@extends('layouts.administrator.master')

@section('title')
    Detail Berita
@endsection

@section('content')
    <x-breadcrumb :items="[
        ['title' => 'News', 'route' => 'administrator.news'],
        ['title' => 'Detail'],
    ]" />

    <div class="mb-7 py-3 flex justify-between">
        <h1 class="font-bold text-3xl">Detail Berita</h1>
        @can('view-news')
            <a wire:navigate href="{{ route('administrator.news') }}"
                class="px-2 py-2 rounded-md flex items-center text-slate-700 font-medium border-2 border-black hover:bg-white hover:text-black hover:border-transparent hover:shadow-md active:bg-slate-300 transition-all">
                <i class="text-xs fa-solid fa-arrow-left"></i> &nbsp; Kembali
            </a>
        @endcan
    </div>

    <livewire:administrator.news.detail :id="$id_berita">
@endsection

