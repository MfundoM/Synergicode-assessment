@extends('layout.app')

@section('content')
    <div>
        <form method="post" action="{{ route('contactus.store') }}">
            {{ csrf_field() }}
            <div>
                @if ($errors->any())
                    <div class="error-msg">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name.." value="{{ old('name') }}">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email.." value="{{ old('email') }}">

            <label for="message">Message</label>
            <textarea name="message" value="{{ old('message') }}"></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>
@endsection
