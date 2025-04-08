<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
    @foreach($images as $image)
        <img src="{{ $image }}" alt="" class="w-full h-96 object-cover object-top rounded-xl border border-default-100 animate">
    @endforeach
</div>
