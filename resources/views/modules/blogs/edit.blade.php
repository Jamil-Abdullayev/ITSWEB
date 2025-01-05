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
                            <h5 class="breadcrumbs-title mt-0 mb-0"><span>Blogs</span></h5>
                        </div>
                        <div class="col s12 m6 l6 right-align-md">
                            <ol class="breadcrumbs mb-0">
                                <li class="breadcrumb-item"><a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Blogs</a>
                                </li>
                                <li class="breadcrumb-item active">Add blog
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12">
                <form id="accountForm" method="POST" action="{{route('blogs.update', $blog->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="container">
                        <!-- users edit start -->

                        <div class="section users-edit">
                            <div class="card">

                                <div class="card-content">
                                    <h4 class="card-title">Section Data</h4>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <div class="row">
                                                <div class="col s12 input-field">
                                                    <input required id="title_az" name="title_az"
                                                           type="text" class="validate" value="{{$blog['title_az']}}"
                                                           data-error=".errorTxt2">
                                                    <label for="title_az">Section Title AZ</label>
                                                    <small class="errorTxt2"></small>
                                                </div>
                                                <div class="col s12 input-field">
                                                    <input required id="title_en" name="title_en"
                                                           type="text" class="validate" value="{{$blog['title_en']}}"
                                                           data-error=".errorTxt3">
                                                    <label for="title_en">Section Title EN</label>
                                                    <small class="errorTxt3"></small>
                                                </div>
                                                <div class="col s12 input-field">
                                                    <input required id="title_ru" name="title_ru"
                                                           type="text" class="validate" value="{{$blog['title_ru']}}"
                                                           data-error=".errorTxt3">
                                                    <label for="title_ru">Section Title RU</label>
                                                    <small class="errorTxt3"></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12 m6">
                                            <div class="row">
                                                <div class="col s12 input-field">
                                                    <input required id="description_az"
                                                           name="description_az" type="text" class="validate"
                                                           value="{{$blog['description_az']}}" data-error=".errorTxt2">
                                                    <label for="description_az">Section Description AZ</label>
                                                    <small class="errorTxt2"></small>
                                                </div>
                                                <div class="col s12 input-field">
                                                    <input required id="description_en"
                                                           name="description_en" type="text" class="validate"
                                                           value="{{$blog['description_en']}}" data-error=".errorTxt3">
                                                    <label for="description_en">Section Description EN</label>
                                                    <small class="errorTxt3"></small>
                                                </div>
                                                <div class="col s12 input-field">
                                                    <input required id="description_ru"
                                                           name="description_ru" type="text" class="validate"
                                                           value="{{$blog['description_ru']}}" data-error=".errorTxt3">
                                                    <label for="description_ru">Section Description RU</label>
                                                    <small class="errorTxt3"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-content">
                                    <h4 class="card-title">Meta Data</h4>
                                    <div class="row">
                                        <div class="col s12 m6">
                                            <div class="row">
                                                <div class="col s12 input-field">
                                                    <input required id="meta_title_az" name="meta_title_az" type="text"
                                                           class="validate" value="{{$blog['meta_title_az']}}" data-error=".errorTxt2">
                                                    <label for="meta_title_az">Meta Title AZ</label>
                                                    <small class="errorTxt2"></small>
                                                </div>
                                                <div class="col s12 input-field">
                                                    <input required id="meta_title_en" name="meta_title_en" type="text"
                                                           class="validate" value="{{$blog['meta_title_en']}}" data-error=".errorTxt3">
                                                    <label for="meta_title_en">Meta Title EN</label>
                                                    <small class="errorTxt3"></small>
                                                </div>
                                                <div class="col s12 input-field">
                                                    <input required id="meta_title_ru" name="meta_title_ru" type="text"
                                                           class="validate" value="{{$blog['meta_title_ru']}}" data-error=".errorTxt3">
                                                    <label for="meta_title_ru">Meta Title RU</label>
                                                    <small class="errorTxt3"></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col s12 m6">
                                            <div class="row">
                                                <div class="col s12 input-field">
                                                    <input required id="meta_description_az" name="meta_description_az"
                                                           type="text" class="validate" value="{{$blog['meta_description_az']}}"
                                                           data-error=".errorTxt2">
                                                    <label for="meta_description_az">Meta Description AZ</label>
                                                    <small class="errorTxt2"></small>
                                                </div>
                                                <div class="col s12 input-field">
                                                    <input required id="meta_description_en" name="meta_description_en"
                                                           type="text" class="validate" value="{{$blog['meta_description_en']}}"
                                                           data-error=".errorTxt3">
                                                    <label for="meta_description_en">Meta Description EN</label>
                                                    <small class="errorTxt3"></small>
                                                </div>
                                                <div class="col s12 input-field">
                                                    <input required id="meta_description_ru" name="meta_description_ru"
                                                           type="text" class="validate" value="{{$blog['meta_description_ru']}}"
                                                           data-error=".errorTxt3">
                                                    <label for="meta_description_ru">Meta Description RU</label>
                                                    <small class="errorTxt3"></small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="card-content">

                                    <div class="divider mb-1 mt-1"></div>
                                    <div id="file-upload" class="section">
                                        <div class="row section">
                                            <div class="col s12 m4 l3">
                                                <p>Picture(850x566)</p>
                                            </div>
                                            <div class="col s12 m8 l9">
                                                <input type="file" name="image" id="input-file-events" class="dropify-event"
                                                       data-default-file="{{asset('storage/'.$blog['image'])}}"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider mb-1 mt-1"></div>

                                    <!-- <div class="card-body"> -->

                                    <ul class="tabs mb-2 row" id="tabs">
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

                                    <div class="row" id="tabContents">

                                        <div class="col s12" id="content_az">
                                            <input type="hidden" name="content_az" id="content_az_value">
                                            <div class="col s12">
                                                <div class="card">
                                                    <div class="col s12">
                                                        <div id="full-wrapper">
                                                            <div class="full-container">
                                                                <div id="content_az_editor" class="editor">
                                                                    {!! $blog['content_az'] !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col s12" id="content_en">
                                            <input type="hidden" name="content_en" id="content_en_value">
                                            <div class="col s12">
                                                <div class="card">
                                                    <div class="col s12">
                                                        <div id="full-wrapper">
                                                            <div class="full-container">
                                                                <div id="content_en_editor" class="editor">
                                                                    {!! $blog['content_en'] !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col s12" id="content_ru">
                                            <input type="hidden" name="content_ru" id="content_ru_value">
                                            <div class="col s12">
                                                <div class="card">
                                                    <div class="col s12">
                                                        <div id="full-wrapper">
                                                            <div class="full-container">
                                                                <div id="content_ru_editor" class="editor">
                                                                    {!! $blog['content_ru'] !!}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="col s12 display-flex justify-content-end mt-3">
                                    <button type="submit" class="btn indigo">
                                        Save changes
                                    </button>
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
