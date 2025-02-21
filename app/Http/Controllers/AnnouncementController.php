<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Models\Comment;


class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('announcements.index' , [
            'annonces' => Announcement::paginate(8)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

     return view('announcements.create');
   

    }

    /**
     * Store a newly created resource in storage.
     */
   

     public function store(Request $request)
     
     {
        
         $data = $request->validate([
             'titre' => 'required|string|max:255',
             'description' => 'required|string',
             'lieu' => 'required|string',
             'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
         ]);

         $data['user_id'] = Auth::id();

     
         if ($request->hasFile('image')) {
             $path = $request->file('image')->store('announcements', 'public');
             $data['image'] = $path;
         }
     
         Announcement::create($data);
     
         return redirect()->route('announcements.index')->with('success', 'Annonce publiée avec succès');
     }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $annonce = Announcement::findOrFail($id);
        $comments = Comment::where('announcement_id', $id)->with('user')->latest()->get();
    
        return view('announcements.show', compact('annonce', 'comments'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
