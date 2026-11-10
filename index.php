<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archiving System · Main Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        body {
            background: linear-gradient(145deg, #f6f9fc 0%, #eef2f7 100%);
            min-height: 100vh;
            padding: 2rem 1.5rem;
            display: flex;
            align-items: flex-start;
            justify-content: center;
        }

        .app-container {
            max-width: 1200px;
            width: 100%;
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 40px;
            box-shadow: 0 30px 50px -20px rgba(0, 20, 40, 0.25), 
                        0 0 0 1px rgba(255, 255, 255, 0.7) inset;
            padding: 2.5rem;
        }

        /* Navigation */
        .main-nav {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(8px);
            padding: 0.6rem 1rem;
            border-radius: 60px;
            margin-bottom: 3rem;
            border: 1px solid rgba(255, 255, 255, 0.9);
            align-items: center;
            justify-content: space-between;
        }

        .nav-links { display: flex; gap: 6px; align-items: center; flex-wrap: wrap; }
        
        .nav-item {
            padding: 0.7rem 1.3rem;
            border-radius: 60px;
            font-weight: 500;
            font-size: 0.9rem;
            color: #1f4b6e;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.2s;
            border: 1px solid transparent;
        }

        .nav-item i { color: #2c7da0; }
        .nav-item:hover { background: rgba(255, 255, 255, 0.9); box-shadow: 0 4px 12px rgba(0,20,30,0.06); border-color: rgba(255,255,255,0.9); }
        .nav-item.active { background: white; box-shadow: 0 6px 14px -6px rgba(0,40,70,0.15); border-color: rgba(44,125,160,0.2); color: #0b2b4a; font-weight: 600; }

        .logout-item { background: #fef2f0; color: #b13e2c; border: 1px solid rgba(177, 62, 44, 0.1); margin-left: auto; }
        .logout-item i { color: #b13e2c; }
        .logout-item:hover { background: #ffe6e1; }

        /* Hero Section */
        .home-hero {
            text-align: center;
            padding: 1rem 1rem 2rem 1rem;
        }

        .home-hero h1 {
            font-size: 2.8rem;
            font-weight: 600;
            letter-spacing: -0.03em;
            background: linear-gradient(135deg, #0b2b4a, #1f4b6e);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 16px;
        }

        .home-hero h1 i {
            background: linear-gradient(145deg, #2b6c9e, #1a4a6e);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-size: 3rem;
        }

        .home-hero p {
            font-size: 1.1rem;
            color: #4a627a;
            margin-top: 12px;
        }

        /* Cards */
        .home-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .home-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(8px);
            border-radius: 32px;
            padding: 2rem 1.8rem;
            box-shadow: 0 8px 25px -10px rgba(0, 30, 50, 0.1), 0 0 0 1px rgba(255, 255, 255, 0.9) inset;
            transition: all 0.25s;
            border: 1px solid rgba(255, 255, 255, 0.7);
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            text-decoration: none;
            color: inherit;
        }

        .home-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 24px 32px -18px rgba(35, 80, 120, 0.2), 0 0 0 1px rgba(255, 255, 255, 1) inset;
            background: rgba(255, 255, 255, 0.95);
        }

        .icon-circle {
            width: 56px;
            height: 56px;
            border-radius: 20px;
            background: linear-gradient(135deg, #e2effa, #d0e5f5);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: #1e5a7a;
            margin-bottom: 1.5rem;
            box-shadow: 0 6px 12px -6px rgba(0, 40, 70, 0.1);
        }

        .home-card h3 {
            font-size: 1.4rem;
            font-weight: 600;
            color: #0b2b4a;
            margin-bottom: 0.6rem;
        }

        .home-card p {
            font-size: 0.9rem;
            color: #4a627a;
            line-height: 1.5;
            margin-bottom: 1.8rem;
            flex: 1;
        }

        .card-link {
            font-size: 0.9rem;
            font-weight: 600;
            color: #1e5a7a;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .home-card:hover .card-link i { transform: translateX(4px); }
        .card-link i { transition: transform 0.2s; }

        /* Logout Card Specific */
        .home-card.logout-card { background: rgba(254, 242, 240, 0.7); border-color: rgba(177, 62, 44, 0.15); }
        .home-card.logout-card:hover { background: rgba(254, 242, 240, 0.95); }
        .home-card.logout-card .icon-circle { background: linear-gradient(135deg, #ffe6e1, #ffd9d2); color: #b13e2c; }
        .home-card.logout-card h3 { color: #8a2e1e; }
        .home-card.logout-card .card-link { color: #b13e2c; }

        @media (max-width: 700px) {
            body { padding: 1rem; }
            .app-container { padding: 1.5rem; }
            .main-nav { flex-direction: column; align-items: stretch; }
            .nav-links { justify-content: center; }
            .logout-item { margin-left: 0; justify-content: center; }
            .home-hero h1 { font-size: 2rem; }
        }
    </style>
</head>
<body>

<div class="app-container">

    <!-- Navigation Bar -->
    <nav class="main-nav">
        <div class="nav-links">
            <a href="index.php" class="nav-item active"><i class="fas fa-house"></i> Home</a>
            <a href="index-adm.php" class="nav-item"><i class="fas fa-file-lines"></i> Search Final Report</a>
            <a href="index2-adm.php" class="nav-item"><i class="fas fa-folder-open"></i> Search Project File</a>
            <a href="insertchoose.php" class="nav-item"><i class="fas fa-pen-to-square"></i> Update Database</a>
        </div>
        <a href="logout.php" class="nav-item logout-item"><i class="fas fa-right-from-bracket"></i> Logout</a>
    </nav>

    <!-- Welcome Hero -->
    <div class="home-hero">
        <h1><i class="fas fa-folder-tree"></i> Archiving System</h1>
        <p>Welcome. Choose an action below to manage your project archive.</p>
    </div>

    <!-- The 4 Main Menu Cards -->
    <div class="home-cards">
        
        <!-- 1. Search Final Report -->
        <a href="index-adm.php" class="home-card">
            <div class="icon-circle"><i class="fas fa-file-lines"></i></div>
            <h3>Search Final Report</h3>
            <p>Browse and search all final reports by project number, leader, or year.</p>
            <span class="card-link">Go to reports <i class="fas fa-arrow-right"></i></span>
        </a>

        <!-- 2. Search Project File -->
        <a href="index2-adm.php" class="home-card">
            <div class="icon-circle"><i class="fas fa-folder-open"></i></div>
            <h3>Search Project File</h3>
            <p>Find project files, check availability, and view borrower information.</p>
            <span class="card-link">Go to files <i class="fas fa-arrow-right"></i></span>
        </a>

        <!-- 3. Update Database -->
        <a href="insertchoose.php" class="home-card">
            <div class="icon-circle"><i class="fas fa-pen-to-square"></i></div>
            <h3>Update Database</h3>
            <p>Add new project records or update existing files in the archive.</p>
            <span class="card-link">Go to update <i class="fas fa-arrow-right"></i></span>
        </a>

        <!-- 4. Logout -->
        <a href="logout.php" class="home-card logout-card">
            <div class="icon-circle"><i class="fas fa-right-from-bracket"></i></div>
            <h3>Logout</h3>
            <p>End your session securely and return to the login screen.</p>
            <span class="card-link">Logout now <i class="fas fa-arrow-right"></i></span>
        </a>

    </div>

</div>

</body>
</html>