<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendeeController extends Controller
{
    public function  AttendeeView(){
        $data['allData'] = Attendee::select('event_id', DB::raw('count(*) as total_attendees'))
        ->groupBy('event_id')
        ->get();        
        return view("admin.attendee.attendee",$data);
    }
    public function AttendeesView($id){
        $attendees = Attendee::where('event_id',$id)->get();
        return view('admin.attendee.attendee-view',compact('attendees'));
    }
    public function AttendeeAdd(){
        $data['allData'] = Event::all();
        return view("admin.attendee.attendee-add",$data);
    }
    public function AttendeeStore(Request $request){
        $data = new Attendee();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->event_id = $request->event_id;
        $data->save();

        toastr()->success('Attendee has been Register successfully!');
        return redirect()->route('attendee.view');
    }
    public function AttendeeEdit($id){
        $attendeeEdit = Attendee::find($id);
        $data = Event::all();
        return view('admin.attendee.attendee-edit',compact('attendeeEdit','data'));
    }
    public function AttendeeUpdate(Request $request,$id){
        $data = Attendee::find($id);
        $data->email = $request->email;
        $data->name = $request->name;
        $data->event_id = $request->event_id;
        $data->save();
        toastr()->success('Attendee has been Edit successfully!');
        return redirect()->route('attendee.view');
    }
    public function AttendeeDelete($id){
        $attendeeDelete = Attendee::find($id);
        $attendeeDelete->delete();
        toastr()->warning('Attendee has been Delete successfully!');
        return redirect()->route('attendee.view');
    }
}
