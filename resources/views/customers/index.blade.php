<x-layout>


    <div class="flex flex-col items-center justify-center p-12">
        <h1 class="p-6 text-[24px]">Add New Customer</h1>

        <div class="mx-auto w-full max-w-[550px]">
            <form action="{{ route('customers.store') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Name
                    </label>
                    @error('name')
                        <p class="text-red-500 mb-2">{{ $message }}</p>
                    @enderror
                    <input type="text" name="name" id="name" placeholder="Product name"
                        value="{{ old('name') }}"
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


    <section class="flex flex-column items-center justify-center h-auto mt-4 mb-8">
        <div class="w-full max-w-2xl bg-white shadow-lg rounded-sm border border-gray-200">
            <!-- Table -->
            <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                <header class="px-5 py-4 border-b border-gray-100">
                    <h2 class="font-semibold text-gray-800">Products</h2>
                </header>
                <div class="p-3">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                <tr>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">اسم العميل</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">تاريخ الاضافة</div>
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="text-sm divide-y divide-gray-100">
                                @foreach ($customers as $customer)
                                    @include('customers.components.customer', compact('customer'))
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-layout>
