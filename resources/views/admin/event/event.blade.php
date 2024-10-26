@extends('home')
@section('admin')
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Event Management System</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Event Management</li>
                        </ul>
                    </div>
                    <div class="col-auto">
                        <a href="{{route('event.add')}}" class="btn btn-primary me-1" alt="Add Event">
                            <i class="fas fa-plus"></i>
                        </a>
                        <!-- <a class="btn btn-primary filter-btn" href="javascript:void(0);" id="filter_search">
                            <i class="fas fa-filter"></i>
                        </a> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-center table-hover datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Event ID</th>
                                            <th>Event Name</th>
                                            <th>Event Category</th>
                                            <th>Date & Time</th>
                                            <th>Location</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($events as $key => $event)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $event->title }}</td>
                                                <td>{{ $event['category']['name'] }}</td>
                                                <td>{{ $event->date }} - {{ $event->time }}</td>
                                                <td>{{ $event->location }}</td>
                                                <td class="text-center">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-h"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item"
                                                                href="{{route('events.edit',$event->id)}}">
                                                                <i class="far fa-edit me-2"></i>
                                                                Edit
                                                            </a>
                                                             <a class="dropdown-item"  href="{{route('events.delete',$event->id)}}">
                                                            <i class="fa fa-trash me-2"></i>
                                                            Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
