<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Case</title>
    <link rel="stylesheet" href="../style.css">
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
                <!--Main-->
                <div id="mainContent"
                    class="w-full md:w-[80%] lg:w-[60%] mx-3 md:mx-auto my-4
transition-all duration-300
rounded-lg bg-gray-200 p-6 border shadow-xl">

                    <form class="w-full px-4" method="post" id="userForm" enctype="multipart/form-data">

                        <div class="personal-details">
                            <h5 class="text-xl font-bold text-heading p-1">Add Case Details</h5>

                            <div class="grid grid-cols-1 md:grid-cols-2">

                                <div class="mb-5 px-1">
                                    <label for="name" class="block mb-2.5 text-sm font-medium text-heading">Full Name</label>
                                    <input name="name" type="text" id="name"
                                        class="rounded-lg bg-neutral-secondary-medium border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
                                        placeholder="Enter your name" required />
                                </div>

                                <div class="mb-5 px-1">
                                    <label for="age" class="block mb-2.5 text-sm font-medium text-heading">Phone Number</label>
                                    <input name="age" type="text" maxlength="2" pattern="[0-9]{2}" inputmode="numeric"
                                        id="age"
                                        class="rounded-lg bg-neutral-secondary-medium border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
                                        placeholder="Enter your age" required />
                                </div>

                              

                                   <div class="mb-5 px-1">
                                    <label for="address" class="block mb-2.5 text-sm font-medium text-heading">Address</label>
                                    <input name="address" type="text" id="address"
                                        class="rounded-lg bg-white border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
                                        placeholder="Enter address" required />
                        
                                    </div>

                                    
                                   <div class="mb-5 px-1">
                                    <label for="date" class="block mb-2.5 text-sm font-medium text-heading">Date</label>
                                    <input name="date" type="date" id="date"
                                        class="rounded-lg bg-white border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
                                        placeholder="select date" required />
                        
                                    </div>

                            </div>
                        </div>

                        <hr class="border-white-300 mb-3">

                       

                   

                        <hr class="border-white-300 mb-3">

                        <!-- Bank Details -->

                   


                        <div class="flex justify-center gap-3">

                            <button type="submit"
                                class="w-full md:w-[20%] text-white bg-blue-600 hover:bg-blue-500 rounded-lg text-sm px-4 py-2.5">
                                Save
                            </button>

                            <button type="button"
                                onclick="confirmReset()"
                                class="w-full md:w-[20%] text-gray-700 bg-white hover:bg-gray-200 rounded-lg text-sm px-4 py-2.5">
                                Reset
                            </button>

                        </div>

                    </form>
                </div>
                <!--/Main-->
            </div>
            <!--Footer-->
            <?php include 'footer.php'; ?>
            <!--/footer-->

        </div>

    </div>

    


</body>

</html>