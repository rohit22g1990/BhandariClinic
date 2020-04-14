@extends('admin.layout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card-box">
                        <h4 class="card-title">Module Carts</h4>
                        <form method="POST" action="{{ action('Admin\ModuleCartController@create') }}" enctype="multipart/form-data">
                            @csrf
                            @include('layouts.flash-message')
                            <div class="form-group col-md-6">
                                <label>Cart Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $moduleCart->name ?? old('name') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label>Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $moduleCart->title ?? old('title') }}">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label>Icon</label>
                                <input type="text" class="form-control @error('icon') is-invalid @enderror" name="icon" value="{{ $moduleCart->icon ?? old('icon') }}">
                                <span>You can get more icons <a href="https://themify.me/themify-icons" target="_blank"><u>here</u></a></span>
                                @error('icon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label>Description</label>
                                <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description">{{ $moduleCart->description ?? old('description')  ?? '' }}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label>Page</label>
                                <select class="select form-control @error('module_id') is-invalid @enderror" name="module_id">
                                    <option value="">Select</option>
                                    @foreach($modules as $id => $module)
                                        <option value="{{ $module['id'] }}" {{ (($moduleCart->id ?? old('name')) == $module['id'] ? "selected":"") }}>
                                             {{ ucfirst($module['name']) }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('module_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label>Description</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" />
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6 @error('is_hidden') is-invalid @enderror">
                                <label class="display-block">Hidden ?</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_hidden" id="hidden_yes" value="1"
                                        {{ (($module->is_hidden ?? old('is_hidden')) == 1 ? "checked":"") }}>
                                    <label class="form-check-label" for="hidden_yes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="is_hidden" id="hidden_no" value="0"
                                        {{ (($module->is_hidden ?? old('is_hidden')) == 0 ? "checked":"") }}>
                                    <label class="form-check-label" for="hidden_no">No</label>
                                </div>
                                @error('is_hidden')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-sm-6 text-left m-t-20">
                                    <input type="hidden" name="id" value="{{ $moduleCart->id ?? '' }}" />
                                    <button type="submit" class="btn btn-primary submit-btn">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
