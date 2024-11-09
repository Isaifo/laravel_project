
<php>
<x-layout>
    <x-slot:heading>
        Jobs Page List
    </x-slot:heading>

<div class="space-y-4">

@foreach ( $jobs as $job  )


        <a href="/jobs/{{ $job ['id']}}" class="block px-4 py-6 border-gray-200 rounded-lg">

          <div class="font-bold text-blue-500 text-sm">{{$job->employer->name}}</div>

            <div><strong>{{$job['title']}}</strong>, Pays: {{$job['salary']}}</div>
        </a>


@endforeach

    </div>
</x-layout>
</php>
