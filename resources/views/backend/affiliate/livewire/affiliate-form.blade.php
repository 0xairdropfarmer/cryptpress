<form method="POST" wire:submit.prevent="save">
    @csrf

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input wire:model="affiliate.name" id="name" type="text"
                   class="form-control @error('affiliate.name') is-invalid @enderror"
                   required autocomplete="name" autofocus>

            @error('affiliate.name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="URL"
               class="col-md-4 col-form-label text-md-right">{{ __('URL') }}</label>

        <div class="col-md-6">
            <textarea wire:model="affiliate.url"
                      class="form-control @error('affiliate.url') is-invalid @enderror"></textarea>

            @error('affiliate.url')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="URL"
               class="col-md-4 col-form-label text-md-right">{{ __('Aff ID') }}</label>

        <div class="col-md-6">
            <textarea wire:model="affiliate.aff_id"
                      class="form-control @error('affiliate.aff_id') is-invalid @enderror"></textarea>

            @error('affiliate.aff_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Logo') }}</label>

        <div class="col-md-6">
            <input wire:model.defer="logo" type="file"
                   class="@error('logo') is-invalid @enderror">

            @error('logo')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Save Affiliate') }}
            </button>
        </div>
    </div>
</form>
