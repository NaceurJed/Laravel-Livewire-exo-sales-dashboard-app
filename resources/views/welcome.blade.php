<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    @livewireStyles
    <title>License App</title>
</head>


<body>
    <div class="position-relative" style="height: 200px">
        <div class="text-center position-absolute top-100 start-50 translate-middle fw-bolder">
            <h1 class="text-primary ">Sales Dashboard</h1>

            {{-- Cette commande va aller recupérer la view light.blade.php et l'inclure ici --}}
            @livewire('sales-dashboard')
            {{-- <livewire:sales-dashboard></livewire:sales-dashboard> c'est une alternatire de @livewire('sales-dashboard') --}}
        </div>
    </div>
    @livewireScripts
    {{-- On va créer l'évenement fetchStats qui se produit toute les 3 secondes --}}
    {{-- <script>
        //  livewire nous donne accées à l'objet livewire qui permet d'emmetre des événement et on pourra écouter ces évenement
        setInterval(function() {
            window.livewire.emit('fetchStats'); //ici on déclenche un événement fetchStats
        }, 3000);
    </script> On n'a plus besoin de ce script lorsqu'on utilise wire:pull et $refresh --}}
</body>

</html>
