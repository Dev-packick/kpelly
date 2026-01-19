<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commerce;
use App\Models\Categorie;
use App\Models\Publicite;
use Illuminate\Support\Facades\Storage;

class FrontendController extends Controller
{
    /*
|--------------------------------------------------------------------------
| FRONTEND CONTROLLERS
|--------------------------------------------------------------------------
*/

    // VOIR PAGE D'ACCUEIL
    public function home()
    {
        $commerce = Commerce::with('categorie')->get();
        $categories = Categorie::all();
        $publicite = Publicite::all();
        return view('Client.home', compact('commerce', 'categories','publicite'));
    }

    // VOIR PAGE ABOUT
    public function voir_about()
    {
        return view('Client.about');
    }

    // VOIR LA PAGE DES PROJETS
    public function voir_projets()
    {
        $commerce = Commerce::with('categorie')->get();
        $categories = Categorie::all();
        return view('Client.projets', compact('commerce', 'categories'));
    }

    // VOIR LA PAGE DE DETAILS DES PROJETS
    public function voir_details($id)
    {
        // Récupérer le commerce avec sa catégorie
        $commerce = Commerce::with('categorie')->find($id);
        // Récupérer trois autres articles (vous pouvez adapter la requête selon vos besoins)
        $autresCommerce = Commerce::where('id', '!=', $id)->latest()->take(2)->get();

        // Passer les deux variables à la vue
        return view('Client.projetdetails', compact('commerce', 'autresCommerce'));
    }

    // VOIR PAGE MOROKINGCAFE
    public function voir_morokingcafe()
    {
        return view('Client.morokingcafe');
    }
    
    // VOIR PAGE NOTRE FORPELLYCHIPS
    public function voir_chips()
    {
        return view('Client.chips');
    }

    // PAGE CONTACT SANS FORMULAIRE
    public function voir_contact()
    {
        return view('Client.contact');
    }
    // PAGE CONTACT SANS FORMULAIRE
    public function voir_pomafrica()
    {
        return view('Client.pomafrica');
    }
    
}
