<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <a href="/jobs" class="text-green-500 hover:underline">Go back to jobs</a>
    <div>
        <h1 class="font-bold text-sky-700">{{ $job['title'] }}</h1>
        <p>This job pays {{ $job['salary'] }}</p>
    </div>

</x-layout>
