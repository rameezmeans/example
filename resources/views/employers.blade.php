<x-layout>
    <x-slot:heading>Job Page</x-slot:heading>
    <x-slot:title>Job Page</x-slot:title>
    @foreach($employers as $employer)
    <a href="/employer/{{$employer->id}}" class="text-blue-500 hover:underline"><p>{{$employer->name}}</p></a>
    @endforeach
</x-layout>