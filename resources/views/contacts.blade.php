{{-- <x-layout>
    <x-slot:heading>
        Contacts Page
    </x-slot:heading>

    <ul>
        @foreach ($contacts as $contact)
            <li>
                <a href="/contacts/{{ $contact['id'] }}">
                    <strong>NAME:</strong> {{ $contact['name'] }} - <strong>ph: </strong>{{ $contact['phone'] }}
                </a>

            </li>
        @endforeach
    </ul>
</x-layout> --}}
<x-layout>
    <x-slot:heading>
        Contacts Page
    </x-slot:heading>

    <ul>
        @foreach ($contacts as $contact)
            <li>
                <a href="/contacts/{{ $contact['id'] }}">
                    <strong>NAME:</strong> {{ $contact['name'] }} - <strong>ph: </strong>{{ $contact['phone'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
