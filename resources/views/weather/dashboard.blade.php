<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Weather Dashboard</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
        }

        .header {
            background: #1f2937;
            color: white;
            padding: 25px;
            border-radius: 12px;
            margin-bottom: 25px;
        }

        .header h1 {
            margin: 0 0 8px;
        }

        .header p {
            margin: 0;
            color: #d1d5db;
        }

        .weather-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .location {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .weather-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .weather-item {
            background: #f8fafc;
            border-radius: 12px;
            padding: 25px;
            border: 1px solid #e5e7eb;
        }

        .weather-item .icon {
            font-size: 35px;
            margin-bottom: 10px;
        }

        .weather-item h3 {
            margin: 0 0 8px;
            color: #374151;
        }

        .weather-item p {
            margin: 0;
            font-size: 22px;
            font-weight: bold;
            color: #111827;
        }

        .back-button {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 20px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .back-button:hover {
            background: #1d4ed8;
        }

        @media (max-width: 600px) {
            .weather-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <h1> Weather Dashboard🌤️</h1>
        <p>Current weather information</p>
    </div>

    <div class="weather-card">

        <div class="location">
            📍 {{ $weather['location'] ?? 'Arakan, Philippines' }}
        </div>

        <div class="weather-grid">

            <div class="weather-item">
                <div class="icon">🌡️</div>
                <h3>Temperature</h3>
                <p>
                    {{ $weather['temperature'] ?? '--' }} °C
                </p>
            </div>

            <div class="weather-item">
                <div class="icon">☁️</div>
                <h3>Weather Condition</h3>
                <p>
                    {{ $weather['description'] ?? 'Unavailable' }}
                </p>
            </div>

            <div class="weather-item">
                <div class="icon">💧</div>
                <h3>Humidity</h3>
                <p>
                    {{ $weather['humidity'] ?? '--' }}%
                </p>
            </div>

            <div class="weather-item">
                <div class="icon">💨</div>
                <h3>Wind Speed</h3>
                <p>
                    {{ $weather['wind_speed'] ?? '--' }} m/s
                </p>
            </div>

        </div>

        <a href="{{ route('dashboard') }}" class="back-button">
            ← Back to Admin Dashboard
        </a>

    </div>

</div>

</body>
</html>