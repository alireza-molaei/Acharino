@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-right text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
