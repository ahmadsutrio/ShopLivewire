<div class="row justify-content-center mb-5">
    <div class="card">
        <div class="card-body">
            <form action="" wire:submit.prevent="store" enctype="multipart/form-data" method="post" class="">
                <div class="form-group mt-3 ">
                    <div class="form-row row">
                        <div class="col">
                            <input type="text" name="" wire:model='title' id=""
                                class="form-control @error('title') is-invalid @enderror" placeholder="title">
                            @error('title')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="number" name="" wire:model='price' id=""
                                class="form-control @error('price') is-invalid @enderror" placeholder="price">
                            @error('price')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="" wire:model='description' id=""
                                class="form-control @error('description') is-invalid @enderror"
                                placeholder="Description">
                            @error('description')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="form-row">
                        <div class="col">
                            <label for="image">Image</label>
                            <input type="file" name="" class="form-control-file" id="image">
                        </div>
                    </div>
                </div>

                <div class="btn-group mt-3">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    <button type="button" class="btn btn-secondary btn-sm"
                        wire:click="$dispatch('closeFormCreate')">batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
