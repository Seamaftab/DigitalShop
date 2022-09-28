<x-frontend-layout>

	<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        @foreach($products as $p)
        	<x-front.product-card :product="$p" />
        @endforeach
    </div>

</x-frontend-layout>