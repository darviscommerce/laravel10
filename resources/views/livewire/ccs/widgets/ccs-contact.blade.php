<div>
    @if ($send == 1)
        <div class="success-message w-form-done" style="display: block; color: black; ">
            <div>{!! __('ccs.contact-done') !!}</div>
        </div>
    @else
        <form wire:submit.prevent="store(Object.fromEntries(new FormData($event.target)))" id="wf-form-Contact-formulier"
            class="contact-form">
            <div class="field-parent">
                <label for="company" class="field-label">{!! __('ccs.company') !!}</label>
                <input type="text" class="input-field w-input" wire:model="company" placeholder="Uw bedrijfsnaam"
                    id="company">
                @error('company')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="field-parent">
                <label for="firstname" class="field-label">{!! __('ccs.name') !!}</label>
                <input type="text" class="input-field w-input" wire:model="firstname" placeholder="Uw naam"
                    id="firstname">
                @error('firstname')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="field-parent">
                <label for="email" class="field-label">{!! __('ccs.email') !!}</label>
                <input type="email" class="input-field w-input" wire:model="email" placeholder="Uw mailadres"
                    id="email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="field-parent">
                <label for="internal_contact" class="field-label">{!! __('ccs.internal_contact') !!}</label>
                <input type="text" class="input-field w-input" wire:model="internal_contact"
                    placeholder="Uw contactpersoon" id="internal_contact">
                @error('internal_contact')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="field-parent">
                <label for="phone" class="field-label">{!! __('ccs.phone') !!}</label>
                <input type="text" class="input-field w-input" wire:model="phone" placeholder="Uw telefoonnummer"
                    id="phone">
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="field-parent">
                <label for="subject" class="field-label">{!! __('ccs.subject') !!}</label>
                <input type="text" class="input-field w-input" wire:model="subject" placeholder="Onderwerp"
                    id="subject">
                @error('subject')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div id="w-node-_7d4716a5-7536-4852-0c67-d79ef76bd458-db41ac64" class="field-parent">
                <label for="comments" class="field-label">{!! __('ccs.comments') !!}</label>
                <textarea id="comments" wire:model="comments" placeholder="Schrijf hier u bericht" class="input-field large w-input"></textarea>
                @error('comments')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <input class="button w-button" type="submit" value="{!! __('ccs.send-message') !!}"
                wire:loading.class="button w-button" wire:loading.attr="disabled" />
        </form>
    @endif
</div>
