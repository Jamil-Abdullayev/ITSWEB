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
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>About Us</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Content</a>
                                </li>
                                <li class="breadcrumb-item active">About Us
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <form id="accountForm" method="POST" action="{{route('about-store')}}" enctype="multipart/form-data">
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
                                    <h5>Main Section Data</h5>
                                    <div class="divider mb-1 mt-1"></div>


                                    <div class="card-content">

                                        <div id="file-upload" class="section">
                                            <div class="row section">
                                                <div class="col s12 m4 l3">
                                                    <p>Section Picture(740x416)</p>
                                                </div>
                                                <div class="col s12 m8 l9">
                                                    <input type="file" name="file" id="input-file-events" class="dropify-event" data-default-file="{{asset('storage/'.$aboutMainSection['media'])}}" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divider mb-1 mt-1"></div>
                                            <h5>Main Section Content</h5>
                                        <div class="divider mb-1 mt-1"></div>
                                        <ul class="tabs mb-2 row" id="tabs2">
                                            <li class="tab">
                                                <a class="display-flex align-items-center active" id="account-tab"
                                                   href="#content_az">
                                                    <i class="material-icons mr-1">error_outline</i><span>Content AZ</span>
                                                </a>
                                            </li>
                                            <li class="tab">
                                                <a class="display-flex align-items-center" id="account-tab"
                                                   href="#content_en">
                                                    <i class="material-icons mr-1">error_outline</i><span>Content EN</span>
                                                </a>
                                            </li>
                                            <li class="tab">
                                                <a class="display-flex align-items-center" id="account-tab"
                                                   href="#content_ru">
                                                    <i class="material-icons mr-1">error_outline</i><span>Content RU</span>
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="divider mb-3"></div>

                                        <div class="row" id="tabContents2">

                                            <div class="col s12" id="content_az">
                                                <div class="col s12 input-field">
                                                    <input required id="about_title_az" name="about_title_az" type="text" class="validate" value="{{$aboutMainSection['title_az']}}" data-error=".errorTxt2">
                                                    <label for="about_title_az">Section Title AZ</label>
                                                    <small class="errorTxt2"></small>
                                                </div>
                                                <input type="hidden" name="content_az" id="content_az_value">
                                                <div class="col s12">
                                                    <div class="card">
                                                        <div class="col s12">
                                                            <div id="full-wrapper">
                                                                <div class="full-container">
                                                                    <div id="content_az_editor" class="editor">
                                                                    {!! $aboutMainSection['description_az'] !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col s12" id="content_en">
                                                <div class="col s12 input-field">
                                                    <input required id="about_title_en" name="about_title_en" type="text" class="validate" value="{{$aboutMainSection['title_en']}}" data-error=".errorTxt2">
                                                    <label for="about_title_en">Section Title EN</label>
                                                    <small class="errorTxt2"></small>
                                                </div>
                                                <input type="hidden" name="content_en" id="content_en_value">
                                                <div class="col s12">
                                                    <div class="card">
                                                        <div class="col s12">
                                                            <div id="full-wrapper">
                                                                <div class="full-container">
                                                                    <div id="content_en_editor" class="editor">
                                                                        {!! $aboutMainSection['description_en'] !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col s12" id="content_ru">
                                                <div class="col s12 input-field">
                                                    <input required id="about_title_ru" name="about_title_ru" type="text" class="validate" value="{{$aboutMainSection['title_ru']}}" data-error=".errorTxt2">
                                                    <label for="about_title_ru">Section Title RU</label>
                                                    <small class="errorTxt2"></small>
                                                </div>
                                                <input type="hidden" name="content_ru" id="content_ru_value">
                                                <div class="col s12">
                                                    <div class="card">
                                                        <div class="col s12">
                                                            <div id="full-wrapper">
                                                                <div class="full-container">
                                                                    <div id="content_ru_editor" class="editor">
                                                                        {!! $aboutMainSection['description_ru'] !!}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                        @foreach($benefits as $benefit)
                                            @if(!$loop->first)
                                                <li class="tab">
                                                    <a class="display-flex align-items-center" id="benefit{{$benefit->id}}-tab" href="#benefit{{$benefit->id}}">
                                                        <span>{{$benefit->title_az}}</span> <i class="material-icons mr-1 btn-remove-tab"  data-target="benefit{{$benefit->id}}-tab" data-content="benefit{{$benefit->id}}">cancel</i>
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
                                                                <input required id="benefits[1][title_az]" name="benefits[1][title_az]" type="text" class="validate" value="{{$benefits[0]['title_az']}}" data-error=".errorTxt2">
                                                                <label for="benefits[1][title_az]">Title AZ</label>
                                                                <small class="errorTxt2"></small>
                                                            </div>
                                                            <div class="col s12 input-field">
                                                                <input required id="benefits[1][title_en]" name="benefits[1][title_en]" type="text" class="validate" value="{{$benefits[0]['title_en']}}" data-error=".errorTxt3">
                                                                <label for="benefits[1][title_en]">Title EN</label>
                                                                <small class="errorTxt3"></small>
                                                            </div>
                                                            <div class="col s12 input-field">
                                                                <input required id="benefits[1][title_en]" name="benefits[1][title_ru]" type="text" class="validate" value="{{$benefits[0]['title_ru']}}" data-error=".errorTxt3">
                                                                <label for="benefits[1][title_en]">Title RU</label>
                                                                <small class="errorTxt3"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col s12 m6">
                                                        <div class="row">
                                                            <div class="col s12 input-field">
                                                                <input required id="benefits[1][description_az]" name="benefits[1][description_az]" type="text" class="validate" value="{{$benefits[0]['description_az']}}" data-error=".errorTxt2">
                                                                <label for="benefits[1][description_az]">Description AZ</label>
                                                                <small class="errorTxt2"></small>
                                                            </div>
                                                            <div class="col s12 input-field">
                                                                <input required id="benefits[1][description_en]" name="benefits[1][description_en]" type="text" class="validate" value="{{$benefits[0]['description_en']}}" data-error=".errorTxt3">
                                                                <label for="benefits[1][description_en]">Description EN</label>
                                                                <small class="errorTxt3"></small>
                                                            </div>
                                                            <div class="col s12 input-field">
                                                                <input required id="benefits[1][description_ru]" name="benefits[1][description_ru]" type="text" class="validate" value="{{$benefits[0]['description_ru']}}" data-error=".errorTxt3">
                                                                <label for="benefits[1][description_ru]">Description RU</label>
                                                                <small class="errorTxt3"></small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @foreach($benefits as $benefit)
                                                @if(!$loop->first)
                                                    <div class="col s12" id="benefit{{$benefit->id}}">
                                                        <div class="row">
                                                            <div class="col s12 m6">
                                                                <div class="row">
                                                                    <div class="col s12 input-field">
                                                                        <input required id="benefits[{{$benefit->id}}][title_az]" name="benefits[{{$benefit->id}}][title_az]" type="text" class="validate" value="{{$benefit->title_az}}" data-error=".errorTxt2">
                                                                        <label for="benefits[{{$benefit->id}}][title_az]">Title AZ</label>
                                                                        <small class="errorTxt2"></small>
                                                                    </div>
                                                                    <div class="col s12 input-field">
                                                                        <input required id="benefits[{{$benefit->id}}][title_en]" name="benefits[{{$benefit->id}}][title_en]" type="text" class="validate" value="{{$benefit->title_en}}" data-error=".errorTxt3">
                                                                        <label for="benefits[{{$benefit->id}}][title_en]">Title EN</label>
                                                                        <small class="errorTxt3"></small>
                                                                    </div>
                                                                    <div class="col s12 input-field">
                                                                        <input required id="benefits[{{$benefit->id}}][title_ru]" name="benefits[{{$benefit->id}}][title_ru]" type="text" class="validate" value="{{$benefit->title_ru}}" data-error=".errorTxt3">
                                                                        <label for="benefits[{{$benefit->id}}][title_ru]">Title RU</label>
                                                                        <small class="errorTxt3"></small>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col s12 m6">
                                                                <div class="row">
                                                                    <div class="col s12 input-field">
                                                                        <input required id="benefits[{{$benefit->id}}][description_az]" name="benefits[{{$benefit->id}}][description_az]" type="text" class="validate" value="{{$benefit->description_az}}" data-error=".errorTxt2">
                                                                        <label for="benefits[${tabCount}][description_az]">Description AZ</label>
                                                                        <small class="errorTxt2"></small>
                                                                    </div>
                                                                    <div class="col s12 input-field">
                                                                        <input required id="benefits[{{$benefit->id}}][description_en]" name="benefits[{{$benefit->id}}][description_en]" type="text" class="validate" value="{{$benefit->description_en}}" data-error=".errorTxt3">
                                                                        <label for="benefits[{{$benefit->id}}][description_en]">Description EN</label>
                                                                        <small class="errorTxt3"></small>
                                                                    </div>
                                                                    <div class="col s12 input-field">
                                                                        <input required id="benefits[{{$benefit->id}}][description_ru]" name="benefits[{{$benefit->id}}][description_ru]" type="text" class="validate" value="{{$benefit->description_ru}}" data-error=".errorTxt3">
                                                                        <label for="benefits[{{$benefit->id}}][description_ru]">Description RU</label>
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
@endsection
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('accountForm').onsubmit = function () {
            // Получаем содержимое Quill-редактора по id content_az_editor
            var editor_content_az = document.getElementById('content_az_editor').querySelector('.ql-editor').innerHTML;
            document.getElementById('content_az_value').value = editor_content_az;

            var editor_content_en = document.getElementById('content_en_editor').querySelector('.ql-editor').innerHTML;
            document.getElementById('content_en_value').value = editor_content_en;

            var editor_content_ru = document.getElementById('content_ru_editor').querySelector('.ql-editor').innerHTML;
            document.getElementById('content_ru_value').value = editor_content_ru;
        };
    });
</script>
