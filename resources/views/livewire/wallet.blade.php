

<form action="#" class="buysell-form">
    <div class="buysell-field form-group">
        <div class="form-label-group">
            <label class="form-label" for="buysell-amount">Select Wallet</label>
        </div>
        <div class="form-control-group">


            <select wire:model.live="selectedWallet"  name="payment_method_id" id="paymentMethodSelect" class="form-control form-control-lg form-control-number">
                <option selected >choose wallet</option>
                @foreach($wallets as $item)
                    <option value="{{ $item->value }}">{{ $item->name }}</option>
                @endforeach
            </select>

        </div>

    </div><!-- .buysell-field -->


@if($selectedWallet)
    <div class="buysell-field form-group" >

        <div class="form-label-group">
            <label class="form-label">Scan to Copy Wallet</label>
        </div>

        <div class="nk-refwg-url">
            <div class="form-control-wrap">
                <div class="form-clip clipboard-init" data-clipboard-target="#refUrl" data-success="Copied" data-text="Copy Link"><em class="clipboard-icon icon ni ni-copy"></em> <span class="clipboard-text">Copy Address</span></div>
                <div class="form-icon">
                    <em class="icon ni ni-link-alt"></em>
                </div>
                <input type="text" class="form-control copy-text" id="refUrl" value="{{ $selectedWallet }}">
            </div>
        </div>


    </div><!-- .buysell-field -->
    <div class="buysell-field form-action">
        <a class="btn btn-lg btn-block btn-primary" data-bs-toggle="modal" href="#buy-coin">Confirm Transaction</a>
    </div><!-- .buysell-field -->
    @endif

</form><!-- .buysell-form -->
