<x-app-layout>
    <x-slot name="header">{{ __('users.title') }}</x-slot>

    <div class="d-flex flex-row-reverse mb-2">
        <x-link route="dashboard" variant="primary">
            {{ __('users.create') }}
        </x-link>
    </div>

    <div>
        @if ($users->count())
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>@sortablelink('id', __('common.id'))</th>
                            <th>@sortablelink('name', __('common.name'))</th>
                            <th>@sortablelink('email', __('common.email'))</th>
                            <th>@sortablelink('created_at', __('common.created_at'))</th>
                            <th>@sortablelink('updated_at', __('common.updated_at'))</th>
                            <th>{{ __('common.actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            @if ($user->id !== auth()->user()->id)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                    <td class="actions">
                                        <x-link route="dashboard" variant="secondary">
                                            <i class="bi bi-pencil-square"></i>
                                        </x-link>

                                        <x-link route="dashboard" variant="danger">
                                            <i class="bi bi-trash"></i>
                                        </x-link>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $users->appends(request()->except('page'))->links() }}
        @else
            <x-alert :message="__('common.empty')" variant="info"/>
        @endif
    </div>
</x-app-layout>
