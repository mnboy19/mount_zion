@extends('layouts.app')

@section('content')
    <div>
        <img class="sun" src="{{ asset('img/grain.jpg') }}" alt="">
    </div>

    <div class="corp" id="page_content">
        <div>
            <iframe width="482" height="296"
                src="https://www.youtube.com/embed/tgbNymZ7vqY">
            </iframe>
            {{-- <input type="url" name="" class="url"> --}}
        </div>

        <div class="content_up_right">
            <h2>
                <ul>Live Streaming Services</ul>
            </h2>
            <h3>With Brother Boris N.</h3>
            <h4>This Friday at 7:30</h4>
            <h4>And Sunday at 1:30</h4>
            <br>
            <hr>
            <p>
                <i class="free">
                    Feel free to join us online 30 minutes before the service starts with your bible in meditation.
                </i>
            </p>
        </div>
    </div>

@endsection