<x-filament-notifications::notification :notification="$notification">
    @dump($notification->toArray())
{{--    @dump($notification->getSize())--}}

    <span x-on:click="close">
        Close
    </span>
</x-filament-notifications::notification>
