<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:content>
        <h1 class="main-title">About Me</h1>
        <p>This is the about page.</p>
        <p>Name: {{ $name }}</p>
        <p>Email: {{ $email }}</p>
    </x-slot:content>
</x-layout>


{{-- <main class="main">
        <h1 class="main-title">About Me</h1>
        <p>This is the about page.</p>
        <p>Name: {{ $name }}</p>
        <p>Email: {{ $email }}</p>
    </main> --}}
