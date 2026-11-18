<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nocturne by Jini</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            margin: 0;
            padding: 0;
            background-color: #09090b;
            color: #f3f4f6;
            font-family: 'Georgia', serif;
        }
        .nav-link {
            color: #f3f4f6;
            margin: 0 14px;
            text-decoration: none;
            letter-spacing: 1.5px;
            transition: color 0.3s ease, text-shadow 0.3s ease;
        }
        .nav-link:hover {
            color: #ef4444;
            text-shadow: 0 0 8px rgba(239, 68, 68, 0.8);
        }
        .cta-btn {
            display: inline-block;
            margin-top: 24px;
            padding: 12px 30px;
            border: 1px solid #991b1b;
            background: rgba(139, 0, 0, 0.25);
            color: #f3f4f6;
            text-decoration: none;
            letter-spacing: 2.5px;
            font-size: 13px;
            text-transform: uppercase;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        .cta-btn:hover {
            background: #8b0000;
            box-shadow: 0 0 18px rgba(220, 38, 38, 0.7);
        }
    </style>
</head>
<body>

    <!-- HEADER: Judul Utama & Navigasi Melayang ke Bawah Garis Merah -->
    <header style="position: relative; background: #09090b; border-bottom: 2px solid #8b0000; padding: 28px 0; text-align: center; box-shadow: 0 4px 20px rgba(139, 0, 0, 0.4); z-index: 10;">
        <h2 style="margin: 0; font-size: 22px; font-weight: bold; letter-spacing: 5px; color: #f3f4f6; text-shadow: 0 0 12px rgba(220, 38, 38, 0.8);">
            NOCTURNE BY JINI
        </h2>

        <nav style="position: absolute; left: 50%; bottom: -55px; transform: translateX(-50%); background: rgba(9, 9, 11, 0.65); backdrop-filter: blur(6px); border: 1px solid rgba(139, 0, 0, 0.55); border-radius: 30px; padding: 10px 26px; font-size: 13px; white-space: nowrap; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.7);">
            <a href="{{ url('/') }}" class="nav-link">Welcome</a>
            <span style="color: #6b7280;">|</span>
            <a href="{{ url('/about') }}" class="nav-link">About Me</a>
            <span style="color: #6b7280;">|</span>
            <a href="{{ url('/gallery') }}" class="nav-link">Gallery</a>
        </nav>
    </header>

    <!-- HERO SECTION: Background Kastil & Bulan Merah -->
<!-- HERO SECTION: Background Kastil & Bulan Merah -->
    <main style="min-height: calc(100vh - 82px); background-image: linear-gradient(to bottom, rgba(9, 9, 11, 0.45), rgba(9, 9, 11, 0.85)), url('/galery01.jpeg'); background-size: cover; background-position: center 35%; background-attachment: fixed; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; padding: 110px 20px 60px;">        
        <div style="max-width: 650px; background: rgba(9, 9, 11, 0.45); backdrop-filter: blur(4px); border: 1px solid rgba(139, 0, 0, 0.35); padding: 40px 32px; border-radius: 8px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.8);">
            <p style="margin: 0 0 12px; font-size: 12px; letter-spacing: 4px; color: #f87171; text-transform: uppercase;">
                Welcome to the Shadows
            </p>
            <h1 style="margin: 0 0 16px; font-size: 34px; letter-spacing: 3px; color: #ffffff; text-shadow: 0 0 15px rgba(220, 38, 38, 0.6);">
                Beneath the Crimson Moon
            </h1>
            <p style="margin: 0; font-size: 15px; line-height: 1.8; color: #d1d5db;">
                A personal sanctuary of midnight thoughts, dark aesthetics, and curated visual fragments. Step inside and explore the story behind the veil.
            </p>
            <a href="{{ url('/about') }}" class="cta-btn">Enter the Realm</a>
        </div>

    </main>

</body>
</html>