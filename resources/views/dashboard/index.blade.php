<x-dashboard-layout>
    <div class="mb-6">
        <x-layout.page-header
            :title="__('ERP Dashboard')"
            :description="__('Overview of your workspace, access level, and account status.')"
        />
    </div>

    <div class="mb-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
        @foreach ($stats as $stat)
            <x-ui.card>
                <p class="text-sm font-medium text-slate-500">{{ $stat['label'] }}</p>
                <p class="mt-2 text-xl font-semibold text-slate-900">{{ $stat['value'] }}</p>
            </x-ui.card>
        @endforeach
    </div>

    <x-ui.card :title="__('Getting started')">
        <p class="text-sm text-slate-600">
            {{ __('Welcome to the ERP system. Use this dashboard as your home base for daily operations. Modules such as inventory, sales, purchasing, and accounting can be connected here as your implementation grows.') }}
        </p>

        @if (auth()->user()->isAdmin())
            <div class="mt-4">
                <a
                    href="{{ route('admin.users.index') }}"
                    class="inline-flex items-center rounded-lg bg-indigo-600 px-4 py-2 text-sm font-medium text-white transition hover:bg-indigo-700"
                >
                    {{ __('Manage users') }}
                </a>
            </div>
        @endif
    </x-ui.card>
</x-dashboard-layout>
