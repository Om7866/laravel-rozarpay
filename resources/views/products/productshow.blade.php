<!DOCTYPE html>
<html lang="en">
    <head>
    <title>payment check </title>
      
    </head>
<body>

<div class="container mx-auto px-4 py-8">
<h1 class="font-bold text-gray-800 mb-8">Products</h1>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
<div class="bg-white rounded-2xl shadow p-4 flex flex-col items-center">

<img

src="https://dummyimage.com/600x600/000/fff&text={{ $product->name }}"

alt="Product Image"

class="w-full h-60 object-cover rounded-md mb-4"
>
<h2 class="text-lg font-semibold text-gray-700">{{ $product->name }}</h2>
<p class="text-blue-600 font-bold text-md mb-2">{{ $product->pricer }}</p>
<button
id="rzp-button1"
class="mt-auto inline-block bg-blue-600 text-white  px-4 py-2 rounded hover:bg-blue-700"
>
pay
</button> 
<ul>

</ul>

</div>
</div>
</div>

</body>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
var options = {
    "key": "{{env('RAZORPAY_KEY')}}", // Enter the Key ID generated from the Dashboard
    "amount": "{{$product->pricer * 100}}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Abizone", //your business name
    "description": "Test Transaction",
    
    
    "callback_url": "route('razorpay.callback')",
    "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
        "name": "Gaurav Kumar", //your customer's name
        "email": "gaurav.kumar@example.com",
        "contact": "9000090000" //Provide the customer's phone number for better conversion rates 
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>

</html>