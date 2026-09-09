<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>
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
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            max-width: 420px;
            width: 100%;
        }
        h1 {
            color: #1565c0;
            margin-bottom: 25px;
            text-align: center;
            font-size: 26px;
        }
        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #eee;
        }
        .info-row:last-of-type {
            border-bottom: none;
        }
        .label {
            font-weight: 600;
            color: #333;
        }
        .value {
            color: #555;
        }
        .nav {
            text-align: center;
            margin-top: 25px;
        }
        .nav a {
            display: inline-block;
            margin: 0 6px;
            padding: 10px 20px;
            background: #c01515;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            transition: background 0.2s;
        }
        .nav a:hover {
            background: #a1320d;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Student Information</h1>
        <div class="info-row"><span class="label">Student ID</span><span class="value"><?= $student_id ?></span></div>
        <div class="info-row"><span class="label">Name</span><span class="value"><?= $name ?></span></div>
        <div class="info-row"><span class="label">Course</span><span class="value"><?= $course ?></span></div>
        <div class="info-row"><span class="label">Year Level</span><span class="value"><?= $year ?></span></div>
        <div class="info-row"><span class="label">Section</span><span class="value"><?= $section ?></span></div>
        <div class="info-row"><span class="label">Email</span><span class="value"><?= $email ?></span></div>
        <div class="nav">
            <a href="<?= site_url('student') ?>">Home</a>
            <a href="<?= site_url('student/profile') ?>">Student Profile</a>
        </div>
    </div>
</body>
</html>