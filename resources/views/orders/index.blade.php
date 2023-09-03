<x-layout>


    <div class="flex flex-col items-center justify-center p-12">
        <h1 class="p-6 text-[24px]">Create New Order</h1>

        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{ route('invoice.product.store') }}" method="POST">
                @csrf

                <div class="mb-5">
                    <label for="customer-name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Customer Name
                    </label>
                    @error('customer_name')
                        <p class="text-red-500 mb-2">{{ $message }}</p>
                    @enderror
                    <select id="customer-name" name="customer_id"
                        class="block bg-white w-full px-4 py-2 border rounded-md focus:ring focus:ring-[#07074D] focus:ring-opacity-50">
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label for="product-name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Product Name
                    </label>
                    @error('product_name')
                        <p class="text-red-500 mb-2">{{ $message }}</p>
                    @enderror
                    <select id="product-name" name="product_id"
                        class="block bg-white w-full px-4 py-2 border rounded-md focus:ring focus:ring-[#07074D] focus:ring-opacity-50">
                        @foreach ($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }} (
                                {{ $product->price }} EGP)</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-5">
                    <label for="quantity" class="mb-3 block text-base font-medium text-[#07074D]">
                        Quantity
                    </label>
                    @error('quantity')
                        <p class="text-red-500 mb-2">{{ $message }}</p>
                    @enderror
                    <input type="number" name="quantity" id="date" placeholder="Quantity"
                        value="{{ old('quantity') }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="mb-5">
                    <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                        Date
                    </label>
                    @error('date')
                        <p class="text-red-500 mb-2">{{ $message }}</p>
                    @enderror
                    <input type="date" name="date" id="date" placeholder="Invoice Date"
                        value="{{ old('date') }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>


                <div>
                    <button type="submit"
                        class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- component -->
    <section class="flex flex-column items-center justify-center h-auto  mb-16">
        <div class="w-full max-w-2xl bg-white shadow-lg rounded-sm border border-gray-200">
            <!-- Table -->
            <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                <header class="px-5 py-4 border-b border-gray-100">
                    <h2 class="font-semibold text-gray-800">Invoice Products</h2>
                </header>
                <div class="p-3">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                <tr>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">اسم المنتج</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">السعر</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">الكمية</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">الحساب الكلي</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">اسم العميل</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">التاريخ</div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="text-sm divide-y divide-gray-100">
                                @foreach ($invoiceProducts as $product)
                                    @include('products.components.invoiceProduct', [
                                        'invoiceData' => $product,
                                    ])
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>




</x-layout>
