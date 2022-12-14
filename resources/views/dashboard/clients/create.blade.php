@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>@lang('site.clients')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li><a href="{{ route('dashboard.clients.index') }}"> @lang('site.clients')</a></li>
                <li class="active">@lang('site.add')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('site.add')</h3>
                </div><!-- end of box header -->
                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('dashboard.clients.store') }}" method="post">

                        {{ csrf_field() }}
                        {{ method_field('post') }}
{{--                        @foreach (config('translatable.locales') as $locale)--}}

{{--                        <div class="form-group">--}}
{{--                        @if(count(config('translatable.locales'))>1)--}}
{{--                                <label>@lang('site.' . $locale . '.name')</label>--}}
{{--                        @else--}}
{{--                        <label>@lang('site.name')</label>--}}
{{--                        @endif--}}
{{--                                <input type="text" name="{{ $locale }}[name]" class="form-control" value="{{ old($locale . '.name') }}">--}}
{{--                            </div>--}}

                      @for ($i = 0; $i < 2; $i++)
                            <div class="form-group ">
                                <label>@lang('site.phone')</label>
                                <input type="text" name="phone[]" class="form-control col-6">
                            </div>
                       @endfor

{{--                        <div class="form-group">--}}
{{--                        @if(count(config('translatable.locales'))>1)--}}
{{--                                <label>@lang('site.' . $locale . '.address')</label>--}}
{{--                        @else--}}
{{--                        <label>@lang('site.address')</label>--}}
{{--                        @endif--}}
{{--                                <input type="text" name="{{ $locale }}[address]" class="form-control" value="{{ old($locale . '.address') }}">--}}
{{--                            </div>--}}
{{--                            @endforeach--}}
                                {{-- under edit--}}

                            <div class="form-group col-6">
                            <label>@lang('site.name')</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                            </div>

                            <div class="form-group col-6">
                            <label>@lang('site.address')</label>
                            <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                            </div>

                               {{-- under edit--}}
{{--                        <div class="form-group">--}}
{{--                            <label>@lang('site.phone')</label>--}}
{{--                            <input type="text" name="phone[]" class="form-control" value="{{ old('phone') }}">--}}
{{--                            </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label>@lang('site.phone')</label>--}}
{{--                            <input type="text" name="phone[]" class="form-control" value="{{ old('phone1') }}">--}}
{{--                        </div>--}}

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
