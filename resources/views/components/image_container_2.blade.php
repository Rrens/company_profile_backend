@foreach ($brand as $item)
    <div class="img-container">
        <a href="{{ route('brand.select', $item->name) }}">
            <img src="{{ empty($item->logo) ? '-' : asset('storage/uploads/logo/' . $item->logo) }}"
                class="logo-conten image_footer">
        </a>
    </div>
@endforeach
