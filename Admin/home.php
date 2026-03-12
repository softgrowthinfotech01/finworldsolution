<?php
session_start();
require_once "conn.php";
require_once "check_login.php";

/* Total Cases */
$stmt_total = $conn->prepare("SELECT COUNT(*) as total_cases FROM cases");
$stmt_total->execute();
$row_total = $stmt_total->fetch(PDO::FETCH_ASSOC);
extract($row_total);

/* Open Cases */
$stmt_open = $conn->prepare("SELECT COUNT(*) as open_cases FROM cases WHERE status='open'");
$stmt_open->execute();
$row_open = $stmt_open->fetch(PDO::FETCH_ASSOC);
extract($row_open);

/* Closed Cases */
$stmt_closed = $conn->prepare("SELECT COUNT(*) as closed_cases FROM cases WHERE status='closed'");
$stmt_closed->execute();
$row_closed = $stmt_closed->fetch(PDO::FETCH_ASSOC);
extract($row_closed);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,admin templates, admin template, admin dashboard, free tailwind templates, tailwind example">
    <!-- Css -->
    <link rel="stylesheet" href="../style.css">
    <title>Dashboard</title>


    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />

</head>

<body>
    <!--Container -->
    <div class="mx-auto">
        <!--Screen-->
        <div class="flex flex-col">
            <!--Header Section Starts Here-->
            <?php include "header.php"; ?>
            <!--/Header-->

            <div class="flex">
                <!--Sidebar-->
                <?php include 'sidebar.php'; ?>
                <!--/Sidebar-->

                <!--Main-->
                <div class="flex-1">
                    <div class="w-full md:w-[90%] lg:w-[80%] mx-auto my-6 px-3 md:px-0">

                        <!-- GRID WRAPPER -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2">

                            <a href="#" class="rounded-lg bg-red-500 hover:bg-red-400
                            p-6 border border-default rounded-base shadow-xs h-full flex flex-col">

                            <h5 class="mb-3 text-xl md:text-2xl font-semibold tracking-tight text-heading leading-8">
                            Total Cases
                            </h5>

                            <p class="text-body mt-auto text-lg font-semibold">
                            <?php echo $total_cases; ?>
                            </p>

                            </a>

                            <a href="#" class="rounded-lg bg-green-500 hover:bg-green-400
                            p-6 border border-default rounded-base shadow-xs h-full flex flex-col">

                            <h5 class="mb-3 text-xl md:text-2xl font-semibold tracking-tight text-heading leading-8">
                            Open Cases
                            </h5>

                            <p class="text-body mt-auto text-lg font-semibold">
                            <?php echo $open_cases; ?>
                            </p>

                            </a>

                            <a href="#" class="rounded-lg bg-blue-500 hover:bg-blue-400
                            p-6 border border-default rounded-base shadow-xs h-full flex flex-col">

                            <h5 class="mb-3 text-xl md:text-2xl font-semibold tracking-tight text-heading leading-8">
                            Closed Cases
                            </h5>

                            <p class="text-body mt-auto text-lg font-semibold">
                            <?php echo $closed_cases; ?>
                            </p>

                            </a>

                        </div>
                    </div>
                    <!--/Main-->
                </div>
            </div>
            <!--Footer-->
            <?php include 'footer.php'; ?>
            <!--/footer-->

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</body>

</html>