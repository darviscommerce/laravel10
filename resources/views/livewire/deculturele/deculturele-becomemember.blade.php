<div class="container">
    @if ($stored)
        <div class="alert alert-info" role="alert">
            Bedankt voor je lidmaatschap!<br>
            Je ontvangt een kopie in jouw mailbox
        </div>
    @else
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Naam</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="name" wire:model.defer="name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="address" class="col-sm-2 col-form-label">Adres</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="address" wire:model.defer="address">
                @error('address')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="zipcode" class="col-sm-2 col-form-label">Postcode</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" id="zipcode" wire:model.defer="zipcode">
                @error('zipcode')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <label for="city" class="col-sm-2 col-form-label">Woonplaats</label>
            <div class="col-sm-4">
                <input type="text" class="form-control form-control-sm" id="city" wire:model.defer="city">
                @error('city')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control form-control-sm" id="email" wire:model.defer="email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="mb-3 row">
            <label for="iban" class="col-sm-2 col-form-label">Rekeningnummer (IBAN)</label>
            <div class="col-sm-10">
                <input type="text" class="form-control form-control-sm" id="iban" wire:model.defer="iban">
                @error('iban')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="confirm" id="confirm" wire:model.defer="confirm">
            <label class="form-check-label" for="confirm">
                Ik ga akkoord met de verwerking van persoonsgegevens door de vereniging zoals uiteengezet in de
                privacy-verklaring/ A.V.G.
            </label>
            @error('confirm')
                <br><span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-3 mb-3 row">
            <div class="col-sm-12">
                <button class="btn btn-sm btn-primary" wire:click="store" wire:target="store"
                    wire:loading.attr="disabled" wire:loading.class="btn-secondary">Lid worden</button>
            </div>
        </div>
    @endif
</div>
