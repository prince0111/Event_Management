<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function EventView(){
        $events = Event::with('category')->get();
        return view('admin.event.event', compact('events'));
    }

    public function EventAdd(){
        $category = Category::all();
        return view('admin.event.event-add', compact('category'));
    }
    public function EventStore(Request $request){
        $data = new Event();
        $data->title = $request->title;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->location = $request->location;
        $data->category_id = $request->category_id;
        $data->description = $request->description;
        $data->save();
        toastr()->success('Event has been Created successfully!');
        return redirect()->route('event.view');
    }
    public function EventEdit($id){
        $events = Event::find($id);
        $category = Category::all();
        return view('admin.event.event-edit', compact('events','category'));
    }
    public function EventUpdate(Request $request,$id){
        
        $nameExists = Attendee::where('event_id', $id)->exists();
        if ($nameExists) {
            toastr()->warning('Event is used in Attendee Register Cant Edit!');
            return redirect()->route('event.view');
        } else {
            $data = Event::find($id);
            $data->title = $request->title;
            $data->date = $request->date;
            $data->time = $request->time;
            $data->location = $request->location;
            $data->category_id = $request->category_id;
            $data->description = $request->description;
            $data->save();

            toastr()->success('Event has been Edit successfully!');
            return redirect()->route('event.view');
        }
    }
    public function EventDelete($id){
        $nameExists = Attendee::where('event_id', $id)->exists();
        if ($nameExists) {
            toastr()->warning('Event is used in Attendee Register Cant Delete!');
            return redirect()->route('event.view');
        } else {
            $data = Event::find($id);
            $data->delete();
            toastr()->warning('Event has been Deleted Successfully!');
            return redirect()->route('event.view');
        }
    }
}
