{{-- resources/views/docs-api.blade.php --}}
@extends('layouts.app') {{-- ganti/hapus baris ini kalau layout-mu beda atau belum ada --}}

@section('title', 'Docs API')

@section('content')
<div class="container py-4">
  <h1 class="mb-3">Dokumentasi API</h1>
  <p>Selamat datang di halaman dokumentasi API.</p>

  {{-- Contoh konten --}}
  <h2>Endpoint</h2>
  <pre>GET /api/v1/users</pre>

  <h3>Query Params</h3>
  <ul>
    <li><code>page</code> – integer, opsional</li>
  </ul>
</div>
@endsection
