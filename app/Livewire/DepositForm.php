<?php

namespace App\Livewire;

use App\Models\Deposit;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;


class DepositForm extends Component
{
    use WithFileUploads;

    public $amount;
    public $payment_method_id;
    public $wallets;
    public $selectedWallet;

//    #[Rule('required|image|mimes:jpeg,png,jpg,gif,svg|max:3048')] // 1MB Max
    public $reference;

    public function mount()
    {
        $this->wallets = PaymentMethod::all();
    }

    public function render()
    {
        return view('livewire.deposit-form');
    }

    public function save()
    {

        $this->validate([
            'reference' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3048',
            'amount' => 'required|numeric',
            'payment_method_id' => 'required',
        ]);

        Deposit::create([
            'amount' => $this->amount,
            'payment_method_id' => $this->payment_method_id,
            'reference' => $this->reference->storeAs('files'),
            'user_id' => Auth::id(),
        ]);

        // Optionally, you can add a success message or redirect here
        session()->flash('success', 'Deposit created successfully!');

    }

    public function close()
    {
        $this->reset();
    }

}
