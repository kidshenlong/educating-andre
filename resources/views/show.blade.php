@include('header')
    <div id="container">
        <a href="/andreism/{{ $id }}" target="_blank">
            <div>
                <p>That time Andre...</p>
                <p>{{ $story }}</p>
                <p id="author_sub">{{ $author }}</p>
            </div>
        </a>
    </div>
@include('footer')