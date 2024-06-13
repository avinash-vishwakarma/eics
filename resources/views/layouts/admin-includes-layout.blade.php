@props(["jsSlot"=>null,"cssSlot"=>null])

<x-layouts.admin-layout  :cssSlot="$cssSlot" :jsSlot="$jsSlot">
    <x-admin.includes.header-footer>
    {{  $slot }}
    </x-admin.includes.header-footer>
</x-layouts.admin-layout>