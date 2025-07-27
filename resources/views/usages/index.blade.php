@extends('layouts.app')

@section('title', $sendBlade['title'])

@section('head')
    <style>
        .bg-teal{
            background-color: #39cccc !important;
            color: #fff;
        }
    </style>
@endsection

@section('content')

    <div class="container-fluid">
        <div class="card p-3 shadow border-0">

            <div class="row pb-3 my-0">
                <div class="col-12 col-md-6">
                    <h3>{{ $sendBlade['title'] }}</h3>
                </div>
            </div>

            @if($sendBlade['hasUsages'])
                <div class="row">
                    <!-- Sol taraf (Tablo) -->
                    <div class="col-12 col-md-8">
                        @php
                            $firstUsage = $sendBlade['usages'][0] ?? null;

                            $rows = $firstUsage ? [
                                ['Token', $firstUsage[1]],
                                ['Kota', $firstUsage[2]],
                                ['Son Kullanma Tarihi', $firstUsage[3]],
                                ['Oluşturulma Tarihi', $firstUsage[4]],
                            ] : [];
                        @endphp

                        <div class="card shadow-sm border-0 mb-3">
                            <div class="card-body p-3">
                                <x-table :rows="$rows" />
                            </div>
                        </div>
                    </div>

                    <!-- Sağ taraf (Kartlar) -->
                    <div class="col-12 col-md-4">
                        @foreach(range(1,4) as $item)
                            <div class="info-box bg-teal text-white mb-3">
                            <span class="info-box-icon bg-white" style="width: 100px; height: 100px">
                                <i class='bx bx-sitemap text-dark'></i>
                            </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Events</span>
                                    <span class="info-box-number">41,410</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <span class="progress-description">
                                    70% Increase in 30 Days
                                </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="d-flex gap-2">
                    Henüz token oluşturulmamış.
                    <a class="text-primary text-decoration-underline" onclick="createToken()">Token Oluşturun.</a>
                </div>
            @endif

        </div>
    </div>


@endsection

@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function createToken() {
            $.ajax({
                url: '{{ route('usages.create-token') }}',
                method: 'POST',
                success: function(response) {
                    alert('Başarıyla Token Oluşturuldu...');
                    window.location.href = '{{ route('usages.index') }}';
                },
                error: function(xhr) {
                    alert('Hata: ' + xhr.responseText);
                }
            });
        }
    </script>
@endsection
