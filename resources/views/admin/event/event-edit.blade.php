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
                        <li class="breadcrumb-item active"><a href="{{route('event.view')}}">Event</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('events.update',$events->id) }}" enctype="multipart/form-data">
                            @csrf
                            <h5 class="card-title">Edit Event</h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Event Title</label>
                                        <input type="text" id="title" name="title" value="{{$events->title}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Event Date</label>
                                        <input type="date" id="date" name="date" value="{{$events->date}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Event Time</label>
                                        <input type="time" id="time" name="time" value="{{$events->time}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Event Location</label>
                                        <input type="text" id="location" name="location" value="{{$events->location}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">                  
                                    <label>Event Category:</label>
                                    <div class="controls">
                                        <select name="category_id" id="category_id" required="" class="form-control">
                                            <option value="{{$events->category_id}}" selected="" disabled="">Select Designation</option>
                                            @foreach($category as $cat)
                                                <option value="{{$cat->id}}" {{($cat->id == $events['category']['id'])? 'selected':'' }}>{{$cat->name}}</option>
                                            @endforeach
                                         </select>
                                        <div class="help-block with-errors"></div>
                                    </div>                         
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" id="description" name="description" value="{{$events->description}}" class="form-control">
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
