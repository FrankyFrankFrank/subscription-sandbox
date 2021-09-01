<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Subscription') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <dl>
                        <dd>Product:</dd>
                        <dt>{{ $subscription->name }}</dt>
                        <dd>Status:</dd>
                        <dt>{{ $subscription->paddle_status }}</dt>
                        @if($subscription->trial_ends_at)
                            <dd>Trial Ending At:</dd>
                            <dt>{{ $subscription->trial_ends_at }}</dt>
                        @endif
                        @if($subscription->paused_from)
                            <dd>Paused On:</dd>
                            <dt>{{ $subscription->paused_from }}</dt>
                        @endif
                        @if($subscription->ends_at)
                            <dd>Ends At:</dd>
                            <dt>{{ $subscription->ends_at }}</dt>
                        @endif
                        <dd>Created On:</dd>
                        <dt>{{ $subscription->created_at }}</dt>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
