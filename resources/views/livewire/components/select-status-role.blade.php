<div>
    <select class="w-20 h-8 pl-1 text-center text-gray-200 bg-red-900 seleted" wire:model="status">
        <option value="1" {{ $is_active == 1 ? 'selected' : '' }}>
            Active</option>
        <option value="0" {{ $is_active == 0 ? 'selected' : '' }}>
            Inactive</option>
    </select>
</div>
