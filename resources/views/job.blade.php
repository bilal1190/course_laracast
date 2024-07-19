<x-layout>
    <x-slot:heading>
        Job Portal
    </x-slot:heading>
    
    @if ($job)
        <h2>{{ $job['title'] }}</h2>
        <p>{{ $job['salary'] }}</p>
        <p>Age: {{ $job['age'] }}</p>
    @else
        <p>Job not found.</p>
    @endif
</x-layout>
