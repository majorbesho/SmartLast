
@extends('frontend.layouts.master')


@section('content')




<div class="inner-hero-section style--five">
</div>

<div class="mt-minus-150 pb-120">
    <div class="container">
        {{-- <div class="row user-img">
            <div class="col-4  offset-md-6 offset-sm-0 col-md-6 col-sm-12 order-last ">

            </div>
        </div> --}}

        <div class="row">
            <div class="col-lg-4 ">
                <div class="user-card">
                    <div class="user-card user-prof">
                        <div class="avatar-upload">
                            <div class="obj-el">
                                <img src="{{asset('frontend4/assets/images/elements/team-obj.png')}}" alt="image">
                            </div>
                            <div class="avatar-edit">
                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                        </div>
                    </div>


                    <h3 class="user-card__name">{{$user->name}}</h3>

                </div>
                        <!-- user-card end -->
                        <div class="user-action-card">
                            <ul class="user-action-list">
                            @include('frontend.user.sidebar')
                            </ul>
                        </div>
                <!-- user-action-card end -->
            </div>


            <div class="col-lg-8 mt-lg-0 mt-5">
                {{-- {{ route('profile.update',auth()->id()) }} --}}

                <form action="{{route('editinfo',auth()->id())}}" method="POST">
                    @csrf
                <div class="user-info-card">
                    <div class="user-info-card__header">
                        <h3 class="user-info-card__title">Personal Details</h3>
                    </div>
                    <ul class="user-info-card__list">
                        <li>
                            <span class="caption">Name</span>
                            <input type="text" name="name"  placeholder="{{$user->name}}">
                        </li>
                        <li>
                            <span class="caption">Date of Birth</span>
                            <input type="date" name="dateOfbarth"  placeholder="{{$user->dateOfbarth}}">
                        </li>
                        <li>
                            <span class="caption">Address</span>
                            <input type="text" name="address"  placeholder="{{$user->address}}">
                        </li>
                        <li>
                            <span class="caption">nationality</span>
                            <input type="text" name="nationality"  placeholder="{{$user->nationality}}">
                        </li>
                        <li>
                            <span class="caption">phone</span>
                            <input type="text" name="phone"  placeholder="{{$user->phone}}">
                        </li>
                    </ul>
                </div>


                <!-- user-info-card end -->

                <!-- user-info-card end -->
                <div class="user-info-card">
                    <div class="user-info-card__header">
                        <h3 class="user-info-card__title">Email Addresses</h3>
                    </div>
                    <ul class="user-info-card__list">
                        <li>
                            <span class="caption">Email</span>
                            <span class="value"><a href=" " style="color: #000;">{{$user->email}}</a></span>
                        </li>
                    </ul>
                    <button type="submit" class="btn btn-success"><i class="far fa-edit"></i> Edit</button>
                </div>
            </form>



                <div class="user-info-card">
                    <div class="user-info-card__header">
                        <h3 class="user-info-card__title">Security</h3>
                    </div>
                    <ul class="user-info-card__list">
                        <li>
                            <label for="oldPasswordInput" class="form-label">Old Password</label>
                            <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                placeholder="Old Password">
                            @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </li>
                        <li>
                            <label for="newPasswordInput" class="form-label">New Password</label>
                            <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                placeholder="New Password">
                            @error('new_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </li>

                        <li>
                            <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                    <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                        placeholder="Confirm New Password">
                        </li>

                    </ul>
                </div>


            </div>


                <!-- user-info-card end -->

            </div>

        </div>
    </div>
</div>


@endsection
