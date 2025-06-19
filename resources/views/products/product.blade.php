<!DOCTYPE html>
<html lang="en">
    <head>
    <title>payment check </title>
      
    </head>
<body>

<div class="container mx-auto px-4 py-8">

<h1 class="font-bold text-gray-800 mb-8">Products</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
@foreach ($products as $product)

<div class="bg-white rounded-2xl shadow p-4 flex flex-col items-center">

<img

src="https://dummyimage.com/600x600/000/fff&text={{ $product->name }}"

alt="Product Image"

class="w-full h-60 object-cover rounded-md mb-4"
>
<h2 class="text-lg font-semibold text-gray-700">{{ $product->name }}</h2>
<p class="text-blue-600 font-bold text-md mb-2">{{ $product->pricer }}</p>
<a
href="{{ route('products.show', $product->id) }}"
class="mt-auto inline-block bg-blue-600 text-white  px-4 py-2 rounded hover:bg-blue-700"
>
view
</a> 
<ul>

</ul>

</div>
  @endforeach

</div>
</div>

</body>

</html>