@extends('layouts.backend.master')

@section('title', 'Further Sub Category Image Edit')

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

            {!! Form::open(['url' => route("further_subcategory_images_update", $furthersubcategoryimage->id), 'method' => 'POST', 'class' => 'user_edit_form', 'id' => 'my_profile', 'files' => true, 'enctype' => "multipart/form-data", 'novalidate']) !!}
            
            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                <div class="uk-width-xLarge-10-10 uk-width-large-10-10">
                    <div class="md-card">
                        <div class="user_heading">
                            <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b"><span class="uk-text-truncate">Edit Further Sub Category Image</span></h2>
                                <div class="uk-width-medium-1-3">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="user_content">
                            <div class="uk-margin-top">

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="further_sub_category_id">Further Sub Category<sup><i style="color:red; font: 14px; " class="material-icons">stars</i></sup></label>
                                    </div>
                                    <div class="uk-width-medium-2-5">

                                       <select class="md-input" name="further_sub_category_id" id="further_sub_category_id" class="form-control">
                                           
                                             <option value="{{ $furthersubcategoryimage->further_sub_category_id }}">{{ $furthersubcategoryimage->furtherSubCategoryImagesName->name }}</option>
                               
                                        </select>
                                        @if($errors->has('further_sub_category_id'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('further_sub_category_id')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                @if(isset($furthersubcategoryimage['image_url']))
                                    <div class="uk-grid" data-uk-grid-margin>
                                        <div class="uk-width-medium-1-5  uk-vertical-align">
                                            <label class="uk-vertical-align-middle" for="image_url_1">old Image</label>
                                        </div>
                                        <div class="uk-width-medium-2-5">
                                            <img src="{{ asset($furthersubcategoryimage['image_url']) }}" width="200" height="200" >
                                        </div>
                                    </div>
                                @endif

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="image_url_1">Image</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <input class="md-file" type="file" id="image_url_1" name="image_url_1" accept="image/*" required>
                                        @if($errors->has('image_url_1'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('image_url_1')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="note">Note</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="note">Note</label>
                                        <textarea  id="note" name="note" rows="12" cols="80">{{ $furthersubcategoryimage['note'] }}</textarea>
                                        @if($errors->has('note'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('note')!!}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div style="display: none" class="uk-grid" data-uk-grid-margin>
                                    <input name="index_id" value="{{ $furthersubcategoryimage->further_sub_category_id }}">
                                </div>
                                <br>
                                <br>
                                <br>

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
        $('#sidebar_furthersubcategory').addClass('current_section');
    </script>

    <script src="{{ asset('assets/js/pages/components_notifications.min.js') }} "></script>
    <script src="{{ asset('bower_components/ckeditor/ckeditor.js') }} "></script>
@endsection

