<div>
    <div class="row">
        <div class="col-md-3">
            <input wire:model="searchQuery" type="text" placeholder="Search for ..." class="form-control" />
        </div>
        <div class="offset-md-3 col-md-6 text-right">
            <a href="{{ route('affiliate.create') }}"
               class="btn btn-primary">Add new Affiliate</a>
        </div>
    </div>
    <hr />
    <div class="table-responsive">
    <table class="table ">
    <thead>
    <tr>
        <th>Logo</th>
        <th>Name</th>
        <th>URL</th>
        <th>Aff ID</th>
        <th>Created date</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @forelse($affiliates as $affiliate)
        <tr>
            <td>
                @if ($affiliate->logo)
                    <img src="/storage/{{ $affiliate->logo }}" width="50" />
                @endif
            </td>
            <td>{{ $affiliate->name }}</td>
            <td>{{ $affiliate->url }}</td>
            <td>{{ $affiliate->aff_id }}</td>
            <td>
                <a class="btn btn-sm btn-primary"
                   href="{{ route('affiliate.edit', $affiliate) }}">Edit</a>
                <a onclick="return confirm('Are you sure?') || event.stopImmediatePropagation()"
                   wire:click="deleteProduct('{{ $affiliate->id }}')"
                   class="btn btn-sm btn-danger" href="#">Delete</a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="3">No Affiliate found.</td>
        </tr>
    @endforelse
    </tbody>
    </table>
</div>
    {{ $affiliates->links() }}
</div>
