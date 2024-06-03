@extends('layouts.app')
@section('content')
    <div id="main">
        <div class="row">
            <div class="pt-3 pb-1" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Blogs/News</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Modules</a>
                                </li>
                                <li class="breadcrumb-item active">Blogs/News
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section section-data-tables">
                        <div class="card">
                            <div class="card-content">
                                <p class="caption mb-0">Here you can add blogs/news for your site.</p>
                            </div>
                        </div>
                        <!-- DataTables example -->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div id="button-trigger" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <div class="card-title">
                                            <div class="row">
                                                <div class="col m6">Blogs/News</div>
                                                <div class="col m6">
                                                    <a href="{{route('blogs.create')}}" class="btn btn-block green waves-effect waves-light"> <i class="add"></i> Add new</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12">
                                                <p></p>
                                                <div class="col s12">
                                                    <div class="card">
                                                        <div class="card-content">
                                                            <div class="row">
                                                                <div class="col s12">
                                                                    <table id="page-length-option" class="display">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Title</th>
                                                                            <th>Description</th>
                                                                            <th>Created At</th>
                                                                            <th>Status</th>
                                                                            <th>Priority</th>
                                                                            <th>Actions</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>Tiger Nixon</td>
                                                                            <td>System Architect</td>
                                                                            <td>Edinburgh</td>
                                                                            <td>61</td>
                                                                            <td>2011/04/25</td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col m3">
                                                                                        <a href="{{route('blogs.edit', 333)}}"><i class="material-icons">edit</i></a>
                                                                                    </div>
                                                                                    <div class="col m3">
                                                                                        <a href="{{route('blogs.show', 333)}}"><i class="material-icons">remove_red_eye</i></a>
                                                                                    </div>
                                                                                    <div class="col m3">
                                                                                        <form id="delete-user-form-{{333}}" action="{{ route('blogs.destroy', 333) }}" method="POST">
                                                                                            @csrf
                                                                                            @method('DELETE')
                                                                                            <button class="btn" type="submit"><i class="material-icons">delete</i></button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Tiger Nixon</td>
                                                                            <td>System Architect</td>
                                                                            <td>Edinburgh</td>
                                                                            <td>63</td>
                                                                            <td>2011/04/25</td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col m3">
                                                                                        <a href="{{route('blogs.edit', 333)}}"><i class="material-icons">edit</i></a>
                                                                                    </div>
                                                                                    <div class="col m3">
                                                                                        <a href="{{route('blogs.show', 333)}}"><i class="material-icons">remove_red_eye</i></a>
                                                                                    </div>
                                                                                    <div class="col m3">
                                                                                        <form id="delete-user-form-{{333}}" action="{{ route('blogs.destroy', 333) }}" method="POST">
                                                                                            @csrf
                                                                                            @method('DELETE')
                                                                                            <button class="btn" type="submit"><i class="material-icons">delete</i></button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>

                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Tiger Nixon</td>
                                                                            <td>System Architect</td>
                                                                            <td>Edinburgh</td>
                                                                            <td>62</td>
                                                                            <td>2011/04/25</td>
                                                                            <td>
                                                                                <div class="row">
                                                                                    <div class="col m3">
                                                                                        <a href="{{route('blogs.edit', 333)}}"><i class="material-icons">edit</i></a>
                                                                                    </div>
                                                                                    <div class="col m3">
                                                                                        <a href="{{route('blogs.show', 333)}}"><i class="material-icons">remove_red_eye</i></a>
                                                                                    </div>
                                                                                    <div class="col m3">
                                                                                        <form id="delete-user-form-{{333}}" action="{{ route('blogs.destroy', 333) }}" method="POST">
                                                                                            @csrf
                                                                                            @method('DELETE')
                                                                                            <button class="btn" type="submit"><i class="material-icons">delete</i></button>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>

                                                                            </td>
                                                                        </tr>
                                                                        </tbody>
                                                                        <tfoot>
                                                                        <tr>
                                                                            <th>Title</th>
                                                                            <th>Description</th>
                                                                            <th>Created At</th>
                                                                            <th>Status</th>
                                                                            <th>Priority</th>
                                                                            <th>Actions</th>
                                                                        </tr>
                                                                        </tfoot>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Scroll - vertical, dynamic height -->



                    </div><!-- START RIGHT SIDEBAR NAV -->

                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>
@endsection
