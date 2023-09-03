<tr>
    <td class="p-4 whitespace-nowrap">
        <div class="flex items-center">
            <div class="font-medium text-gray-800">{{ $invoiceData['product']->name }}</div>
        </div>
    </td>

    <td class="p-4 whitespace-nowrap">
        <div class="flex items-center">
            <div class="font-medium text-green-500">{{ $invoiceData['product']->price }} EGP</div>
        </div>
    </td>

    <td class="p-4 whitespace-nowrap">
        <div class="flex items-center">
            <div class="font-medium text-gray-800">{{ $invoiceData['quantity'] }}</div>
        </div>
    </td>

    <td class="p-4 whitespace-nowrap">
        <div class="flex items-center">
            <div class="font-medium text-green-500">
                {{ intval($invoiceData['quantity'] * $invoiceData['product']->price) }} EGP
            </div>
        </div>
    </td>

    <td class="p-4 whitespace-nowrap">
        <div class="flex items-center">
            <div class="font-medium text-gray-800">{{ $invoiceData['customer'] }}</div>
        </div>
    </td>

    <td class="p-4 whitespace-nowrap">
        <div class="flex items-center">
            <div class="font-medium text-gray-800">{{ $invoiceData['date'] }}</div>
        </div>
    </td>
</tr>
