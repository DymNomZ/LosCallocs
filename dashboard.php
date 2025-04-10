
<?php    
    include 'connection.php';
    include 'readrecords.php';   
    require_once 'includes/header.php'; 
?>

<body class="min-h-screen bg-[#343f57] m-0 flex flex-col text-white font-serif overflow-hidden">
        <header class="h-20 flex px-6 py-4 bg-[#485268] border-0 border-b-2 border-[#f5e6ca] border-solid">
            <img src="./assets/logo.png" alt="" class="rounded-full border-[#f5e6ca] h-full aspect-square">
            <h2 class="ml-5 text-2xl my-auto font-semibold">SIMS: Store Inventory Management System</h2>
        </header>
        <div class="flex-grow flex justify-center items-center font-sans">
            <div class="bg-[#485268] border border-[#737a8c] border-solid rounded-lg py-7 px-12 flex flex-col">
                <h2 class="text-2xl text-[#fbf4e7] text-center mb-3 font-bold">List of Students</h2>

                <div class="grid grid-cols-2 my-2 gap-5">
                    <button class="text-black bg-[#f7ecd6] border-0 px-3 py-1 rounded-2xl cursor-pointer"><a href="register.php?add=1">Add New Student</a></button>
                    <button class="text-black bg-[#f7ecd6] border-0 px-5 py-1 rounded-2xl cursor-pointer"><a href="logout.php">Logout</a></button>
                </div> 

                <div>        
                    <table id="tblCustomerRecords " class="table border rounded-2xl" cellspacing="0" width="100%"> 
                        <thead>
                            <tr> 
                                <th>ID Number</th> 
                                <th>Firstname</th> 
                                <th>Lastname</th>
                                <th>Program</th>                     
                                <th>Action</th>
                            </tr> 
                        </thead>  
                        <tbody>
                            <?php
                                while($row = $resultset->fetch_assoc()):
                                    $id = $row['uid'];
                            ?>
                            <tr>
                                <td><?php echo $id ?></td>
                                <td><?php echo $row['firstname'] ?></td>
                                <td><?php echo $row['lastname'] ?></td>
                                <td><?php echo $row['program'] ?></td> 
                                <td><button><a href="register.php?update=<?=$id?>">UPDATE</a></button> | <button><a href="delete.php?id=<?=$id?>">DELETE</a></button></td>
                            </tr>
                            <?php endwhile;?>
                        </tbody>         
                    </table>
                    
                </div>
            </div>
        </div>
        <img class="w-full h-full absolute top-20 -z-30 max-w-screen-xl" src="./assets/about.png">
        <div class="h-10 bg-[#2b313d] bg-opacity-65 border-slate-800 border-0 border-solid border-t backdrop-blur-xl flex text-center items-center">
            <p class="mx-auto text-lg">John Zillion Reyes | BSCS - 2</p>
        </div>
    </body>
</html>