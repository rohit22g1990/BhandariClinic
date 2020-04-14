@extends('admin.layout')

@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form method="POST" action="{{ action('Admin\SettingController@create') }}" enctype="multipart/form-data">
                    @csrf
                    <h3 class="page-title">Clinic Settings</h3>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Clinic Name<span class="text-danger">*</span></label>
                                <input class="form-control @error('clinic_name') is-invalid @enderror" type="text" name="clinic_name" value="{{ old('clinic_name') ?? $setting['clinic_name'] }}">
                                @error('clinic_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Contact Person <span class="text-danger">*</span></label>
                                <input class="form-control @error('contact_person') is-invalid @enderror" name="contact_person" type="text" value="{{ old('contact_person') ?? $setting['contact_person'] }}">

                                @error('contact_person')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Address <span class="text-danger">*</span></label>
                                <textarea class="form-control @error('address') is-invalid @enderror" name="address" type="text">{{ old('address') ?? $setting['address'] }}</textarea>
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" value="{{ old('email') ?? $setting['email'] }}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input class="form-control @error('phone') is-invalid @enderror" name="phone" maxlength="10" type="text" value="{{ old('phone') ?? $setting['phone'] }}">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Mobile Number <span class="text-danger">*</span></label>
                                <input class="form-control @error('mobile') is-invalid @enderror" name="mobile" maxlength="10" type="text" value="{{ old('mobile') ?? $setting['mobile'] }}">
                                @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Emergency Contact Number <span class="text-danger">*</span></label>
                                <input class="form-control @error('emergency_contact_number') is-invalid @enderror"
                                       name="emergency_contact_number" maxlength="10"
                                       type="text" value="{{ old('emergency_contact_number') ?? $setting['emergency_contact_number'] }}">
                                @error('emergency_contact_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Fax</label>
                                <input class="form-control @error('fax') is-invalid @enderror" name="fax" type="text"
                                value="{{ old('fax') ?? $setting['fax'] }}">
                                @error('fax')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Clinic Logo</label>
                                <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" />
                                @error('logo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center m-t-20">
                            <input type="hidden" name="id" value="{{ $setting['id'] }}" />
                            <button type="submit" class="btn btn-primary submit-btn">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
