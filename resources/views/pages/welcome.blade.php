<!DOCTYPE html>
@extends('layouts.app')

@section('nav-content')

<li><a href="https://laravel.com/docs">Documentation</a></li>
<li><a href="https://laracasts.com">Laracasts</a></li>
<li><a href="https://laravel-news.com">News</a></li>
<li><a href="https://forge.laravel.com">Forge</a></li>
<li><a href="https://github.com/laravel/laravel">GitHub</a></li>

@endsection

@section('content') 

        <div class="container section">
            <h2 class="header">Welcome to Your Case Library</h2>
        </div>

        <div class="container">
	        <h3><a href="/hospitals">Hospitals</a></h3>
	        <h3><a href="/cards">Cases</a></h3>
        </div>

@endsection

