@include('includes.header')

<style>
.rb-work-detail-page {
    background-color: #f8fafc;
    padding: 60px 0 100px;
    font-family: 'Inter', sans-serif;
    color: #1e293b;
}

.rb-detail-container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Back Button */
.rb-back-link {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    color: #64748b;
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
    margin-bottom: 30px;
    transition: all 0.2s ease;
}
.rb-back-link:hover {
    color: #E31E24;
    transform: translateX(-4px);
    text-decoration: none;
}

/* Header Content Card */
.rb-work-header-card {
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(30, 41, 59, 0.05);
    padding: 40px;
    margin-bottom: 40px;
    border-left: 6px solid #E31E24;
    position: relative;
    overflow: hidden;
}
.rb-work-header-card::after {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 150px;
    height: 150px;
    background: radial-gradient(circle, rgba(227,30,36,0.03) 0%, rgba(255,255,255,0) 70%);
    pointer-events: none;
}

.rb-work-title {
    font-family: 'Playfair Display', serif;
    font-size: 38px;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 12px;
    line-height: 1.2;
}

.rb-work-tagline {
    font-size: 18px;
    font-weight: 600;
    color: #E31E24;
    font-style: italic;
    margin-bottom: 20px;
}

.rb-work-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 24px;
    padding-bottom: 20px;
    border-bottom: 1px solid #f1f5f9;
}

.rb-meta-item {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    color: #64748b;
}
.rb-meta-item strong {
    color: #334155;
}

.rb-work-desc {
    font-size: 16px;
    line-height: 1.8;
    color: #475569;
}

/* Main Image Display */
.rb-main-image-wrapper {
    background: #ffffff;
    border-radius: 16px;
    padding: 12px;
    box-shadow: 0 20px 40px rgba(30, 41, 59, 0.08);
    margin-bottom: 50px;
    overflow: hidden;
}
.rb-main-image {
    width: 100%;
    height: auto;
    max-height: 550px;
    object-fit: cover;
    border-radius: 12px;
    transition: transform 0.5s ease;
    display: block;
}
.rb-main-image-wrapper:hover .rb-main-image {
    transform: scale(1.01);
}

/* Gallery Section */
.rb-gallery-title {
    font-family: 'Playfair Display', serif;
    font-size: 28px;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 24px;
    position: relative;
    padding-bottom: 10px;
}
.rb-gallery-title::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 3px;
    background-color: #E31E24;
    border-radius: 2px;
}

.rb-gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 20px;
}
@media (max-width: 768px) {
    .rb-gallery-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}
@media (max-width: 480px) {
    .rb-gallery-grid {
        grid-template-columns: 1fr;
    }
}

.rb-gallery-item {
    background: #ffffff;
    border-radius: 12px;
    padding: 8px;
    box-shadow: 0 8px 20px rgba(30, 41, 59, 0.04);
    cursor: pointer;
    overflow: hidden;
    transition: all 0.3s ease;
}
.rb-gallery-item:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 30px rgba(30, 41, 59, 0.1);
}
.rb-gallery-img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
    display: block;
}

/* Lightbox Modal */
.rb-lightbox-modal {
    display: none;
    position: fixed;
    z-index: 99999;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(15, 23, 42, 0.95);
    align-items: center;
    justify-content: center;
}
.rb-lightbox-content {
    position: relative;
    max-width: 90%;
    max-height: 85%;
}
.rb-lightbox-img {
    max-width: 100%;
    max-height: 80vh;
    border-radius: 8px;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
    display: block;
    margin: 0 auto;
}
.rb-lightbox-close {
    position: absolute;
    top: -45px;
    right: 0;
    color: #ffffff;
    font-size: 35px;
    cursor: pointer;
    background: none;
    border: none;
    transition: color 0.2s ease;
}
.rb-lightbox-close:hover {
    color: #E31E24;
}
</style>

<div class="rb-work-detail-page">
    <div class="rb-detail-container">
        <!-- Back Button -->
        <a href="javascript:history.back()" class="rb-back-link">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
            Back to Our Work
        </a>

        <!-- 1. Work Details (Title, tagline, collaboration, description) -->
        <article class="rb-work-header-card">
            <h1 class="rb-work-title">{{ $work->title }}</h1>
            
            @if(!empty($work->tagline))
                <p class="rb-work-tagline">"{{ $work->tagline }}"</p>
            @endif

            <div class="rb-work-meta">
                <div class="rb-meta-item">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #E31E24;">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    <span>Status: <strong>{{ ucfirst($work->type) }} Initiative</strong></span>
                </div>
                
                @if(!empty($work->collaboration))
                    <div class="rb-meta-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #E31E24;">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <span>Collaborator: <strong>{{ $work->collaboration }}</strong></span>
                    </div>
                @endif
            </div>

            <div class="rb-work-desc">
                <div>{!! $work->description !!}</div>
            </div>
        </article>

        <!-- 2. Main Image Section -->
        <div class="rb-main-image-wrapper">
            <img src="{{ URL::asset('uploads/img/'.$work->image) }}" alt="{{ $work->title }}" class="rb-main-image" onerror="this.onerror=null;this.src='{{ URL::asset('uploads/img/404.png') }}';">
        </div>

        <!-- 3. Other/Gallery Images Section -->
        @if(!empty($work->gallery) && count($work->gallery) > 0)
            <section class="rb-gallery-section">
                <h2 class="rb-gallery-title">Gallery & Highlights</h2>
                <div class="rb-gallery-grid">
                    @foreach($work->gallery as $img)
                        <div class="rb-gallery-item" onclick="openLightbox('{{ URL::asset('uploads/img/'.$img) }}')">
                            <img src="{{ URL::asset('uploads/img/'.$img) }}" alt="{{ $work->title }}" class="rb-gallery-img" loading="lazy">
                        </div>
                    @endforeach
                </div>
            </section>
        @endif
    </div>
</div>

<!-- Lightbox Modal -->
<div id="rbLightbox" class="rb-lightbox-modal" onclick="closeLightbox()">
    <div class="rb-lightbox-content" onclick="event.stopPropagation()">
        <button class="rb-lightbox-close" onclick="closeLightbox()">&times;</button>
        <img id="rbLightboxImg" src="" alt="Lightbox image" class="rb-lightbox-img">
    </div>
</div>

<script>
function openLightbox(src) {
    const lightbox = document.getElementById('rbLightbox');
    const lightboxImg = document.getElementById('rbLightboxImg');
    lightboxImg.src = src;
    lightbox.style.display = 'flex';
    document.body.style.overflow = 'hidden'; // Disable page scrolling
}

function closeLightbox() {
    const lightbox = document.getElementById('rbLightbox');
    lightbox.style.display = 'none';
    document.body.style.overflow = 'auto'; // Enable page scrolling
}

// Close lightbox on Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeLightbox();
    }
});
</script>

@include('includes.footer')
