@include('layouts.header')

<style>
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .profile-wrapper {
        animation: fadeIn 1s ease-out forwards;
    }
    .photo-glow {
        box-shadow: 0 0 25px rgba(220, 38, 38, 0.45);
        border: 2px solid rgba(220, 38, 38, 0.6);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }
    .photo-glow:hover {
        transform: scale(1.02);
        box-shadow: 0 0 35px rgba(220, 38, 38, 0.75);
    }
</style>

<!-- Padding atas dinaikkan jadi 95px agar tidak bertabrakan dengan navigasi melayang -->
<div style="background: radial-gradient(circle at 50% 25%, rgba(153, 27, 27, 0.32) 0%, rgba(30, 10, 15, 0.88) 45%, #050304 100%), #080305; color: #fff; padding: 95px 20px 100px 20px; font-family: 'Georgia', serif; min-height: 80vh;">
    
    <div style="text-align: center; margin-bottom: 35px;">
        <h1 style="font-size: 26px; letter-spacing: 4px; font-weight: normal; color: #f8fafc; margin-bottom: 10px; text-transform: uppercase; text-shadow: 0 0 12px rgba(220, 38, 38, 0.6);">Character Profile</h1>
        <a href="{{ url('/') }}" style="color: #f87171; font-size: 13px; text-decoration: none; letter-spacing: 1.5px;">&lt; Back to home</a>
    </div>

    <!-- Main Card Container -->
    <div class="profile-wrapper" style="max-width: 850px; margin: 0 auto; background: rgba(15, 8, 12, 0.92); color: #e5e7eb; border: 1px solid rgba(220, 38, 38, 0.5); border-radius: 12px; padding: 35px; display: flex; flex-wrap: wrap; gap: 30px; align-items: center; box-shadow: 0 20px 40px rgba(0,0,0,0.9), 0 0 20px rgba(153, 27, 27, 0.25);">
        
        <!-- Kolom Kiri: Foto Profil & Badge NIM -->
        <div style="flex: 1; min-width: 250px; text-align: center;">
            <div class="photo-glow" style="border-radius: 10px; overflow: hidden; position: relative; background: #000; height: 350px;">
                <img src="{{ url('/profile.jpeg') }}" alt="Profile Photo" style="width: 100%; height: 100%; object-fit: cover;">
                
                <div style="position: absolute; bottom: 12px; left: 12px; right: 12px; background: rgba(10, 5, 8, 0.88); color: #f87171; padding: 8px; border-radius: 6px; font-family: monospace; font-size: 12px; font-weight: bold; letter-spacing: 1px; border: 1px solid rgba(220, 38, 38, 0.4);">
                    NIM: {{ $profil['nim'] }}
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: Informasi, Hobi, & Makanan -->
        <div style="flex: 1.5; min-width: 280px;">
            <h2 style="font-size: 22px; font-weight: normal; margin-bottom: 20px; border-bottom: 1px solid rgba(220, 38, 38, 0.35); padding-bottom: 12px; color: #f8fafc; letter-spacing: 1.5px;">
                {{ $profil['nama'] }}
            </h2>

            <div style="display: flex; gap: 30px; margin-bottom: 25px; flex-wrap: wrap;">
                <!-- Looping Hobbies -->
                <div style="flex: 1; min-width: 140px;">
                    <p style="font-size: 13px; color: #ef4444; font-weight: bold; margin-bottom: 8px; letter-spacing: 0.5px;">🎯 Hobbies</p>
                    <ul style="margin: 0; padding-left: 18px; font-size: 14px; color: #d1d5db;">
                        @foreach($profil['hobbies'] as $hobi)
                            <li style="margin-bottom: 6px;">{{ $hobi }}</li>
                        @endforeach
                    </ul>
                </div>

                <!-- Looping Favorite Food -->
                <div style="flex: 1; min-width: 140px;">
                    <p style="font-size: 13px; color: #ef4444; font-weight: bold; margin-bottom: 8px; letter-spacing: 0.5px;">🍜 Favorite Food</p>
                    <ul style="margin: 0; padding-left: 18px; font-size: 14px; color: #d1d5db;">
                        @foreach($profil['favorite_food'] as $food)
                            <li style="margin-bottom: 6px;">{{ $food }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <hr style="border: none; border-top: 1px solid rgba(220, 38, 38, 0.25); margin-bottom: 20px;">

            <!-- Bagian Socials -->
            <div style="display: flex; align-items: center; gap: 12px;">
                <span style="font-size: 13px; color: #9ca3af; font-weight: bold; text-transform: uppercase; letter-spacing: 1px;">Socials:</span>
                <span style="background: rgba(30, 10, 15, 0.9); border: 1px solid rgba(220, 38, 38, 0.45); padding: 6px 14px; border-radius: 6px; font-size: 13px; font-weight: 500; color: #f87171;">
                    {{ $profil['socials'] }}
                </span>
            </div>

        </div>

    </div>

</div>

@include('layouts.footer')