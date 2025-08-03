<x-layout>
  <x-slot:heading>Jobs Page </x-slot:heading>
  <x-slot:title>Jobs Page </x-slot:title>
  <ul>
    @foreach($jobs as $job)
          <a href="/jobs/{{$job->id}}" class="text-blue-500 hover:underline">
            <li><strong>{{ $job->title }}</strong>: Pays {{$job->salary}} per year.</li>
          </a>
    @endforeach
  </ul>
</x-layout>