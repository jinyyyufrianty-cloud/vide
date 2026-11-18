@include('layouts.header')

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .gallery-container {
        animation: fadeIn 1.2s ease-out forwards;
    }
    .gallery-card {
        transition: transform 0.35s ease, box-shadow 0.35s ease, border-color 0.35s ease;
    }
    .gallery-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 28px rgba(220, 38, 38, 0.45);
        border-color: rgba(220, 38, 38, 0.85) !important;
    }
    .gallery-card img {
        transition: transform 0.5s ease;
    }
    .gallery-card:hover img {
        transform: scale(1.05);
    }
</style>

<!-- Padding atas dinaikkan jadi 95px agar tidak tertutup pil navigasi melayang -->
<div style="background: radial-gradient(circle at 50% 25%, rgba(153, 27, 27, 0.32) 0%, rgba(30, 10, 15, 0.88) 45%, #050304 100%), #080305; color: #e5e7eb; padding: 95px 20px 100px 20px; font-family: 'Georgia', serif; min-height: 80vh;">
    <div class="gallery-container" style="max-width: 950px; margin: 0 auto; text-align: center;">
        
        <h2 style="font-size: 26px; font-weight: normal; color: #f8fafc; margin-bottom: 10px; letter-spacing: 4px; text-transform: uppercase; text-shadow: 0 0 12px rgba(220, 38, 38, 0.6);">
            Shadow Gallery
        </h2>
        <p style="color: #9ca3af; font-size: 14px; margin-bottom: 35px; letter-spacing: 0.8px;">
            A curated archive of fleeting moments.
        </p>
        
        <!-- Grid Galeri dengan Looping -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 25px; margin-top: 20px;">
            @foreach($galeri as $item)
                <div class="gallery-card" style="border: 1px solid rgba(220, 38, 38, 0.45); padding: 15px; border-radius: 10px; background: rgba(15, 8, 12, 0.92); text-align: left;">
                    <div style="overflow: hidden; border-radius: 6px; margin-bottom: 14px; height: 280px; background: #000;">
                        <img src="{{ $item['url'] }}" alt="{{ $item['judul'] }}" style="width: 100%; height: 100%; object-fit: cover;filter: contrast(110%) brightness(88%);">
                    </div>
                    <h4 style="color: #fca5a5; font-size: 15px; margin: 0 0 5px 0; font-weight: normal; letter-spacing: 0.8px;">{{ $item['judul'] }}</h4>
                    <p style="color: #888; font-size: 12px; margin: 0; font-style: italic;">Memory Archive</p>
                </div>
            @endforeach
        </div>
        
    </div>
</div>

@include('layouts.footer')