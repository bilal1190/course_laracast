<x-layout>
    <x-slot:heading>
        Jobs Potal
    </x-slot:heading>

    <ul>
    @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{ $job['id'] }}">
             <strong>{{ $job['title'] }}:</strong> Pay {{ $job['salary'] }} per year Age{{ $job['age'] }}
            </a>
        </li>
        
    @endforeach
 </ul>
</x-layout>
