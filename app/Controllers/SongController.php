<?php

namespace App\Controllers;

use App\Models\Song;


class SongController extends BaseController
{
    protected $song;
 
    function __construct()
    {
        $this->song = new Song();
    }

    public function index()
    {
        $data['songs'] = $this->song->findAll();

        return view('song', $data);
    }

    public function create()
    {
        $this->song->insert([
            'title' => $this->request->getPost('title'),
            'duration' => $this->request->getPost('duration'),
            'singer' => $this->request->getPost('singer'),
            'label' => $this->request->getPost('label'),
            'releaseDate' => $this->request->getPost('releaseDate'),
            'album' => $this->request->getPost('album'),
        ]);

		return redirect('song')->with('success', 'Data Added Successfully');
    }
}
