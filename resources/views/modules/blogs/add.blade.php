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
                        <h5 class="breadcrumbs-title mt-0 mb-0"><span>Users edit</span></h5>
                    </div>
                    <div class="col s12 m6 l6 right-align-md">
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">User</a>
                            </li>
                            <li class="breadcrumb-item active">Users Edit
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <!-- users edit start -->
                <div class="section users-edit">
                    <div class="card">
                        <div class="card-content">
                            <!-- <div class="card-body"> -->
                            <ul class="tabs mb-2 row">
                                <li class="tab">
                                    <a class="display-flex align-items-center active" id="account-tab" href="#account">
                                        <i class="material-icons mr-1">person_outline</i><span>Details</span>
                                    </a>
                                </li>
{{--                                <li class="tab">--}}
{{--                                    <a class="display-flex align-items-center" id="information-tab" href="#information">--}}
{{--                                        <i class="material-icons mr-2">error_outline</i><span>Information</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                            </ul>
                            <div class="divider mb-3"></div>
                            <div class="row">
                                <div class="col s12" id="account">
                                    <form id="accountForm" method="POST" action="{{route('blogs.store')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col s12 m6">
                                                <div class="row">
                                                    <div class="col s12 input-field">
                                                        <input required id="name" name="name" type="text" class="validate" value="Dean Stanley" data-error=".errorTxt2">
                                                        <label for="name">Name</label>
                                                        <small class="errorTxt2"></small>
                                                    </div>
                                                    <div class="col s12 input-field">
                                                        <input required id="email" name="email" type="email" class="validate" value="deanstanley@gmail.com" data-error=".errorTxt3">
                                                        <label for="email">E-mail</label>
                                                        <small class="errorTxt3"></small>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col s12 input-field">
                                                <input required id="password" name="password" type="text" class="validate">
                                                <label for="password">Password</label>
                                            </div>

                                            <div class="col s12 m12">
                                                <div class="row">
                                                    <div class="col s12 input-field">
                                                        <div class="full-editor">
                                                            <div class="row">
                                                                <h6>Description</h6>
                                                                <div class="col s12">
                                                                    <div class="card">
                                                                       <div class="col s12">
                                                                                    <div id="full-wrapper">
                                                                                        <div id="full-container">
                                                                                            <div class="editor">
                                                                                                <h1 class="ql-align-center">Quill Rich Text Editor</h1>
                                                                                                <p><br></p>
                                                                                                <p>Quill is a free, <a href="https://github.com/quilljs/quill/">open source</a> WYSIWYG editor
                                                                                                    built for the modern web. With its <a href="http://quilljs.com/docs/modules/">modular
                                                                                                        architecture</a> and expressive <a href="http://quilljs.com/docs/api/">API</a>, it is
                                                                                                    completely customizable to fit any need.</p>
                                                                                                <p><br></p>
                                                                                                <iframe class="ql-video ql-align-center" src="https://www.youtube.com/embed/QHH3iSeDBLo?showinfo=0" width="560" height="238"></iframe>
                                                                                                <p><br></p>
                                                                                                <p><br></p>
                                                                                                <h2 class="ql-align-center">Getting Started is Easy</h2>
                                                                                                <p><br></p>
                                                                                                <pre>
  // &lt;link href="https://cdn.quilljs.com/1.0.5/quill.snow.css" rel="stylesheet"&gt;
	// &lt;script src="https://cdn.quilljs.com/1.0.5/quill.min.js" type="text/javascript"&gt;&lt;/script&gt;
	var quill = new Quill('#editor', {
	modules: {
		toolbar: '#toolbar'
	},
	theme: 'snow'
	});
	// Open your browser's developer console to try out the API!
											</pre>
                                                                                                <p><br></p>
                                                                                                <p><br></p>
                                                                                                <p class="ql-align-center"><strong>Built with</strong></p>
                                                                                                <p class="ql-align-center"><span class="ql-formula" data-value="x^2 + (y - \sqrt[3]{x^2})^2 = 1"></span></p>
                                                                                                <p><br></p>
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
                                            <div class="col s12 display-flex justify-content-end mt-3">
                                                <button type="submit" class="btn indigo">
                                                    Save changes</button>
                                                <button type="button" class="btn btn-light">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- users edit account form ends -->
                                </div>

                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-overlay"></div>
        </div>
    </div>
</div>
<!-- END: Page Main-->
@endsection
