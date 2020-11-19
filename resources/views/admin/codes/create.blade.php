@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.code.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.codes.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="coupon_id">{{ trans('cruds.code.fields.coupon') }}</label>
                <select class="form-control select2 {{ $errors->has('coupon') ? 'is-invalid' : '' }}" name="coupon_id" id="coupon_id" required>
                    @foreach($coupons as $id => $coupon)
                        <option value="{{ $id }}" {{ old('coupon_id') == $id ? 'selected' : '' }}>{{ $coupon }}</option>
                    @endforeach
                </select>
                @if($errors->has('coupon'))
                    <div class="invalid-feedback">
                        {{ $errors->first('coupon') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.code.fields.coupon_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.code.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', '') }}" required>
                @if($errors->has('code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.code.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="reserved_at">{{ trans('cruds.code.fields.reserved_at') }}</label>
                <input class="form-control datetime {{ $errors->has('reserved_at') ? 'is-invalid' : '' }}" type="text" name="reserved_at" id="reserved_at" value="{{ old('reserved_at') }}">
                @if($errors->has('reserved_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('reserved_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.code.fields.reserved_at_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="reserved_by_id">{{ trans('cruds.code.fields.reserved_by') }}</label>
                <select class="form-control select2 {{ $errors->has('reserved_by') ? 'is-invalid' : '' }}" name="reserved_by_id" id="reserved_by_id">
                    @foreach($reserved_bies as $id => $reserved_by)
                        <option value="{{ $id }}" {{ old('reserved_by_id') == $id ? 'selected' : '' }}>{{ $reserved_by }}</option>
                    @endforeach
                </select>
                @if($errors->has('reserved_by'))
                    <div class="invalid-feedback">
                        {{ $errors->first('reserved_by') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.code.fields.reserved_by_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="purchased_at">{{ trans('cruds.code.fields.purchased_at') }}</label>
                <input class="form-control datetime {{ $errors->has('purchased_at') ? 'is-invalid' : '' }}" type="text" name="purchased_at" id="purchased_at" value="{{ old('purchased_at') }}">
                @if($errors->has('purchased_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('purchased_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.code.fields.purchased_at_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="purchased_by_id">{{ trans('cruds.code.fields.purchased_by') }}</label>
                <select class="form-control select2 {{ $errors->has('purchased_by') ? 'is-invalid' : '' }}" name="purchased_by_id" id="purchased_by_id">
                    @foreach($purchased_bies as $id => $purchased_by)
                        <option value="{{ $id }}" {{ old('purchased_by_id') == $id ? 'selected' : '' }}>{{ $purchased_by }}</option>
                    @endforeach
                </select>
                @if($errors->has('purchased_by'))
                    <div class="invalid-feedback">
                        {{ $errors->first('purchased_by') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.code.fields.purchased_by_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection