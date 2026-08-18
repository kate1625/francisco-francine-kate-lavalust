<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Home</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
            background: #fff;
            padding: 50px 40px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            text-align: center;
            max-width: 420px;
        }
        h1 {
            color: #1565c0;
            margin-bottom: 10px;
            font-size: 28px;
        }
        p {
            color: #555;
            margin-bottom: 30px;
            line-height: 1.5;
        }
        .nav a {
            display: inline-block;
            margin: 0 8px;
            padding: 12px 24px;
            background: #c02c15;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: background 0.2s;
        }
        .nav a:hover {
            background: #a1300d;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>🎓 Student Information System</h1>
        <p>Welcome! Click below to view the student profile.</p>
        <div class="nav">
            <a href="<?= site_url('student') ?>">Home</a>
            <a href="<?= site_url('student/profile') ?>">Student Profile</a>
        </div>
    </div>
</body>
</html>