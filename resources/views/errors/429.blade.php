<x-error-master>
    @section('content')
    <div class="text-center">
        <div class="error mx-auto" data-text="429">429</div>
        <p class="lead text-gray-800 mb-5">Too Many Requests</p>
        <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
        <a href="{{route('home')}}">&larr; Back to Home</a>
    </div>
    @endsection
</x-error-master>