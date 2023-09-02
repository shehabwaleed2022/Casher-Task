<tr>
    <td class="p-4 whitespace-nowrap">
        <div class="flex items-center">
            <div class="font-medium text-gray-800">{{ $customer->name }}</div>
        </div>
    </td>

    <td class="p-4 whitespace-nowrap">
        <div class="flex items-center">
            <div class="font-medium text-gray-800">{{ $customer->created_at->format('Y-d-m') }}</div>
        </div>
    </td>
</tr>
