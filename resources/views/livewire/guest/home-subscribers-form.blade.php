<div>
    <h4 class="footer-title">Newsletter <i wire:loading="submitEmail" class="fa fa-spinner fa-spin"></i> </h4>
    <form action="#" wire:submit.prevent="submitEmail">
        <input wire:model.lazy="email" type="text" name="email" placeholder="Enter Your Email">
        @error('email') <span style="color: darkred; font-family: Arial;">{{ $message }}</span><br> @enderror
        <button class="submit"><i class="fa- fa-email"></i></button>
    </form>
</div>
