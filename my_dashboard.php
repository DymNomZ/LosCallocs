
<?php    
    require_once 'includes/header.php'; 
?>

<body class="min-h-screen bg-[#343f57] m-0 flex flex-col text-white font-serif overflow-hidden">
        <header class="h-20 flex px-6 py-4 bg-[#485268] border-0 border-b-2 border-[#f5e6ca] border-solid">
            <img src="./assets/logo.png" alt="" class="rounded-full border-[#f5e6ca] h-full aspect-square">
            <h2 class="ml-5 text-2xl my-auto font-semibold">SIMS: Store Inventory Management System</h2>
        </header>
        <div class="flex-grow flex justify-center items-center font-sans">
            <div class="bg-[#485268] border border-[#737a8c] border-solid rounded-lg py-7 px-12 flex flex-col min-w-[70vw]">
                <h2 class="text-2xl text-[#fbf4e7] text-center mb-14 font-bold">Project Graphs</h2>
                <div class="grid grid-cols-2">
                    <div class=" flex flex-col items-center">
                        <h2 class="text-xl text-[#fbf4e7] mb-3 font-bold">Employee Positions</h2>
                        <div class="w-5/6"><canvas id="positionChart"></canvas></div>
                    </div>
                    <div  class=" flex flex-col items-center">
                        <h2 class="text-xl text-[#fbf4e7] mb-3 font-bold">Products Sold by Category</h2>
                        <div class="w-5/6"><canvas id="soldChart"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
        <img class="w-full h-full absolute top-20 -z-30 max-w-screen-xl" src="./assets/about.png">
        <div class="h-10 bg-[#2b313d] bg-opacity-65 border-slate-800 border-0 border-solid border-t backdrop-blur-xl flex text-center items-center">
            <p class="mx-auto text-lg">John Zillion Reyes | BSCS - 2</p>
        </div>
        <script src="js/chart-min.js"></script>
        
        <script>
            const positionData = [
                <?php 
                require_once 'connection.php';

                    $res = $connection->query("SELECT position, COUNT(*) AS number FROM tblemployee GROUP BY position");

                    while ($row = $res->fetch_assoc()):
                    ?>
                    {name: "<?=ucfirst($row['position'])?>", number: <?=$row['number']?>},
                <?php endwhile; ?>
            ]
            const soldData = [
                <?php 
                require_once 'connection.php';

                    $res = $connection->query("SELECT category, SUM(number_sold) AS number FROM tblproduct GROUP BY category");

                    while ($row = $res->fetch_assoc()):
                    ?>
                    {name: "<?=ucfirst($row['category'])?>", number: <?=$row['number']?>},
                <?php endwhile; ?>
            ]
        </script>

        <script src="js/my_dashboard.js"></script>
    </body>
</html>