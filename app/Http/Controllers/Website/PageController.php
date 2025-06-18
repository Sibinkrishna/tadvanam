<?php

namespace App\Http\Controllers\Website;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function programsByCategory($id)
    {
        $today = now()->toDateString();

        $programs = DB::table('programs')
            ->where('program_cata_id', $id)
            ->orderBy('date', 'desc')
            ->get();

        $upcomingPrograms = $programs->where('date', '>=', $today);
        $pastPrograms = $programs->where('date', '<', $today);

        $category = DB::table('programs_cata')->where('id', $id)->first();
        $categoryName = $category ? $category->name : null;

        return view('Website.events.programs', compact('upcomingPrograms', 'pastPrograms', 'categoryName'));
    }

    public function home(){
        $programs = Program::paginate(2);
        $today = now()->toDateString();
        $upcomingPrograms = $programs->where('date', '>=', $today);
        return view('Website.homepage',compact('programs','upcomingPrograms'));
    }
    public function tadvanam(){
        return view('Website.tadvanam.tadvanam');
    }
    public function about(){
        return view('Website.tadvanam-about.about');
    }
    public function founder(){
        return view('Website.tadvanam-about.our-founder');
    }
    public function governingBody(){
        $governing_body = DB::table('governing_bodies')->get();
        return view('Website.tadvanam-about.governing-body', Compact('governing_body'));
    }
    public function gallery(){
        $albums = DB::table('albums')->get();
        $albumImages = DB::table('album_images')->get()->groupBy('album_id');

        foreach ($albums as $album) {
            $album->images = $albumImages->get($album->id, collect());
        }

        return view('Website.gallery.gallery', compact('albums'));
    }
    public function contact(){
        return view('Website.contact.contact');
    }
    public function vivekananda(){
        $program_vivekanandas = Program::where('program_cata_id', 4)->get();
        return view('Website.vivekananda.vivekananda-samajam', compact('program_vivekanandas' ));
    }
    public function programs(){
        $programs = Program::all();
        $today = now()->toDateString();
        $upcomingPrograms = $programs->where('date', '>=', $today);
        $pastPrograms = $programs->where('date', '<', $today);
        // $programs = DB::table('programs')->where('program_cata_id',$id)->get();
        return view('Website.events.programs', compact('programs', 'upcomingPrograms', 'pastPrograms'));
    }
    public function programsDetail($slug){
        $program = Program::with('programgalleries')->where('slug', $slug)->firstOrFail();
        $upcomingPrograms = Program::where('date', '>=', now())
            ->orderBy('date', 'asc')
            ->get();
        return view('Website.events.event-detail', compact('program','upcomingPrograms'));
    }
    public function tadvanopasana(){
        return view('Website.tadvanam.tadvanopasana');
    }

}
