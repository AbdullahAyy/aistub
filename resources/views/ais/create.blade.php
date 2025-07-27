@extends('layouts.app')

@section('title', $sendBlade['title'])

@section('content')

    <div class="container-fluid">
        <div class="card p-3 shadow border-0">
            <div class="row pb-3 my-0">
                <div class="col-12 col-md-6">
                    <h3>{{ $sendBlade['title'] }}</h3>
                </div>
            </div>

            <!-- AI Form -->
            <form id="aiForm" class="row">
                @csrf
                <div class="row">
                    <!-- Sol Kolon -->
                    <div class="col-12 col-md-8">
                        <div class="form-group">
                            <label for="name" class="mt-2">Yapay Zeka Adı</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Yapay Zeka Adı">
                        </div>
                        <div class="form-group">
                            <label for="slug" class="mt-2">Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug..." readonly>
                        </div>
                        <div class="form-group">
                            <label for="tone" class="mt-2">Çıktı Tonu</label>
                            <input type="text" class="form-control" id="tone" name="tone" placeholder="Çıktı Tonu">
                        </div>
                        <div class="form-group">
                            <label for="prefix_prompt" class="mt-2">Ön Komut</label>
                            <input type="text" class="form-control" id="prefix_prompt" name="prefix_prompt" placeholder="Ön Komut">
                        </div>
                        <div class="form-group">
                            <label for="sample_json" class="mt-2">Örnek JSON</label>
                            <textarea class="form-control" id="sample_json" name="sample_json" rows="4">Örnek JSON</textarea>
                        </div>
                    </div>

                    <!-- Sağ Kolon -->
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="ai" class="mt-2">Yapay Zeka</label>
                            <select class="form-control" id="ai" name="ai">
                                <option>Gemini 2.0</option>
                                <option>Chat GPT 3.1</option>
                                <option>Chat GPT 4.0</option>
                                <option>Claude 2.5</option>
                                <option>DeepSeek 1.8</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="is_active" class="mt-2">Durumu</label>
                            <select class="form-control" id="is_active" name="is_active">
                                <option value="1">Aktif</option>
                                <option value="0">Pasif</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="language" class="mt-2">Çıktı Dili</label>
                            <select class="form-control" id="language" name="language">
                                <option value="tr">Türkçe</option>
                                <option value="en">İngilizce</option>
                                <option value="de">Almanca</option>
                                <option value="ar">Arapça</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Kaydet Butonu -->
                <div class="row mt-3">
                    <div class="col-12 text-end">
                        <a href='{{ route('ais.index') }}' class="btn btn-danger">
                            <i class="bi bi-x"></i>
                            İptal
                        </a>
                        <button class="btn btn-success" id="submitForm" type="submit">
                            <i class="bi bi-floppy"></i>
                            Kaydet
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        (function ($) {
            // Bağımsız kullanım: $.slugify("Merhaba Dünya!") => "merhaba-dunya"
            $.slugify = function (str) {
                if (!str) return '';

                // Türkçe karakter haritası
                const trMap = {
                    'Ç':'c','ç':'c','Ğ':'g','ğ':'g','İ':'i','I':'i','ı':'i','Ö':'o','ö':'o',
                    'Ş':'s','ş':'s','Ü':'u','ü':'u'
                };

                // TR char fix
                str = str.replace(/[ÇçĞğİIıÖöŞşÜü]/g, function(ch){
                    return trMap[ch] || ch;
                });

                return str
                    .toString()
                    .normalize('NFD')
                    .replace(/[\u0300-\u036f]/g, '')
                    .toLowerCase()
                    .replace(/[^a-z0-9]+/g, '-')
                    .replace(/^-+|-+$/g, '')
                    .replace(/-{2,}/g, '-');
            };

            // Plugin: #name alanını yazdıkça #slug alanına otomatik slug bas
            $.fn.slugify = function (targetSelector) {
                const $target = $(targetSelector);
                return this.on('keyup change blur', function () {
                    $target.val($.slugify($(this).val()));
                });
            };
        })(jQuery);
        $('#name').slugify('#slug');

        $(function () {
            $('#aiForm').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{ route('ais.store') }}",
                    type: "POST",
                    data: $(this).serialize(),
                    success: function(response) {
                        alert('Başarılı: ' + response.message);
                        window.location.href = "{{ route('ais.index') }}";
                    },
                    error: function(xhr) {
                        alert('Hata: ' + xhr.responseText);
                    }
                });
            });
        });

    </script>
@endsection
