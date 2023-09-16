@foreach ($brand as $item)
    <div class="img-container">
        <a href="{{ route('brand.select', $item->name) }}">
            <img src="{{ empty($thumbnail->where('id_brand', $item->id)->first()['image']) ? '-' : asset('storage/uploads/image/' . $thumbnail->where('id_brand', $item->id)->first()['image']) }}"
                class="card-conten" alt="{{ $item->nama . 'image' }}">
            <div class="card-title">{{ $item->nama }}</div>
            <img src="{{ empty($item->logo) ? '-' : asset('storage/uploads/logo/' . $item->logo) }}" class="hover-conten">
            {{-- <img src="{{ empty($item->logo) ? '-' : asset('storage/uploads/logo/' . $item->logo) }}"
                        class="logo-conten"> --}}
        </a>
    </div>
@endforeach
