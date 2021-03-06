<?php

namespace App\Http\Controllers;

use App\Forms\CreatePost;
use App\Forms\PostForm;
use App\Mail\ContactMail;
use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Kris\LaravelFormBuilder\FormBuilder;
use Session;

class MainController extends Controller
{
    public function index()
    {
        $data = DB::table('posts')->orderBy('id', 'desc')->take(3)
            ->get();
        return view('welcome', compact('data'));

    }

    public function ActualiteDisplay()
    {
        $data = DB::table('posts')
            ->get();
        return view('Posts', compact('data'));

    }

    public function BureauDisplay()
    {
        return view('Bureau');

    }

    public function VêtementsDisplay()
    {

        return view('Vetements');
    }

    public function ContactDisplay()
    {

        return view('Contact');
    }

    public function InscriptionDisplay()
    {

        return view('Inscription');
    }

    public function DisplayPostItems($id)
    {
        try {

            $data = DB::table('posts')->where('id', '=', $id)
                ->get();
            return view('PostsItems', compact('data'));

        } catch (Exception $e) {
            echo $e->getMessage();
        }


    }

    public function StoreContact()
    {
        $data = request()->validate([
            'fsurname' => 'required',
            'fname' => 'required',
            'mail' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);
        Mail::to('valeriesibioude@hotmail.fr')->send(new ContactMail($data));
        Mail::to('moriceauchristian@orange.fr')->send(new ContactMail($data));
        toastr()->success('Mail envoyé !');

        return redirect('/');
    }

    public function SlalomDisplay()
    {
        return view('Slalom');
    }

    public function ConditionsDisplay()
    {
        return view('Conditions');
    }

    public function KayakPoloDisplay()
    {
        return view('Kayak-Polo');
    }

    public function EcoleDisplay()
    {
        return view('ecoledepagaie');
    }

    public function PagayonsDisplay()
    {
        return view('Pagayons');
    }

    public function ParcoursDisplay()
    {
        return view('Parcours');
    }

    public function DescenteDisplay()
    {
        return view('Descente');
    }

    public function DisplayPost(FormBuilder $formBuilder)
    {

        $Itemform = $formBuilder->create(PostForm::class);
        if (Auth::user() == null || Auth::user()->is_admin != 1) {
            return redirect('login')->withErrors([
                'password' => 'Erreur'
            ]);
        } else {
            return view('CreatePost', compact('Itemform'));
        }
        return view('CreatePost', compact('Itemform'));
    }

    public
    function CreateForm()
    {
        if (Auth::user() == null || Auth::user()->is_admin != 1) {
            return redirect('/');
        } else {
            if (!empty($_POST)) {
                try {
                    request()->validate([
                        'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                    ]);
                    $imageName = time() . '1' . '.' . request()->Image->getClientOriginalExtension();
                    request()->Image->move(public_path('images'), $imageName);

                    $New_Post = new post();

                    $New_Post->Title = $_POST['Nom_du_Post'];
                    $New_Post->Description = $_POST['Description'];
                    $New_Post->Pic_URL = $imageName;
                    $New_Post->save();

                } catch (Exception $e) {
                    echo $e->getMessage();
                }

            } else {
                return redirect('/');
            }
            toastr()->success('Post créé et ajouté ! ');

            return redirect('/');
        }
    }

    public function DeletePost($id)
    {
        if (Auth::user() == null || Auth::user()->is_admin != 1) {

            return redirect('/');
        } else {
            try {
                $Image = DB::table('posts')->where('ID', $id)->select('Pic_URL')->get();

                if (file_exists(public_path('images' . '\\' . $Image[0]->Pic_URL))) {
                    unlink(public_path('images' . '\\' . $Image[0]->Pic_URL));
                }

                DB::table('posts')->where('id', $id)->delete();

            } catch (Exception $e) {
                echo $e->getMessage();
            }

        }
        toastr()->success('Post supprimé avec succès !');

        return redirect('/');
    }

    public
    function EditionPost($id)
    {
        if (Auth::user() == null || Auth::user()->is_admin != 1) {
            return redirect('/');
        } else {
            $data = DB::table('posts')->where('id', $id)->get();
            return view('edit', compact('data'));
        }
    }

    public function UpdatePost(Request $request, $id)
    {
        if (Auth::user() == null || Auth::user()->is_admin != 1) {
            return redirect('/');
        } else {
            if (!empty($_POST)) {
                if ((request()->validate(['Image' => 'image|mimes:jpeg,png,jpg,gif,svg'])) != null) {
                    $image_tab = DB::table('posts')->where('id', $id)->select('Pic_URL')->get();
                    if (file_exists(public_path('images' . '\\' . $image_tab[0]->Pic_URL))) {
                        unlink(public_path('images' . '\\' . $image_tab[0]->Pic_URL));
                    }

                    $imageName = time() . '1' . '.' . request()->Image->getClientOriginalExtension();
                    request()->Image->move(public_path('images'), $imageName);
                    DB::table('posts')->where('id', $id)->update(array(
                        'Pic_URL' => $imageName
                    ));
                }

                DB::table('posts')->where('id', $id)
                    ->update(['Title' => $request->Title, 'Description' => $request->Description]);

            } else {
                return redirect('/');
            }
            toastr()->success('Post mis à jour avec succès !');

            return redirect('/');
        }
    }
}
