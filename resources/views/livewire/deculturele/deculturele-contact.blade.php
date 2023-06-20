<div class="container">
    <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Naam</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="name" wire:model="name">
            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control form-control-sm" id="email" wire:model="email">
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="phone" class="col-sm-2 col-form-label">Telefoon</label>
        <div class="col-sm-10">
            <input type="text" class="form-control form-control-sm" id="phone" wire:model="phone">
            @error('phone')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mb-3 row">
        <label for="comments" class="col-sm-2 col-form-label">Opmerkingen</label>
        <div class="col-sm-10">
            <textarea class="form-control form-control-sm" id="comments" wire:model="comments"></textarea>
            @error('comments')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="mt-3 mb-3 row">
        <div class="col-sm-12">
            <button class="btn btn-sm btn-primary">Lid worden</button>
        </div>
    </div>

</div>
