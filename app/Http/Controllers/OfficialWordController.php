<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OfficialWord;
use App\Http\Controllers\Response;

class OfficialWordController extends Controller
{
    public function addOfficialWord(){
        
        request()->validate([
            'pdf' => 'mimes:pdf|max:50048',
            'audio' => 'mimes:mp3|max:50048',
            'video' => 'mimes:mp4|max:50048',
            'speaker' => 'required',
            'title' => 'required',
            'category' => 'required',
        ]);

        if(request('pdf') == null && request('audio') == null && request('video') == null){
            OfficialWord::Create([
                'speaker'=>request('speaker'),
                'title'=>request('title'),
                'category'=>request('category'),
            ]);
    
            session()->flash('uploaded', 'Official Word uploaded successfulyy!!');
            return redirect('/all_official_words');
        }elseif(request('pdf') == null){

            $audio = time().'.'.request('audio')->extension();  
            $video = time().'.'.request('video')->extension();  

            request('audio')->move(public_path('official_words'), $audio);
            request('video')->move(public_path('official_words'), $video);

            $audio_path = 'official_words/'.$audio;
            $video_path = 'official_words/'.$video;

            OfficialWord::Create([
                'audio' => $audio_path,
                'video' => $video_path,
                'speaker'=>request('speaker'),
                'title'=>request('title'),
                'category'=>request('category'),
            ]);

            session()->flash('uploaded', 'Official Word uploaded successfulyy!!');
            return redirect('/all_official_words');
            
        }elseif(request('pdf') == null && request('audio') == null){

            $video = time().'.'.request('video')->extension();  

            request('video')->move(public_path('official_words'), $video);

            $video_path = 'official_words/'.$video;

            OfficialWord::Create([
                'video' => $video_path,
                'speaker'=>request('speaker'),
                'title'=>request('title'),
                'category'=>request('category'),
            ]);

            session()->flash('uploaded', 'Official Word uploaded successfulyy!!');
            return redirect('/all_official_words');

        }elseif(request('pdf') == null && request('video') == null){ 
            
            $audio = time().'.'.request('audio')->extension();  

            request('audio')->move(public_path('official_words'), $audio);

            $audio_path = 'official_words/'.$audio;

            OfficialWord::Create([
                'audio' => $audio_path,
                'speaker'=>request('speaker'),
                'title'=>request('title'),
                'category'=>request('category'),
            ]);

            session()->flash('uploaded', 'Official Word uploaded successfulyy!!');
            return redirect('/all_official_words');

        }elseif(request('video') == null && request('audio') == null){

            $pdf = time().'.'.request('pdf')->extension();  

            request('pdf')->move(public_path('official_words'), $pdf);

            $pdf_path = 'official_words/'.$pdf;

            OfficialWord::Create([
                'pdf' => $pdf_path,
                'speaker'=>request('speaker'),
                'title'=>request('title'),
                'category'=>request('category'),
            ]);

            session()->flash('uploaded', 'Official Word uploaded successfulyy!!');
            return redirect('/all_official_words');

        }elseif(request('audio') == null){

            $pdf = time().'.'.request('pdf')->extension();  
            $video = time().'.'.request('video')->extension();  

            request('pdf')->move(public_path('official_words'), $pdf);
            request('video')->move(public_path('official_words'), $video);

            $pdf_path = 'official_words/'.$pdf;
            $video_path = 'official_words/'.$video;

            OfficialWord::Create([
                'pdf' => $pdf_path,
                'video' => $video_path,
                'speaker'=>request('speaker'),
                'title'=>request('title'),
                'category'=>request('category'),
            ]);

            session()->flash('uploaded', 'Official Word uploaded successfulyy!!');
            return redirect('/all_official_words');
            
        }elseif(request('video') == null){
            
            $pdf = time().'.'.request('pdf')->extension();  
            $audio = time().'.'.request('audio')->extension();  

            request('pdf')->move(public_path('official_words'), $pdf);
            request('audio')->move(public_path('official_words'), $audio);

            $pdf_path = 'official_words/'.$pdf;
            $audio_path = 'official_words/'.$audio;

            OfficialWord::Create([
                'pdf' => $pdf_path,
                'audio' => $audio_path,
                'speaker'=>request('speaker'),
                'title'=>request('title'),
                'category'=>request('category'),
            ]);

            session()->flash('uploaded', 'Official Word uploaded successfulyy!!');
            return redirect('/all_official_words');
            
        }else{

            $pdf = time().'.'.request('pdf')->extension();  
            $audio = time().'.'.request('audio')->extension();  
            $video = time().'.'.request('video')->extension();  

            request('pdf')->move(public_path('official_words'), $pdf);
            request('audio')->move(public_path('official_words'), $audio);
            request('video')->move(public_path('official_words'), $video);

            $pdf_path = 'official_words/'.$pdf;
            $audio_path = 'official_words/'.$audio;
            $video_path = 'official_words/'.$video;

            OfficialWord::Create([
                'pdf' => $pdf_path,
                'audio' => $audio_path,
                'video' => $video_path,
                'speaker'=>request('speaker'),
                'title'=>request('title'),
                'category'=>request('category'),
            ]);

            session()->flash('uploaded', 'Official Word uploaded successfulyy!!');
            return redirect('/all_official_words');
        }
    }

    public function allOfficialWords(){

        $official_words = OfficialWord::all();

        return view('official_word', [
            'official'=>$official_words
        ]);
    }

    public function deleteOfficialWord($id){
        dd("am here");
        $official = OfficialWord::destroy($id);

        session()->flash('deleted', 'Data deleted successfulyy!!');

        return redirect('/');
    }
}
