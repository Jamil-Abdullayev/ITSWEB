@extends('layouts.app')
@section('content')
<div id="main">
    <div class="row">
        <div class="pt-3 pb-1" id="breadcrumbs-wrapper">
            <!-- Search for small screen-->
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6 display-flex">
                        <h5 class="breadcrumbs-title mt-0 mb-0"><span>Users List</span></h5>
                    </div>
                    <div class="col s12 m6 l6 right-align-md">
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">User</a>
                            </li>
                            <li class="breadcrumb-item active">Users List
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <!-- users list start -->
                <section class="users-list-wrapper section">
                    <div class="users-list-filter">
                        <div class="card-panel">
                            <div class="row">
                                <form>
                                    <div class="col s12 m6 l3">
                                        <label for="users-list-verified">Verified</label>
                                        <div class="input-field">
                                            <select class="form-control" id="users-list-verified">
                                                <option value="">Any</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l3">
                                        <label for="users-list-role">Role</label>
                                        <div class="input-field">
                                            <select class="form-control" id="users-list-role">
                                                <option value="">Any</option>
                                                <option value="admin">admin</option>
                                                <option value="Staff">Staff</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l3">
                                        <label for="users-list-status">Status</label>
                                        <div class="input-field">
                                            <select class="form-control" id="users-list-status">
                                                <option value="">Any</option>
                                                <option value="Active">Active</option>
                                                <option value="Close">Close</option>
                                                <option value="Banned">Banned</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col s12 m6 l3 display-flex align-items-center show-btn">
                                        <button type="submit" class="btn btn-block indigo waves-effect waves-light">Show</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                        <div class="row">
                            <div class="col m6">
                                <h6>
                                    Actions:
                                </h6>
                            </div>
                            <div class="col m6">
                                <a href="{{route('users.create')}}" class="btn btn-block green waves-effect waves-light"> <i class="add"></i> Add new</a>
                            </div>
                        </div>

                    <div class="users-list-table">
                        <div class="card">
                            <div class="card-content">
                                <!-- datatable start -->
                                <div class="responsive-table">
                                    <table id="users-list-datatable" class="table">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>ID</th>
                                            <th>NAME</th>
                                            <th>CREATED AT</th>
                                            <th>ROLE</th>
                                            <th>EDIT</th>
                                            <th>VIEW</th>
                                            <th>DELETE</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td></td>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->created_at}}</td>
                                                <td>{{$user->roles[0]->name}}</td>
                                                <td><a href="{{route('users.edit', $user->id)}}"><i class="material-icons">edit</i></a></td>
                                                <td><a href="{{route('users.show', $user->id)}}"><i class="material-icons">remove_red_eye</i></a></td>
                                                <td>
                                                    <form id="delete-user-form-{{$user->id}}" action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn" type="submit"><i class="material-icons">delete</i></button>
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- datatable ends -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users list ends -->
                <!-- START RIGHT SIDEBAR NAV -->
                <aside id="right-sidebar-nav">
                    <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
                        <div class="row">
                            <div class="slide-out-right-title">
                                <div class="col s12 border-bottom-1 pb-0 pt-1">
                                    <div class="row">
                                        <div class="col s2 pr-0 center">
                                            <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
                                        </div>
                                        <div class="col s10 pl-0">
                                            <ul class="tabs">
                                                <li class="tab col s4 p-0">
                                                    <a href="#messages" class="active">
                                                        <span>Messages</span>
                                                    </a>
                                                </li>
                                                <li class="tab col s4 p-0">
                                                    <a href="#settings">
                                                        <span>Settings</span>
                                                    </a>
                                                </li>
                                                <li class="tab col s4 p-0">
                                                    <a href="#activity">
                                                        <span>Activity</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
                <!-- END RIGHT SIDEBAR NAV -->
                <div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
                    <ul>
                        <li><a href="css-helpers.html" class="btn-floating blue"><i class="material-icons">help_outline</i></a></li>
                        <li><a href="cards-extended.html" class="btn-floating green"><i class="material-icons">widgets</i></a></li>
                        <li><a href="app-calendar.html" class="btn-floating amber"><i class="material-icons">today</i></a></li>
                        <li><a href="app-email.html" class="btn-floating red"><i class="material-icons">mail_outline</i></a></li>
                    </ul>
                </div>
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
</div>
@endsection
