<!DOCTYPE html>
<html>
<head>
    <title>Admin View - TNB Archiving</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: sans-serif; margin: 0; background: #f4f6f9; }
        .sidebar { width: 230px; background: #343a40; height: 100vh; position: fixed; color: #c2c7d0; }
        .sidebar a { display: block; padding: 15px 20px; color: #c2c7d0; text-decoration: none; }
        .sidebar a:hover, .sidebar a.active { background: #494e53; color: white; }
        .main { margin-left: 230px; padding: 30px; }
        .top-img { width: 400px; margin-bottom: 20px; }
        .admin-menu { border: 1px solid #ccc; background: white; width: 400px; margin-top: 30px; text-align: center; }
        .admin-menu th { padding: 10px; border-bottom: 1px solid #ccc; background: #f9f9f9; }
        .admin-menu td { padding: 10px; border: 1px solid #ccc; }
        .admin-menu a { color: #007bff; text-decoration: none; }
    </style>
</head>
<body>
    <div class="sidebar">
        <div style="padding:15px; text-align:center;">Welcome,</div>
        <a href="index-adm.php"><i class="fas fa-search"></i> Search Final Report</a>
        <a href="index2-adm.php"><i class="fas fa-folder"></i> Search Project File</a>
        <a href="insertchoose.php" class="active"><i class="fas fa-database"></i> Update Database</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> logout</a>
    </div>

    <div class="main">
        <!-- Top TNB Logo image -->
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/TNB_Headquarters.jpg/800px-TNB_Headquarters.jpg" class="top-img" style="height: 80px; object-fit: cover;" alt="TNB">
        
        <h2 style="color: #555; font-weight: normal; margin-top: 30px;">Admin View</h2>
        
        <table class="admin-menu">
            <tr>
                <th>Final Report</th>
                <th>Project File</th>
            </tr>
            <tr>
                <td><a href="form_final.php">New</a></td>
                <td><a href="form_file.php">New</a></td>
            </tr>
            <tr>
                <td><a href="list_final.php">Update</a></td>
                <td><a href="list_file.php">Update</a></td>
            </tr>
        </table>
        
        <div style="margin-top: 200px; text-align: right;">
            <button style="padding: 8px 15px; background: white; border: 1px solid #ccc;">Log Out</button>
        </div>
    </div>
</body>
</html>