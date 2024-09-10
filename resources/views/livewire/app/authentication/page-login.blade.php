<div class="page authentication login">

    <div class="authentication-layout">
        <div class="card">
            <div class="card-header">
                <span class="card-title">Login</span>
            </div>
            <form class="card-body" wire:submit.prevent="login">

                @if($errors->has('email'))
                    E-Mail-Error: {{ $errors->get('email')[0] }}
                @endif

                @if($errors->has('password'))
                    Passwort-Error: {{ $errors->get('password')[0] }}
                @endif

                <input wire:model="email" type="email" class="form-control" placeholder="E-Mail-Adresse..." />
                <input wire:model="password" type="password" class="form-control" placeholder="Passwort..." />

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

</div>
