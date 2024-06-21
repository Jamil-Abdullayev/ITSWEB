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
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Work Principles</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Content</a>
                                </li>
                                <li class="breadcrumb-item active">Work Principles
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <form id="accountForm" method="POST" action="{{route('work-principles-store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <!-- users edit start -->

                        <div class="section users-edit">
                            <div class="card">

                                <div class="card-content">

                                    <div class="row">
                                        <div class="col s12 m6">
                                            <div class="row">
                                                <div class="col s12 input-field">
                                                    <input required id="section_title_az" name="section_title_az" type="text" class="validate" value="{{$sectionData['title_az']}}" data-error=".errorTxt2">
                                                    <label for="section_title_az">Section Title AZ</label>
                                                    <small class="errorTxt2"></small>
                                                </div>
                                                <div class="col s12 input-field">
                                                    <input required id="section_title_en" name="section_title_en" type="text" class="validate" value="{{$sectionData['title_en']}}" data-error=".errorTxt3">
                                                    <label for="section_title_en">Section Title EN</label>
                                                    <small class="errorTxt3"></small>
                                                </div>
                                                <div class="col s12 input-field">
                                                    <input required id="section_title_ru" name="section_title_ru" type="text" class="validate" value="{{$sectionData['title_ru']}}" data-error=".errorTxt3">
                                                    <label for="section_title_ru">Section Title RU</label>
                                                    <small class="errorTxt3"></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12 m6">
                                            <div class="row">
                                                <div class="col s12 input-field">
                                                    <input required id="section_description_az" name="section_description_az" type="text" class="validate" value="{{$sectionData['description_az']}}" data-error=".errorTxt2">
                                                    <label for="section_description_az">Section Description AZ</label>
                                                    <small class="errorTxt2"></small>
                                                </div>
                                                <div class="col s12 input-field">
                                                    <input required id="section_description_en" name="section_description_en" type="text" class="validate" value="{{$sectionData['description_en']}}" data-error=".errorTxt3">
                                                    <label for="section_description_en">Section Description EN</label>
                                                    <small class="errorTxt3"></small>
                                                </div>
                                                <div class="col s12 input-field">
                                                    <input required id="section_description_ru" name="section_description_ru" type="text" class="validate" value="{{$sectionData['description_ru']}}" data-error=".errorTxt3">
                                                    <label for="section_description_ru">Section Description RU</label>
                                                    <small class="errorTxt3"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="divider mb-1 mt-1"></div>
                                    <div id="file-upload" class="section">
                                        <div class="row section">
                                            <div class="col s12 m4 l3">
                                                <p>Section Picture(740x416)</p>
                                            </div>
                                            <div class="col s12 m8 l9">
                                                <input type="file" name="image" id="input-file-events" class="dropify-event" data-default-file="{{asset('storage/'.$sectionData['file'])}}" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                                <div class="card-content">
                                    <button type="button" class="btn green" id="addTab">Add Tab</button>
                                </div>
                                <div class="card-content">
                                    <!-- <div class="card-body"> -->

                                    <ul class="tabs mb-2 row" id="tabs">
                                        <li class="tab">
                                            <a class="display-flex align-items-center active" id="account-tab" href="#account">
                                                <i class="material-icons mr-1">error_outline</i><span>First Main Block</span>
                                            </a>
                                        </li>
                                        @foreach($principles as $principle)
                                            @if(!$loop->first)
                                                <li class="tab">
                                                    <a class="display-flex align-items-center" id="benefit{{$principle->id}}-tab" href="#benefit{{$principle->id}}">
                                                        <span>{{$principle->title_az}}</span> <i class="material-icons mr-1 btn-remove-tab"  data-target="benefit{{$principle->id}}-tab" data-content="benefit{{$principle->id}}">cancel</i>
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach

                                    </ul>

                                    <div class="divider mb-3"></div>

                                    <div class="row" id="tabContents">
                                        <div class="row" id="tabContentsInner">
                                            <div class="col s12" id="account">
                                                <div class="row">
                                                    <div class="col s12 m6">
                                                        <div class="row">
                                                            <div class="col s12 input-field">
                                                                <input required id="benefits[1][title_az]" name="benefits[1][title_az]" type="text" class="validate" value="{{$principles[0]['title_az']}}" data-error=".errorTxt2">
                                                                <label for="benefits[1][title_az]">Title AZ</label>
                                                                <small class="errorTxt2"></small>
                                                            </div>
                                                            <div class="col s12 input-field">
                                                                <input required id="benefits[1][title_en]" name="benefits[1][title_en]" type="text" class="validate" value="{{$principles[0]['title_en']}}" data-error=".errorTxt3">
                                                                <label for="benefits[1][title_en]">Title EN</label>
                                                                <small class="errorTxt3"></small>
                                                            </div>
                                                            <div class="col s12 input-field">
                                                                <input required id="benefits[1][title_en]" name="benefits[1][title_ru]" type="text" class="validate" value="{{$principles[0]['title_ru']}}" data-error=".errorTxt3">
                                                                <label for="benefits[1][title_en]">Title RU</label>
                                                                <small class="errorTxt3"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6">
                                                        <div class="row">
                                                            <div class="col s12 input-field">
                                                                <input required id="benefits[1][description_az]" name="benefits[1][description_az]" type="text" class="validate" value="{{$principles[0]['description_az']}}" data-error=".errorTxt2">
                                                                <label for="benefits[1][description_az]">Description AZ</label>
                                                                <small class="errorTxt2"></small>
                                                            </div>
                                                            <div class="col s12 input-field">
                                                                <input required id="benefits[1][description_en]" name="benefits[1][description_en]" type="text" class="validate" value="{{$principles[0]['description_en']}}" data-error=".errorTxt3">
                                                                <label for="benefits[1][description_en]">Description EN</label>
                                                                <small class="errorTxt3"></small>
                                                            </div>
                                                            <div class="col s12 input-field">
                                                                <input required id="benefits[1][description_ru]" name="benefits[1][description_ru]" type="text" class="validate" value="{{$principles[0]['description_ru']}}" data-error=".errorTxt3">
                                                                <label for="benefits[1][description_ru]">Description RU</label>
                                                                <small class="errorTxt3"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @foreach($principles as $principle)
                                                @if(!$loop->first)
                                                    <div class="col s12" id="benefit{{$principle->id}}">
                                                        <div class="row">
                                                            <div class="col s12 m6">
                                                                <div class="row">
                                                                    <div class="col s12 input-field">
                                                                        <input required id="benefits[{{$principle->id}}][title_az]" name="benefits[{{$principle->id}}][title_az]" type="text" class="validate" value="{{$principle->title_az}}" data-error=".errorTxt2">
                                                                        <label for="benefits[{{$principle->id}}][title_az]">Title AZ</label>
                                                                        <small class="errorTxt2"></small>
                                                                    </div>
                                                                    <div class="col s12 input-field">
                                                                        <input required id="benefits[{{$principle->id}}][title_en]" name="benefits[{{$principle->id}}][title_en]" type="text" class="validate" value="{{$principle->title_en}}" data-error=".errorTxt3">
                                                                        <label for="benefits[{{$principle->id}}][title_en]">Title EN</label>
                                                                        <small class="errorTxt3"></small>
                                                                    </div>
                                                                    <div class="col s12 input-field">
                                                                        <input required id="benefits[{{$principle->id}}][title_ru]" name="benefits[{{$principle->id}}][title_ru]" type="text" class="validate" value="{{$principle->title_ru}}" data-error=".errorTxt3">
                                                                        <label for="benefits[{{$principle->id}}][title_ru]">Title RU</label>
                                                                        <small class="errorTxt3"></small>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col s12 m6">
                                                                <div class="row">
                                                                    <div class="col s12 input-field">
                                                                        <input required id="benefits[{{$principle->id}}][description_az]" name="benefits[{{$principle->id}}][description_az]" type="text" class="validate" value="{{$principle->description_az}}" data-error=".errorTxt2">
                                                                        <label for="benefits[${tabCount}][description_az]">Description AZ</label>
                                                                        <small class="errorTxt2"></small>
                                                                    </div>
                                                                    <div class="col s12 input-field">
                                                                        <input required id="benefits[{{$principle->id}}][description_en]" name="benefits[{{$principle->id}}][description_en]" type="text" class="validate" value="{{$principle->description_en}}" data-error=".errorTxt3">
                                                                        <label for="benefits[{{$principle->id}}][description_en]">Description EN</label>
                                                                        <small class="errorTxt3"></small>
                                                                    </div>
                                                                    <div class="col s12 input-field">
                                                                        <input required id="benefits[{{$principle->id}}][description_ru]" name="benefits[{{$principle->id}}][description_ru]" type="text" class="validate" value="{{$principle->description_ru}}" data-error=".errorTxt3">
                                                                        <label for="benefits[{{$principle->id}}][description_ru]">Description RU</label>
                                                                        <small class="errorTxt3"></small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col s12 display-flex justify-content-end mt-3">
                                        <button type="submit" class="btn indigo">
                                            Save changes</button>
                                    </div>
                                </div>




                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- users edit ends -->
            </div>
            </form>
            <div class="content-overlay"></div>
        </div>
    </div>
    </div>
    <!-- END: Page Main-->

    <script>

    </script>
@endsection
