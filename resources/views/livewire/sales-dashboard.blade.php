{{-- il faut un seul noeud racine, il faut que le tout soit dans une même balise --}}
<div wire:poll.2s>
    {{-- Pour rafraichir toute les seconde on ajoute wire:poll.1s dans la balise racine, ça va rafraichir tout ce contenu toute les secondes et render sera appelé de nouveau --}}
    <div class="row border border-dark rounded">
        <div class="col-md-4 border-dark border-end bg-white text-success py-5 rounded-left">
            <strong class="h1 font-weight-bold">{{ $newOrders }}</strong>
            <h3 class="text-secondary">New Orders</h3>
        </div>
        <div class="col-md-4 border-dark border-end bg-white text-warning py-5">
            <strong class="h1 font-weight-bold">{{ $salesAmount }}</strong>
            <h3 class="text-secondary">Sales Amount</h3>
        </div>
        <div class="col-md-4 bg-white text-primary py-5 rounded-right rounded-bottom">
            <strong class="h1 font-weight-bold">{{ $satisfaction }}%</strong>
            <h3 class="text-secondary">Satisfaction</h3>
        </div>
    </div>
    {{-- ************************ Barres de progression ************************* --}}
    <div class="progress mt-3">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar"
            aria-valuenow="{{ $newOrders }}" aria-valuemin="5" aria-valuemax="100"
            style="width: {{ $newOrders }}%"></div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar"
            aria-valuenow="{{ $salesAmount }}" aria-valuemin="100" aria-valuemax="1000"
            style="width: {{ ($salesAmount * 100) / 1000 }}%"></div>
    </div>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
            aria-valuenow="{{ $satisfaction }}" aria-valuemin="90" aria-valuemax="100"
            style="width: {{ $satisfaction }}%"></div>
    </div>
    {{-- ************************************************************************ --}}


    {{-- On va créer un bouton qui va rafréchir la pages sans la recharger --}}
    {{-- <button class="btn btn-primary btn-lg mt-3" wire:click="fetchStats">↻ Refresh</button> --}}
    <button class="btn btn-primary btn-lg mt-3" wire:click="$refresh">↻ Refresh</button>
    {{-- so on veut utiliser la page factorisée, on met wire:click="$refresh"  et on peut enlever le <script> sur la page welcome --}}
</div>
