@extends('layouts.backend.master')

@section('title', 'Further Sub Category Image Create')

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

            {!! Form::open(['url' => route("further_subcategory_images_store"), 'method' => 'POST', 'class' => 'user_edit_form', 'id' => 'my_profile', 'files' => true, 'enctype' => "multipart/form-data", 'novalidate']) !!}
            
            <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                <div class="uk-width-xLarge-10-10 uk-width-large-10-10">
                    <div class="md-card">
                        <div class="user_heading">
                            <div class="user_heading_avatar fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                            </div>
                            <div class="user_heading_content">
                                <h2 class="heading_b"><span class="uk-text-truncate">Create New Further Sub Category Image</span></h2>
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

                                            @foreach($furthersubcategorys as $furthersubcategory)
                                                <option value="{{ $furthersubcategory->id }}">{{ $furthersubcategory->name }}</option>
                                            @endforeach

                                        </select>
                                        @if($errors->has('further_sub_category_id'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('further_sub_category_id')!!}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="image_url_1">Image-1</label>
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
                                        <label class="uk-vertical-align-middle" for="image_url_2">Image-2</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <input class="md-file" type="file" id="image_url_2" name="image_url_2" accept="image/*" required>
                                        @if($errors->has('image_url_2'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('image_url_2')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="image_url_3">Image-3</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <input class="md-file" type="file" id="image_url_3" name="image_url_3" accept="image/*" required>
                                        @if($errors->has('image_url_3'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('image_url_3')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="image_url_4">Image-4</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <input class="md-file" type="file" id="image_url_4" name="image_url_4" accept="image/*" required>
                                        @if($errors->has('image_url_4'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('image_url_4')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="image_url_5">Image-5</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <input class="md-file" type="file" id="image_url_5" name="image_url_5" accept="image/*" required>
                                        @if($errors->has('image_url_5'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('image_url_5')!!}</span>
                                        @endif
                                    </div>
                                </div>


                                

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="note_1">Note-1</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="note_1">Note-1</label>
                                        <textarea  id="note_1" name="note_1" rows="12" cols="80">{{ old('note_1') }}</textarea>
                                        @if($errors->has('note_1'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('note_1')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="note_2">Note-2</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="note_2">Note-2</label>
                                        <textarea  id="note_2" name="note_2" rows="12" cols="80">{{ old('note_2') }}</textarea>
                                        @if($errors->has('note_2'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('note_2')!!}</span>
                                        @endif
                                    </div>
                                </div>


                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="note_3">Note-3</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="note_3">Note-3</label>
                                        <textarea  id="note_3" name="note_3" rows="12" cols="80">{{ old('note_3') }}</textarea>
                                        @if($errors->has('note_3'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('note_3')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="note_4">Note-4</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="note_4">Note-4</label>
                                        <textarea  id="note_4" name="note_4" rows="12" cols="80">{{ old('note_4') }}</textarea>
                                        @if($errors->has('note_4'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('note_4')!!}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="uk-grid" data-uk-grid-margin>
                                    <div class="uk-width-medium-1-5  uk-vertical-align">
                                        <label class="uk-vertical-align-middle" for="note_5">Note-5</label>
                                    </div>
                                    <div class="uk-width-medium-2-5">
                                        <label for="note_5">Note-5</label>
                                        <textarea  id="note_5" name="note_5" rows="12" cols="80">{{ old('note_5') }}</textarea>
                                        @if($errors->has('note_5'))
                                            <br/>
                                            <span style="color:orangered;">{!!$errors->first('note_5')!!}</span>
                                        @endif
                                    </div>
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

