@extends('layouts.app')

@section('title', $sendBlade['title'])

@section('content')

    <div class="container-fluid">
        <div class="card p-3 shadow border-0">
            @php
                $headers = $sendBlade['headers'];
                $rows = $sendBlade['ais'];
            @endphp

            <div class="row pb-3 my-0">
                <div class="col-12 col-md-6">
                    <h3>{{ $sendBlade['title'] }}</h3>
                </div>
                <div class="col-12 col-md-6 my-0 text-end">
                    <a href="{{ route('ais.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus"></i>
                        Yeni Oluştur
                    </a>
                </div>
            </div>


            <x-table :headers="$headers" :rows="$rows" />

        </div>
    </div>

@endsection

@section('scripts')

@endsection
