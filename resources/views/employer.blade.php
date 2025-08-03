<x-layout>
    <x-slot:heading>Employer Page</x-slot:heading>
    <x-slot:title>Employer Page</x-slot:title>
    <h2 class="text-2xl font-bold">{{$employer->name}}</h2>
    @foreach($employer->jobs as $job)
        <a href="/jobs/{{$job->id}}" class="text-blue-500 hover:underline">{{$job->title}}</a>
    @endforeach
</x-layout>