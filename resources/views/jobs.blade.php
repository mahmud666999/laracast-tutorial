<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    @foreach($jobs as $job)
        <li><strong>{{$job['title']}}:</strong>
            Pays {{$job['salary']}}
        </li>

    @endforeach
</x-layout>
