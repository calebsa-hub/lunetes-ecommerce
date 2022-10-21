@csrf
<div class="">
    <input class = "border-2 border-black mb-2 w-full" type="text" name="name" placeholder="Nome" value="{{ $product->name ?? old('name') }}"><br>
    <textarea class = "border-2 border-black mb-2 w-full" name="description" id="description-product" rows="6"></textarea><br>
    {{-- <input class="border-2 border-black mb-2" type="text" name="description" placeholder="Descrição do produto" value="{{ $product->description ?? old('description') }}"><br> --}}
    <input class = "border-2 border-black mb-2" type="number" name="price" placeholder="Preço" value="{{ $product->price ?? old('price') }}"><br>
    <input class = "border-2 border-black mb-2" type="textr" name="category" placeholder="Categoria" value="{{ $product->category ?? old('category') }}"><br>
    <input type="file" name="image" class = "pb-2"><br>
    <button class = "bg-green-400 p-1 rounded-md font-medium" type="submit">
        Enviar
    </button>
</div>
