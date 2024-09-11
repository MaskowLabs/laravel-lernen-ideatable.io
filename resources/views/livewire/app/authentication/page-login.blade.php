<div class="page authentication login">

    <div class="authentication-layout">
        <div class="card">
            <div class="card-header">
                <span class="card-title">Login</span>
            </div>
            <form class="card-body" wire:submit.prevent="login">

                @if(session()->has("register_success"))
                    Nachricht: {{ session("register_success") }}
                @endif

                @if($errors->has('email'))
                    E-Mail-Error: {{ $errors->get('email')[0] }}
                @endif

                @if($errors->has('password'))
                    Passwort-Error: {{ $errors->get('password')[0] }}
                @endif


                @auth
                    <p>Du bist bereits eingeloggt.</p>
                    <button type="button" class="btn btn-white" wire:click="logout">Logout</button>
                @else
                    <input wire:model="email" type="email" class="form-control" placeholder="E-Mail-Adresse..." />
                    <input wire:model="password" type="password" class="form-control" placeholder="Passwort..." />

                    <button type="submit" class="btn btn-primary">Login</button>
                @endif
            </form>
        </div>
    </div>

</div>
