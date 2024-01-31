<div>
    @can('create', \App\Models\Role::class)
        <div class="mx-3 d-flex justify-content-end">
            <a href="{{ route('add-product') }}" type="button" class="btn btn-outline-primary" wire:navigate>
                <i class="bx bx-plus-circle me-0"></i>
            </a>
        </div>
        <hr>
    @endcan
    @session('valid')
    <div class="alert alert-success border-0 bg-success alert-dismissible fade show">
        <div class="text-white"><i class="bx bxs-check-circle"></i> {{ session('valid') }}</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endsession
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
            <thead>
            <tr>
                <th>S.no</th>
                <th>Product name</th>
                <th>Created by</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            @foreach($data as $key => $value)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->created_user_name }}</td>
                    <td>
                        @if($value->status == 1)
                            <button type="button" class="btn btn-outline-success btn-sm"
                                    wire:click="changeStatus('{{ $value->id }}')">
                                <i class="bx bx-check-circle me-0"></i>
                            </button>
                        @elseif($value->status == 0)
                            <button type="button" class="btn btn-outline-danger btn-sm"
                                    wire:click="changeStatus('{{ $value->id }}')">
                                <i class="bx bx-x-circle me-0"></i>
                            </button>
                        @endif
                    </td>
                    <td>
                        <button type="button" class="btn btn-outline-primary btn-sm"
                                wire:click="editRedirect('{{ $value->id }}')">
                            <i class="bx bx-pencil me-0"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            <tbody>
            </tbody>
        </table>
    </div>
</div>
