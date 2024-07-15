<!-- resources/views/footer.blade.php -->

<footer>
    <!-- Info Bar -->
    <div class="info-bar">
        @foreach
            <div class="info-item">
                <img src="{{ asset($item['icon']) }}" alt="{{ $item['alt'] }}">
                <span>{{ $item['text'] }}</span>
            </div>
        @endforeach
    </div>

    <!-- Footer Content -->
    <div class="footer-content">
        @foreach ($footerSections as $section)
            <div class="footer-section">
                <h4>{{ $section['title'] }}</h4>
                <ul>
                    @foreach ($section['items'] as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>

    <!-- Signup Section -->
    <div class="signup flex-follow">
        <button>SIGN-UP NOW!</button>

        <div class="social-media flex-social">
            <span>FOLLOW US</span>
            <img src="{{ asset('assets/img/footer-twitter.png') }}" alt="Twitter" class="SocialIcon">
            <img src="{{ asset('assets/img/footer-facebook.png') }}" alt="Facebook" class="SocialIcon">
            <img src="{{ asset('assets/img/footer-youtube.png') }}" alt="YouTube" class="SocialIcon">
        </div>
    </div>
</footer>

@push('styles')
<link href="{{ asset('css/footer.css') }}" rel="stylesheet">
@endpush
