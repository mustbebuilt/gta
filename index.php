<?php
ini_set('display_errors', 1);
// echo getenv('APP_URL');
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


require_once __DIR__ . '/config/footer.php';
require_once __DIR__ . '/config/database.php';

echo getenv('MAIL_HOST');

echo "Current directory is: " . __DIR__ . "<br>";
echo "Files found in root:<br>";
print_r(scandir(__DIR__));


// print_r($pdo
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A PHP application deployed with IONOS Deploy Now.">
    <title>MBB | IONOS Deploy Now</title>
    <style>
        :root {
            --ink: #17242a;
            --muted: #617077;
            --paper: #f5f7f4;
            --panel: #ffffff;
            --accent: #d94f3d;
            --accent-dark: #a83227;
            --line: #d9e1dd;
            --shadow: 0 24px 70px rgba(23, 36, 42, 0.12);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-width: 320px;
            color: var(--ink);
            background: var(--paper);
            font-family: Georgia, 'Times New Roman', serif;
        }

        body::before {
            position: fixed;
            z-index: -1;
            inset: 0;
            content: '';
            opacity: 0.45;
            background-image: linear-gradient(rgba(23, 36, 42, 0.035) 1px, transparent 1px), linear-gradient(90deg, rgba(23, 36, 42, 0.035) 1px, transparent 1px);
            background-size: 36px 36px;
        }

        .page-shell {
            width: min(1120px, calc(100% - 40px));
            min-height: 100vh;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
        }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 28px 0;
            font-family: 'Trebuchet MS', sans-serif;
            font-size: 0.76rem;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .brand {
            font-weight: 700;
        }

        .brand-mark {
            color: var(--accent);
        }

        .deploy-label {
            color: var(--muted);
        }

        main {
            flex: 1;
            display: grid;
            align-items: center;
            grid-template-columns: minmax(0, 1.05fr) minmax(280px, 0.95fr);
            gap: clamp(48px, 9vw, 120px);
            padding: 54px 0 90px;
        }

        .eyebrow {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 0 0 22px;
            color: var(--accent-dark);
            font-family: 'Trebuchet MS', sans-serif;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
        }

        .eyebrow::before {
            width: 34px;
            height: 2px;
            content: '';
            background: var(--accent);
        }

        h1 {
            max-width: 650px;
            margin: 0;
            font-size: clamp(3.5rem, 7vw, 6.7rem);
            font-weight: 400;
            line-height: 0.92;
            letter-spacing: -0.04em;
        }

        .intro {
            max-width: 480px;
            margin: 30px 0 0;
            color: var(--muted);
            font-size: 1.18rem;
            line-height: 1.65;
        }

        .status-card {
            position: relative;
            overflow: hidden;
            padding: clamp(28px, 5vw, 52px);
            background: var(--panel);
            box-shadow: var(--shadow);
        }

        .status-card::after {
            position: absolute;
            right: -50px;
            bottom: -75px;
            width: 190px;
            height: 190px;
            border: 1px solid rgba(217, 79, 61, 0.25);
            border-radius: 50%;
            content: '';
        }

        .status-heading {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 0 0 34px;
            font-family: 'Trebuchet MS', sans-serif;
            font-size: 0.8rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .status-dot {
            width: 11px;
            height: 11px;
            border-radius: 50%;
            background: #39a86b;
            box-shadow: 0 0 0 5px rgba(57, 168, 107, 0.14);
        }

        .status-card h2 {
            max-width: 300px;
            margin: 0;
            font-size: clamp(2rem, 4vw, 3.3rem);
            font-weight: 400;
            line-height: 1;
        }

        .status-card p {
            position: relative;
            z-index: 1;
            margin: 22px 0 0;
            color: var(--muted);
            font-size: 1rem;
            line-height: 1.6;
        }

        footer {
            display: flex;
            justify-content: space-between;
            padding: 22px 0;
            border-top: 1px solid var(--line);
            color: var(--muted);
            font-family: 'Trebuchet MS', sans-serif;
            font-size: 0.75rem;
        }

        @media (max-width: 720px) {
            .page-shell {
                width: min(100% - 32px, 560px);
            }

            .topbar {
                padding: 22px 0;
            }

            .deploy-label {
                display: none;
            }

            main {
                grid-template-columns: 1fr;
                gap: 52px;
                padding: 54px 0 70px;
            }

            h1 {
                font-size: clamp(3.5rem, 18vw, 5.7rem);
            }

            .intro {
                margin-top: 24px;
                font-size: 1.05rem;
            }

            footer {
                gap: 16px;
                flex-wrap: wrap;
            }
        }
    </style>
</head>

<body>
    <div class="page-shell">
        <header class="topbar">
            <div class="brand"><span class="brand-mark">/</span> MBB</div>
            <div class="deploy-label">IONOS Deploy Now</div>
        </header>

        <main>
            <section aria-labelledby="page-title">
                <p class="eyebrow">PHP application</p>
                <h1 id="page-title">Hello,<br>nice world.</h1>
                <p class="intro">A clean starting point for building something useful, connected, and ready to deploy.</p>
            </section>

            <aside class="status-card" aria-label="Deployment status">
                <div class="status-heading"><span class="status-dot"></span> System status</div>
                <h2>Ready for your next idea.</h2>
                <p>Your PHP application is running successfully on IONOS Deploy Now.</p>
            </aside>
        </main>

        <footer>
            <span>Built with PHP</span>
            <span>v1.0 / 2026</span>
        </footer>
    </div>
</body>

</html>