<x-layout>

    <!-- component -->
    <section class="flex items-center justify-center h-auto mt-[25vh]">
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
                                        <div class="font-semibold text-left">اسم المنتج</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">السعر</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-sm divide-y divide-gray-100">
                                <tr>
                                    <td class="p-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="font-medium text-gray-800">Alex Shatov</div>
                                        </div>
                                    </td>
                                    <td class="p-4 whitespace-nowrap">
                                        <div class="text-left font-medium text-green-500">$2,890.66</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="font-medium text-gray-800">Philip Harbach</div>
                                        </div>
                                    </td>

                                    <td class="p-4 whitespace-nowrap">
                                        <div class="text-left font-medium text-green-500">$2,767.04</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layout>
