<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
<div class="space-y-4">
    @foreach($jobs as $job)

        <article >
            <a href="/jobs/{{$job['id']}}" class="block px-4 py-6 border border-b-gray-200 rounded-lg">
                <div class="font-bold text-blue-500">{{$job->employer->name}}</div>
              <div>
                  <strong>{{$job['title']}}:</strong> Pays {{$job['salary']}} per years.
              </div>
            </a>
        </article>

    @endforeach
    <div>
        {{$jobs->links()}}
    </div>
</div>
</x-layout>
