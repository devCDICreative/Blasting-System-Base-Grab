<x-error-master>
    @section('content')
    <div class="text-center">
        <div class="error mx-auto" data-text="419">419</div>
        <p class="lead text-gray-800 mb-5">POST Error</p>
        <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
        <a href="{{route('home')}}">&larr; Back to Home</a>
    </div>
    @endsection
</x-error-master>
