<button type="submit" {{ $attributes->merge(['class' => 'btn']) }}>
    {{ $texto ?? $slot ?? 'Enviar' }}
</button>

