@props(['route', 'id', 'message'])

<div class="modal fade" id="{{ 'confirm-deletion-modal-'.$id }}" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">{{ __('common.confirm_deletion') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <span>{{ $message }}</span>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    {{ __('common.cancel') }}
                </button>

                <form method="post" action="{{ route($route, ['id' => $id]) }}">
                    @csrf
                    @method('delete')

                    <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">
                        {{ __('common.delete') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
