@extends('layouts.app')
@section('content')
<div class="signup">
    <div class="left-signup">
      <form method="POST" action="{{ route('signup.post') }}">
        @csrf
        <div class="logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.4979 9.32833C8.07752 8.99239 8.58412 8.54393 8.9879 8.00933C8.85721 7.80757 8.76468 7.58352 8.7149 7.34833L8.6959 7.26033C8.64093 7.00932 8.51247 6.78036 8.3269 6.60263C8.14133 6.42489 7.90704 6.30643 7.6539 6.26233C5.5819 5.90233 5.5819 2.92833 7.6539 2.56733C7.89847 2.52486 8.12564 2.41288 8.30828 2.24478C8.49093 2.07667 8.62132 1.85955 8.6839 1.61933C8.19667 1.0884 7.60043 0.669058 6.93603 0.390032C6.27162 0.111006 5.55476 -0.021108 4.83454 0.00273871C4.11432 0.0265855 3.40776 0.20583 2.76327 0.528193C2.11878 0.850557 1.55159 1.30842 1.10055 1.87042C0.649502 2.43242 0.325268 3.08528 0.150052 3.78427C-0.0251626 4.48325 -0.0472171 5.21186 0.0853997 5.92017C0.218016 6.62847 0.502171 7.29974 0.918397 7.888C1.33462 8.47625 1.87309 8.96758 2.4969 9.32833V10.4973C2.4969 10.7626 2.60225 11.0169 2.78979 11.2044C2.97733 11.392 3.23168 11.4973 3.4969 11.4973H6.4969C6.76211 11.4973 7.01647 11.392 7.204 11.2044C7.39154 11.0169 7.4969 10.7626 7.4969 10.4973L7.4979 9.32833ZM2.4979 13.2473C2.4979 13.0484 2.57691 12.8577 2.71757 12.717C2.85822 12.5764 3.04898 12.4973 3.2479 12.4973H6.7479C6.94681 12.4973 7.13758 12.5764 7.27823 12.717C7.41888 12.8577 7.4979 13.0484 7.4979 13.2473C7.4979 13.4462 7.41888 13.637 7.27823 13.7777C7.13758 13.9183 6.94681 13.9973 6.7479 13.9973H3.2479C3.04898 13.9973 2.85822 13.9183 2.71757 13.7777C2.57691 13.637 2.4979 13.4462 2.4979 13.2473ZM9.7779 1.71433C9.9609 0.878334 11.1509 0.873334 11.3409 1.70733L11.3499 1.74733L11.3679 1.82533C11.4752 2.28241 11.7146 2.69785 12.0561 3.02002C12.3976 3.34218 12.8263 3.55685 13.2889 3.63733C14.1609 3.78933 14.1609 5.04133 13.2889 5.19333C12.8237 5.2743 12.3928 5.49091 12.0503 5.81596C11.7078 6.14101 11.469 6.56001 11.3639 7.02033L11.3409 7.12233C11.1509 7.95733 9.9599 7.95233 9.7759 7.11533L9.7569 7.02833C9.65608 6.56647 9.42001 6.14509 9.07877 5.81793C8.73753 5.49076 8.30659 5.27262 7.8409 5.19133C6.9699 5.04033 6.9699 3.79033 7.8409 3.63833C8.30496 3.55763 8.73465 3.34104 9.07554 3.01599C9.41644 2.69094 9.65322 2.27204 9.7559 1.81233L9.7709 1.74733L9.7779 1.71433Z"/>
            </svg>
        </div>
        <h1 class="title">Sign up</h1>
        <p class="subtitle">Your Adventure Begins Here</p>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="inputs">
            <input type="text" value="{{ @old('name') }}" placeholder="Full Name" name="name" />
            <input type="email" value="{{ @old('email') }}" placeholder="Email" name="email" />
            <input type="password" placeholder="Password" name="password" />
            <input type="password" placeholder="Confirm Password" name="password_confirmation" />
        </div>
        <button class="submit">Sign up</button>
        <label>Already have an account? <a class="link" href="{{ route('signin') }}">Sign in</a></label>
      </form>
    </div>
    <div class="right-signup">
      <img width={100} height={100} src="/imgs/signup_cover.png" draggable={false} alt="cover" class="cover" />
      <div class="content">
        <h1>Get started with SE Project</h1>
        <p>Sign up to start using SE Project and get access to all the features.</p>
      </div>
    </div>
  </div>
@endsection