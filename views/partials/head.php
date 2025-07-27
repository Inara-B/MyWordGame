<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu Bar Example</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: linen;
        }
        nav.menu-bar {
            background: #22223b;
            padding: 0 24px;
            height: 60px;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 8px #0001;
        }
        .menu-bar .logo {
            height: 40px;
            margin-right: 32px;
        }
        .menu-bar .menu-links {
            display: flex;
            gap: 24px;
        }
        .menu-bar .menu-link {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
            padding: 8px 16px;
            border-radius: 6px;
            transition: background 0.2s, color 0.2s;
        }
        .menu-bar .menu-link.active,
        .menu-bar .menu-link:hover {
            background: #4a4e69;
            color: #f2e9e4;
        }
    </style>
    </head>