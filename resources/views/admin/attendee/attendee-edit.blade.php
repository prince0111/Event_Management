@extends('home')
@section('admin')

<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Event Management System</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('attendee.view')}}">Attendee</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('attendees.update',$attendeeEdit->id) }}" enctype="multipart/form-data">
                            @csrf
                            <h5 class="card-title">Edit Attendee</h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Attendee Name</label>
                                        <input type="text" id="name" name="name" value="{{ $attendeeEdit->name }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" id="email" name="email" value="{{ $attendeeEdit->email }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">                  
                                    <label>Event:</label>
                                    <div class="controls">
                                        <select name="event_id" id="event_id" required="" class="form-control">
                                            <option value="{{ $attendeeEdit->event_id }}" selected="" disabled="">Select Category</option>
                                            @foreach($data as $event)
                                                <option value="{{$event->id}}" {{($event->id == $attendeeEdit['event']['id'])? 'selected':'' }}>{{$event->title}}</option>
                                            @endforeach
                                         </select>
                                        <div class="help-block with-errors"></div>
                                    </div>                         
                                </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
