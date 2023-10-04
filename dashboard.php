<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <nav class="sidebar">
            <h2>Admin Dashboard</h2>
            <ul>
                <li><a href="#" class="active">Dashboard</a></li>
                <li><a href="#">Property Management</a></li>
                <li><a href="#">User Management</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </nav>

        <!-- Content -->
        <div class="content">
            <header>
                <h1>Welcome, Admin!</h1>
            </header>
            
            <section>
                <h2>Dashboard Overview</h2>
                <p>This is the dashboard overview section.</p>
            </section>
        </div>
    </div>
</body>
</html>
<style>body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    display: flex;
}

.sidebar {
    background: #333;
    color: #fff;
    padding: 20px;
    min-width: 250px;
}

.sidebar h2 {
    margin-bottom: 20px;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li {
    margin-bottom: 10px;
}

.sidebar ul li a {
    color: #fff;
    text-decoration: none;
    display: block;
}

.sidebar ul li a.active {
    font-weight: bold;
}

.content {
    flex: 1;
    padding: 20px;
}

header {
    margin-bottom: 20px;
}

section {
    padding: 20px;
    background: #f9f9f9;
    border-radius: 5px;
}
</style>