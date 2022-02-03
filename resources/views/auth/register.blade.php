@extends('layouts.auth')

@section('content')

      <section>
        <div class="container py-3">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img
                    src="{{ asset('images/npcommision_wlcm.jpg') }}"
                    alt="NPCommision registration form"
                    class="img-fluid" style="border-radius: 1rem 0 0 1rem;"
                    />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body  text-black" style="background-color: #f8f1f9;">

                    @include('errors.error_message')


                    <form action="{{ route('register') }}" method="post">
                        @csrf

                        <div class="d-flex align-items-center pb-1">
                            <i class="fa fa-address-card fa-2x me-1" style="color: #3d1540;" aria-hidden="true"></i>
                            <span class="h1 fw-bold mb-0">NPCommision</span>
                        </div>

                        <h5 class="fw-normal pb-3" style="letter-spacing: 1px;">Register a citizen</h5>

                        <div class="form-outline mb-3">
                            <input type="name" id="name" name="name" value="{{ old('name') }}" 
                            required autocomplete="name" placeholder="Citizens name"
                            class="form-control form-control-md @error('name') border border-danger @enderror" />

                            <div class="text-danger" id="name_info"></div>

                            @error('name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-outline mb-3">
                            <select name="ward" class="form-control @error('ward') border border-danger @enderror" id="ward" required>
                                @if (isset($wards))
                                    @foreach ($wards as $ward)
                                        <option value="{{$ward->id}}">{{$ward->name}}</option>
                                    @endforeach
                                @endif
                            </select>

                            @error('ward')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="pb-2 mb-3">
                            <div class="form-outline">
                                <input type="text" name="gender" id="gender" placeholder="Citizens gender"
                                class="form-control form-control-md @error('gender') border border-danger @enderror" 
                                value="{{ old('gender') }}" required autocomplete="gender">

                                @error('gender')
                                    <div class="text-danger error">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 53.6px;"></div><div class="form-notch-trailing"></div></div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 pb-2">
                                <div class="form-outline">
                                    <input type="text" name="address" id="address" placeholder="Citizens address"
                                    class="form-control form-control-md @error('address') border border-danger @enderror" 
                                    value="{{ old('address') }}" required autocomplete="address">
                                    @error('address')
                                        <div class="text-danger error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68.8px;"></div><div class="form-notch-trailing"></div></div></div>
                            </div>

                            <div class="col-md-6 pb-2">
                                <div class="form-outline">
                                    <input type="text" name="state" id="state" placeholder="Citizens state"
                                    class="form-control form-control-md @error('state') border border-danger @enderror" 
                                    value="{{ old('password') }}" required autocomplete="state">
                                    @error('state')
                                        <div class="text-danger error">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 68.8px;"></div><div class="form-notch-trailing"></div></div></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3"> <button class="btn mirror-button-back-color-strong btn-md btn-block" type="submit">Register</button> </div>
                        </div>
                        
                        <a href="{{ route('terms') }}" class="small text-muted">Terms of use.</a>
                        <a href="{{ route('policy') }}" class="small text-muted">Privacy policy</a>
                    </form>

                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Simple script for checking if a citizen already exist - VIA name -->
    <script src="{{ asset('js/jquery.js') }}"></script>

    <script type="text/javascript">

        $("#name").on('keyup mouseup blur',function(event){
            $.ajax({
                url: "{{ route('checkname') }}",
                method: "POST",
                data: $('form').serialize(),
                success: function (data){
                    $("#name_info").html(data)
                }
            })
            event.preventDefault()
        })

    </script>

@endsection

