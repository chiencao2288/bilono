<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<x-layout.main.head>
    <x-slot name="stylesheet">{!! !empty($stylesheet) ? $stylesheet : null !!}</x-slot>
    <x-slot name="javascript">{!! !empty($javascript) ? $javascript : null !!}</x-slot>
    <x-slot name="title">{!! !empty($title->attributes->has('title')) ? $title->attributes->get('title') : $title !!}</x-slot>
</x-layout.main.head>

<x-layout.main.body>

</x-layout.main.body>

</html>
