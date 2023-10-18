<div>
    <div class="container">
        <div class="card">
            <div class="card-header">{{ __('Post List') }}</div>
            <div class="card-body">
                <div class="alert @if (!empty(session('alert'))) alert-{{ session('alert') }} @else d-none @endif ">
                    @if (!empty(session('alert')))
                        {{ session('msg') }}
                    @endif
                </div>
                <div class="mb-3">
                    <input type="search" wire:model.live="keyword" placeholder="Cari ajah" class="form-control">
                </div>
                <table class="table table-hovered">
                    <thead>
                        <th>{{ __('ID') }}</th>
                        <th>{{ __('Title') }}</th>
                        <th>{{ __('Action') }}</th>
                    </thead>
                    <tbody>
                        @if (!empty($posts))
                            @foreach ($posts as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>
                                        <a href="{{ url('/post/edit/' . $item->id) }}" class="btn btn-primary">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $item->id }}">
                                            <i class="bi bi-trash"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                            {{ __('Are You sure to delete this ') }}<b>{{ $item->title }}</b>
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" wire:click="delete({{ $item->id }})"
                                                            class="btn btn-danger"
                                                            data-bs-dismiss="modal">Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>
