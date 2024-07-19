<x-layout>
    <x-slot:heading>
        Contact Page
    </x-slot:heading>

    @if ($contact)
        <h2>{{ $contact['name'] }}</h2>
        <p>{{ $contact['phone'] }}</p>
        
    @else
        <p>Contact not found.</p>
    @endif
</x-layout>
