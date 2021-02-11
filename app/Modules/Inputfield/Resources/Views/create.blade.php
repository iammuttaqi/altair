@extends('layouts.backend.master')

@section('title', 'Input Field Create')

@section('content')
    @include('layouts.backend.includes.notice')
    <div class="uk-grid" ng-controller="InvoiceController">
        <div class="uk-width-large-10-10">
            @if(Session::has('msg'))
                <div class="uk-alert uk-alert-success" data-uk-alert>
                    <a href="#" class="uk-alert-close uk-close"></a>
                    {!! Session::get('msg') !!}
                </div>
            @endif

            {!! Form::open(['url' => route("inputfield_store"), 'method' => 'POST', 'class' => 'user_edit_form', 'id' => 'my_profile', 'files' => true, 'enctype' => "multipart/form-data", 'novalidate']) !!}

            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                <div class="uk-width-xLarge-10-10 uk-width-large-10-10">
                    <div class="md-card">
                        <div class="user_heading">
                            <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b"><span class="uk-text-truncate">Create New InputField</span></h2>
                                <div class="uk-width-medium-1-3">

                                </div>
                            </div>
                        </div>
                        <div class="user_content">
                            <div class="uk-margin-top">

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="name">Name<span style="color: red;" class="asterisc">*</span></label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="name">Name</label>
                                        <input class="md-input" type="text" id="name" name="name" value="{{ old('name') }}" required="required">
                                        @if($errors->has('name'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('name')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="slug_name">Slug<span style="color: red;" class="asterisc">*</span></label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="name">Slug</label>
                                        <input class="md-input" type="text" id="slug_name" name="slug_name" value="{{ old('slug') }}" required="required">
                                        @if($errors->has('name'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('slug')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="code">Code</label>
                                    </div>
                                    <div class="uk-width-medium-3-5">
                                        <label for="details">Code</label>
                                        <input class="md-input" type="text" name="code" id="code" value="{{ old('slug') }}" required="required" >
                                        @if($errors->has('code'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('code')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="show_in_home">Type</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="show_in_home"></label>
                                        <select class="md-input" name="type" id="type" class="form-control">
                                            <option value="">Select Type</option>
                                            <option value="1">File</option>
                                        </select>
                                        @if($errors->has('type'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('type')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid uk-ma" data-uk-grid-margin>
                                    <div class="uk-width-1-1 uk-float-left">
                                        <button type="submit" class="md-btn md-btn-primary" >Submit</button>
                                        <button type="button" class="md-btn md-btn-flat uk-modal-close">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('custom_footer_js')
    <script>
        $('#sidebar_input_field').addClass('current_section');
    </script>

    <script src="{{ asset('assets/js/pages/components_notifications.min.js') }} "></script>
    <script src="{{ asset('bower_components/ckeditor/ckeditor.js') }} "></script>
@endsection

