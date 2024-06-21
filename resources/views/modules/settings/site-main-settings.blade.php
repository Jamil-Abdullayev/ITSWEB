@extends('layouts.app')
@section('content')
    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="pt-3 pb-1" id="breadcrumbs-wrapper">
                <!-- Search for small screen-->
                <div class="container">
                    <div class="row">
                        <div class="col s12 m6 l6">
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Site Main Settings</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Site Settings</a>
                                </li>
                                <li class="breadcrumb-item active">Site Main Settings
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <form id="accountForm" method="POST" action="{{route('site-main-settings-store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <!-- users edit start -->

                        <div class="section users-edit">
                            <div class="card">

                                <div class="row">
                                    <div class="col s12 m6">
                                        <div class="card-content">
                                            <h4 class="card-title">Social Media Links</h4>
                                            <div class="row">
                                                <div class="col s12 m12">
                                                    <div class="row">
                                                        <div class="col s12 input-field">
                                                            <input required id="linkedin" name="linkedin"
                                                                   type="text" class="validate"
                                                                   value="{{$linkedin['description']}}"
                                                                   data-error=".errorTxt2">
                                                            <label for="linkedin">Linkedin Link</label>
                                                            <small class="errorTxt2"></small>
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <input required id="instagram" name="instagram"
                                                                   type="text" class="validate"
                                                                   value="{{$instagram['description']}}"
                                                                   data-error=".errorTxt3">
                                                            <label for="instagram">Instagram Link</label>
                                                            <small class="errorTxt3"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col s12 m6">
                                        <div class="card-content">
                                            <h4 class="card-title">Contact Settings</h4>
                                            <div class="row">
                                                <div class="col s12 m12">
                                                    <div class="row">
                                                        <div class="col s12 input-field">
                                                            <input required id="email" name="email"
                                                                   type="text" class="validate"
                                                                   value="{{$email['description']}}"
                                                                   data-error=".errorTxt2">
                                                            <label for="email">E-Mail</label>
                                                            <small class="errorTxt2"></small>
                                                        </div>
                                                        <div class="col s12 input-field">
                                                            <input required id="phone" name="phone"
                                                                   type="text" class="validate"
                                                                   value="{{$phone['description']}}"
                                                                   data-error=".errorTxt3">
                                                            <label for="phone">Phone</label>
                                                            <small class="errorTxt3"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="divider mb-1 mt-1"></div>
                                <div id="file-upload" class="section">
                                    <div class="row section">
                                        <div class="col s12 m4 l3">
                                            <p>Main Logo(46x34)</p>
                                        </div>
                                        <div class="col s12 m8 l9">
                                            <input type="file" name="mainLogo" id="input-file-events" class="dropify-event"
                                                   data-default-file="{{asset('storage/'.$mainLogo['description'])}}"/>
                                        </div>
                                    </div>
                                </div>


                                <div class="col s12 display-flex justify-content-end mt-3">
                                    <button type="submit" class="btn indigo">
                                        Save changes
                                    </button>
                                </div>

                            </div>



                        </div>


                        <!-- </div> -->
                    </div>
                </form>
            </div>
        </div>
        <!-- users edit ends -->
    </div>
    <div class="content-overlay"></div>
@endsection

