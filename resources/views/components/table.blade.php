@props([
    'headers' => [],
    'rows' => [],
    'vertical' => false
])

@if($vertical)
    <table class="table table-bordered w-100 text-base">
        <tbody>
        @foreach($rows as $row)
            <tr>
                <th class="w-25">{{ $row[0] }}</th>
                <td class="px-4 py-2 align-middle">
                    <div class="d-flex align-items-center justify-content-between">
                        <span>{{ $row[1] }}</span>

                        @if(Str::lower($row[0]) === 'token')
                            <button
                                type="button"
                                class="btn btn-sm shadow-none border border-dark rounded-3 ms-2 d-flex align-items-center justify-content-center p-2"
                                onclick="navigator.clipboard.writeText('{{ $row[1] }}').then(() => alert('Token kopyalandı!'))"
                                title="Kopyala"
                            >
                                <i class='bx bx-copy'></i>
                            </button>
                        @endif
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <table class="table table-bordered w-100 text-base">
        @if(!empty($headers))
            <thead>
            <tr>
                @foreach($headers as $header)
                    <th>{{ $header }}</th>
                @endforeach
            </tr>
            </thead>
        @endif

        <tbody>
        @foreach($rows as $row)
            <tr>
                @foreach($row as $index => $cell)
                    <td class="px-4 py-2 align-middle">
                        @if(!empty($headers) && $headers[$index] === 'Token')
                            <div class="d-flex align-items-center justify-content-between">
                                <span>{{ $cell }}</span>
                                <button
                                    type="button"
                                    class="btn btn-sm shadow-none border border-dark rounded-3 ms-2 d-flex align-items-center justify-content-center p-2"
                                    onclick="navigator.clipboard.writeText('{{ $cell }}').then(() => alert('Token kopyalandı!'))"
                                    title="Kopyala"
                                >
                                    <i class='bx bx-copy'></i>
                                </button>
                            </div>
                        @else
                            {{ $cell }}
                        @endif
                    </td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
@endif
