
<button {{ $attributes->merge(['class' =>'bg-blue-500 text-white 
     font-bold py-2 px-4 rounded'
     ]) }}>
    {{ $but }}
</button>

<!-- Card component -->
<div class="card">
    <div class="card-header">
        {{ $cardTitle }}
    </div>
    <div class="card-body">
        {{ $cardContent }}
    </div>
</div>
