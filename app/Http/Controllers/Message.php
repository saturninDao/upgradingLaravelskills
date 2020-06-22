<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Message extends Controller
{
    public function update(Request $request, $message_id)  
    {  
        $message = Message::findOrFail($message_id);  
  
        if (Gate::denies(’update-message’, $message)) {  
            return redirect(’messages’)->with([  
                'message' => 'Interdit de modifier ce message' 
            ]);  
        } else {  
            $message->text = $request->input(’text’);  
            $message->save();  
            return redirect(’messages’)->with([  
                'message' => 'Le message a bien été modifié' 
            ]);  
        }  
    }  
}
