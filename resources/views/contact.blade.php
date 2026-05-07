<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:content>
        <h1 class="main-title">Contact Me</h1>
        <p>This is the contact page.</p>
        <p>Name: {{ $name }}</p>
        <p>Email: <a class="responsive-link light-mode-link" href="mailto:{{ $email }}">{{ $email }}</a></p>
        <p>Social Media: <a class="responsive-link light-mode-link" href="{{ $socialMedia }}" target="_blank">{{ $socialMedia }}</a></p>
    </x-slot:content>
</x-layout>

{{-- <main class="main">
    <h1 class="main-title">Contact Me</h1>
    <p>This is the contact page.</p>
    <p>Name: {{ $name }}</p>
    <p>Email: <a class="responsive-link light-mode-link" href="mailto:{{ $email }}">{{ $email }}</a></p>
    <p>Social Media: <a class="responsive-link light-mode-link" href="{{ $socialMedia }}" target="_blank">{{ $socialMedia }}</a></p>
</main> --}}
