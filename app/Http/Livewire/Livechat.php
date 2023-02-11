<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Livechat extends Component
{
    public $user = [
        'name' => 'Musa A. S.',
        'title' => 'Lead Developer',
        'status' => false
    ];

    public $chatExample = [
        ["Musa","Kerem","Selam bro"],
        ["Musa","Musa","Selam bro, nasılsın?"],
        ["Musa","Kerem","Yaşamaya çalışıyoruz bro :D. Sen nasılsın?"],
        ["Musa","Musa","En iyisi bro. Yaşamaya çalışıyoruz."],
        ["Musa","Musa","Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."],
        ["Musa","Musa","Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."],
        ["Musa","Musa","Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."],
    ];

    public $contacts = [
        "Kerem Çıkar",
        "Tony Stark",
        "Peter Parker"
    ];
    
    public function render()
    {
        return view('livewire.livechat');
    }
}