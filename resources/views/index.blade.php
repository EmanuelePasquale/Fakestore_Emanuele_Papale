<x-template>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Fake Store</h1>
                <p class="lead text-body-secondary">Fast delivery in all Italy</p>
                <p>
                    <a href="#" class="btn btn-secondary my-2">Regions list</a>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                @foreach ($response['products'] as $item)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="{{ $item['thumbnail'] }}" class="card-img-top img-fluid" alt="Immagine Prodotto">
                            <div class="card-body">
                                <h3>{{ $item['title'] }}</h3>
                                <h6 class="card-text">Price: {{ $item['price'] }} $</h6>
                                @php
                                    $arrotonda = floor($item['rating']); // Arrotonda
                                @endphp
                                <div class="rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $arrotonda)
                                            <span
                                                style="color: gold; font-size: 20px; margin-right: 2px;">&#9733;</span>
                                        @else
                                            <span
                                                style="color: #ccc; font-size: 20px; margin-right: 2px;">&#9733;</span>
                                        @endif
                                    @endfor
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group mt-3">
                                        <a href="{{ route('show', ['id' => $item['id']]) }}"
                                            class="btn btn-md btn-outline-secondary">Detail</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-template>
