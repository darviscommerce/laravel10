<div>
    @if ($send == 1)
        <div class="success-message w-form-done" style="display: block; color: black; ">
            <div>{!! __('ccs.contact-done') !!}</div>
        </div>
    @else
        <form id="wf-form-Sollicitatieformulier" wire:model.defer="wf-form-Sollicitatieformulier"
            data-wire:model.defer="Sollicitatieformulier"
            wire:submit.prevent="store(Object.fromEntries(new FormData($event.target)))">
            <div class="form-field_double">
                <div class="field-parent margin-form">
                    <label for="firstname" class="field-label">Voornaam</label>
                    <input type="text" class="input-field w-input" wire:model.defer="firstname" id="firstname">
                    @error('firstname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="field-parent margin-form">
                    <label for="insertion" class="field-label">Tussenv.</label>
                    <input type="text" class="input-field small w-input" wire:model.defer="insertion" id="insertion">
                    @error('insertion')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="field-parent">
                    <label for="lastname" class="field-label">Achternaam</label>
                    <input type="text" class="input-field w-input" wire:model.defer="lastname" id="lastname">
                    @error('lastname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-field_double">
                <div class="field-parent margin-form">
                    <label for="email" class="field-label">E-mail adres</label>
                    <input type="email" class="input-field w-input" wire:model.defer="email" id="email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="field-parent">
                    <label for="phone" class="field-label">Telefoonnummer
                    </label>
                    <input type="text" class="input-field w-input" wire:model.defer="phone" id="phone">
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-field_double">
                <div class="field-parent margin-form">
                    <label for="zipcode" class="field-label">Postcode</label>
                    <input type="text" class="input-field w-input" wire:model.defer="zipcode" id="zipcode">
                    @error('zipcode')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="field-parent">
                    <label for="city" class="field-label">Plaats</label>
                    <input type="text" class="input-field w-input" wire:model.defer="city" id="city">
                    @error('city')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-field_double">
                <div class="field-parent margin-form">
                    <label for="address" class="field-label">Straatnaam</label>
                    <input type="text" class="input-field w-input" wire:model.defer="address" id="address">
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="field-parent">
                    <label for="house_nr" class="field-label">Huisnummer</label>
                    <input type="text" class="input-field small w-input" wire:model.defer="house_nr" id="house_nr">
                    @error('house_nr')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-field_single">
                <label for="comments" class="field-label">Motivatie</label>
                <textarea id="comments" wire:model.defer="comments" class="input-field large w-input"></textarea>
                @error('comments')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form_success-message w-form-done">
                <p>{!! __('manta_vacancy.mail_received') !!}</p>
            </div>
            <div class="w-form-fail">{!! __('manta_vacancy.form_oops') !!}</div>
            <input value="{!! __('manta_vacancy.send') !!}" class="button w-button" type="submit"
                wire:loading.class="button w-button" wire:loading.attr="disabled" />
        </form>
    @endif
</div>
