<x-app-layout>
    <x-slot name="header">{{ __('users.title') }}</x-slot>

    @if (session('success'))
        <x-alert :message="session('success')" variant="success" :dismissible="true"/>
    @elseif (session('error'))
        <x-alert :message="session('error')" variant="danger" :dismissible="true"/>
    @endif

    <div class="d-flex flex-row-reverse mb-2">
        <a href="{{ route('users.create') }}" class="btn btn-primary">{{ __('users.create_user') }}</a>
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
                            @if ($user->id !== Auth::user()->id)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at }}</td>
                                    <td>{{ $user->updated_at }}</td>
                                    <td class="actions">
                                        <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>

                                        <x-button
                                            type="button"
                                            variant="danger"
                                            data-bs-toggle="modal"
                                            data-bs-target="{{ '#confirm_deletion_modal_'.$user->id }}"
                                        >
                                            <i class="bi bi-trash"></i>
                                        </x-button>

                                        <x-confirm-deletion-modal
                                            route="users.destroy"
                                            :id="$user->id"
                                            :message="__('users.confirm_delete_user')"
                                        />
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
