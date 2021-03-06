@extends('layouts.primary')

@section('page_body')
<div class="container mt-5 col-md-8">

        <!-- Outer Row -->
        <div class="row clearfix justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row clearfix justify-content-center">
                            {{--<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>--}}
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
{!! Form::open(['route' => ['login'], 'method' => 'post']) !!}
    <div class="form-group">
      {{ Form::text('email', Null, ['class' => 'form-control form-control-user', 'id' => 'email', 'aria-describedby' => 'emailHelp', 'placeholder' => 'Enter Email Address...']) }}
    </div>

    <div class="form-group">
        {{ Form::password('password', ['class' => 'form-control form-control-user', 'id' => 'password', 'placeholder' => 'Enter Password']) }}
    </div>

    {{--<div class="form-group">
                <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Remember
                        Me</label>
                </div>
            </div>--}}

            <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>

{!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

</div>
@stop