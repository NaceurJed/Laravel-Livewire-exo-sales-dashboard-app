<?php
/****** CETTE PAGE EST FACTORISEE TOUTE EN BAS ******/
/********
namespace App\Http\Livewire;

use App\Service\Stats;
use Livewire\Component;

class SalesDashboard extends Component
{
    public $newOrders;
    public $salesAmount;
    public $satisfaction;

    //On va écouter les évenements avec l'attribut $listeners
    // protected $listeners = ['fetchStats' => 'refresh']; si l'évenement fetchStats se rpoduit on doit exécute la méthode refresh
    protected $listeners = ['fetchStats']; // si cette événement (définie dans welcome) se produit on va appeler la méthode du même nom (qui est fetchStats)
    
    // On va utiliser la méthode mount() car elle va être appelée aprés l'instanciation de notre composant et c'est un bon endroit pour initialiser nos attribut
    // Avec Livewire, il est recommandé de faire nos initialisations au niveau de la méthode mount() au lieu de les faire au niveau du constructeur
    public function mount()
    {
        //Initialisation des attributs:
        /*
        $this->newOrders = rand(5, 100);
        $this->salesAmount = rand(100, 1000);
        $this->satisfaction = rand(95, 100);
        Voir autre méthode d'initialisation en bas
        */
        
        //Si on a plusieurs attributs à initialiser on peut utiliser la méthode fill
        /*
        $this->fill([
            'newOrders' => rand(5, 100),
            'salesAmount' => rand(100, 1000),
            'satisfaction' => rand(95, 100)
        ]);
        */
     /*******   
        $this->assignStats();
        
    }

    //On a remplacer refresh par fetchStats (pour avoir le même nom que l'événement)
    public function fetchStats()
    {
        $this->assignStats();
    }

    
    public function render()
    {
        return view('livewire.sales-dashboard');
    }

    // On va créer une méthode assignStats() qui va initialiser nos attribut car le bouton refresh et la méthode mount 
    // vont faire la même chose, donc on factorise le code
    private function assignStats()
    {
        //Si je veux que mes valeur proviennent d'un service, qu'on va créer (on l'appel Stats)
        // $this->fill([
        //     'newOrders' => Stats::newOrders(),
        //     'salesAmount' => Stats::salesAmount(),
        //     'satisfaction' => Stats::satisfaction()
        // ]);
        $this->newOrders = Stats::newOrders();
        $this->salesAmount = Stats::salesAmount();
        $this->satisfaction = Stats::satisfaction();
    }

}
*********/


/*********** FACTORISATION DE LA PAGE ***********/
// On va enlever tous les attributs, mount() et fetchStats()


namespace App\Http\Livewire;

use App\Service\Stats;
use Livewire\Component;

class SalesDashboard extends Component
{
    
    
    public function render()
    {
        // on sait que lorsqu'on retourne une vue on peut lui passer des données, docn on a enlever la méthode assignStats() 
        return view('livewire.sales-dashboard',[ //on retourne donc cette vue et on lui passe ces données:
            'newOrders' => Stats::newOrders(),
            'salesAmount' => Stats::salesAmount(),
            'satisfaction' => Stats::satisfaction()
        ]);

        // on a enlever la méthode refresh, donc pour que notre bouton refresh fonctionne on va mettre wire:click="$refresh" dans la balise button
        // pour rafraichir automatiquement, il y a la méthode wire:poll qu'il faut mettre dans la balise racine (voir fichier sales-dashboard.blade.php)
    }
}

