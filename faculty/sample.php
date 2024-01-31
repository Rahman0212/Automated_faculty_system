<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Dashboard</title>
    <link rel="stylesheet" href="./sample.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>

    </style>
</head>

<body>
    <div id="sidebar">
        <a style="margin-top:-30px" href=""><i class="fa-solid fa-gauge"></i> Dashboard</a>
        <a href="./admindash.php"><i class="fa-solid fa-file-contract"></i> View Bidding</a>
        <a href="./studentdash.php"><i class="fa-solid fa-users"></i> View Users</a>
        <a href="./registration.php"><i class="fa-solid fa-envelope"></i> Messages</a>
        <a href="./staffdash.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
    </div>

    <div id="content">
        <header>
            <h1>Admin Dashboard</h1>
        </header>

        <!-- <div class="dashboard">
            <div class="card">
                <div class="icon">🛍</div>
                <div class="count">100</div>
                <div class="label">Bidding</div>
            </div>

            <div class="card">
                <div class="icon">👥</div>
                <div class="count">50</div>
                <div class="label">Staff</div>
            </div>

            <div class="card">
                <div class="icon">👤</div>
                <div class="count">500</div>
                <div class="label">Users</div>
            </div>

            <div class="card">
                <div class="icon">💬</div>
                <div class="count">200</div>
                <div class="label">Messages</div>
            </div>

            <div class="card">
                <div class="icon">📦</div>
                <div class="count">300</div>
                <div class="label">Products</div>
            </div>
        </div>
    </div> -->

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebarLinks = document.querySelectorAll('#sidebar a');
            const contentArea = document.getElementById('content');

            sidebarLinks.forEach(link => {
                link.addEventListener('click', (event) => {
                    event.preventDefault();
                    const pageName = link.getAttribute('href');
                    fetch(pageName)
                        .then(response => response.text())
                        .then(data => {
                            contentArea.innerHTML = data;
                        })
                        .catch(error => console.error('Error fetching content:', error));
                });
            });
        });

    </script>
</body>

</html>
<!-- <?php
if (isset($_POST['logout'])) {
    echo "<script>window.location.href='index.php'</script>";
}
?> -->