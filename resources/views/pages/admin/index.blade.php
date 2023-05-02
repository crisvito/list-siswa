@extends('layouts.admin')
@section('title', 'contoh')

@section('container')
    <h1>test</h1>
    <p>Anda Login Sebagai {{ $detail[0]->role->role }}</p>
@endsection
