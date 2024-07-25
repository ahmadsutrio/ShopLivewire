
<div class="container mt-5">
   @if ($visibleFormCreate)
        @livewire('product.create')
   @endif
    <div class="card mb-3">
        <div class="card-header">
            Product
            <button class="btn btn-sm btn-primary ms-2" wire:click="$toggle('visibleFormCreate')">Create</button>
        </div>
    </div>
    <div class="row">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="col">
            <select name="" wire:model.live='paginate' id="" class="form-control form-control-sm w-auto">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select>
        </div>
        <div class="col">
            <input type="search" name="" wire:model.live='search' id="" class="form-control form-control-sm" placeholder="Input Pencarian">
        </div>
    </div>

    <table class="table ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration  }}</th>
                    <td>{{ $item->title }}</td>
                    <td>{{ number_format($item->price,2,",",".") }}</td>
                    <td>@mdo</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $data->links('vendor.pagination.bootstrap-5') }}
</div>
