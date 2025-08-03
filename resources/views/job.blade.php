<x-layout>
    <x-slot:heading>Job Page</x-slot:heading>
    <x-slot:title>Job Page</x-slot:title>
    <h2 class="text-2xl font-bold">{{$job['title']}}</h2>
    <p>This job pays {{$job['salary']}} per year.</p>
    <a href="/employer/{{$job->employer->id}}" class="text-blue-500 hover:underline">Employer: {{$job->employer->name}}</a>
</x-layout>