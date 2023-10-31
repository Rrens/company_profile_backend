@foreach ($brand as $item)
    <div class="logo-container">
        <a href="{{ $item->link_learn_more }}" target="_blank">
            <img src="{{ empty($item->logo) ? '-' : asset('storage/uploads/logo/' . $item->logo) }}"
                class="logo-conten image_footer">
        </a>
    </div>
@endforeach
