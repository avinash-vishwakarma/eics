<x-layouts.root-layout>

    @slot('page_description')
    <meta name="description" content="EICS Group of Companies provides integrated design and engineering consultancy services for Iron & Steel plants in India. Founded by Mr. S. N. Swamy in 1997, EICS specializes in project planning, design, and detailed engineering from concept to commissioning for projects like Sponge Iron plants, Steel Melting Shops, Power Plants, Blast Furnaces, Rolling Mills, and more. With a team of 200+ professionals, EICS leverages state-of-the-art technologies and the latest trends to deliver customized solutions for every project.">
    @endslot

    <x-includes.header/>

    <x-home.hero-section/>

    <x-home.about-section/>
    <x-home.services-section :services="$services"/>
    <x-home.functional-setup/>
    <x-home.projects :projects="$projects"/>
    <x-home.brand-images/>
    <x-includes.footer/>

    <x-slot name="jsSlot">
        <script src="{{ asset("js/home.js") }}"></script>
    </x-slot>

</x-layouts.root-layout>