<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Leader</title>
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
                            <h5 class="text-xl font-bold text-heading p-1">Add Leader Details</h5>

                            <div class="grid grid-cols-1 md:grid-cols-2">

                                <div class="mb-5 px-1">
                                    <label for="name" class="block mb-2.5 text-sm font-medium text-heading">Full Name</label>
                                    <input name="name" type="text" id="name"
                                        class="rounded-lg bg-neutral-secondary-medium border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
                                        placeholder="Enter your name" required />
                                </div>

                                <div class="mb-5 px-1">
                                    <label for="age" class="block mb-2.5 text-sm font-medium text-heading">Age</label>
                                    <input name="age" type="text" maxlength="2" pattern="[0-9]{2}" inputmode="numeric"
                                        id="age"
                                        class="rounded-lg bg-neutral-secondary-medium border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
                                        placeholder="Enter your age" required />
                                </div>

                                <div class="mb-5 px-1">
                                    <label for="gender" class="block mb-2.5 text-sm font-medium text-heading">Gender</label>
                                    <select name="gender" id="gender"
                                        class="block w-full px-3 py-2.5 rounded-lg bg-white border border-default-medium text-heading text-sm shadow-xs">
                                        <option selected>Choose a gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>

                                <div class="mb-5 px-1">
                                    <label class="block mb-2.5 text-sm font-medium text-heading">Upload Image</label>
                                    <input id="file_input" name="image" accept=".jpg,.jpeg,.png"
                                        class="rounded-lg cursor-pointer bg-white border border-default-medium text-heading text-sm block w-full shadow-xs"
                                        type="file">
                                </div>

                            </div>
                        </div>

                        <hr class="border-white-300 mb-3">

                        <!-- Contact Details -->

                        <div>
                            <h5 class="text-xl font-bold text-heading p-1">Contact Details</h5>

                            <div class="grid grid-cols-1 md:grid-cols-2">

                                <div class="mb-5 px-1">
                                    <label for="mobile" class="block mb-2.5 text-sm font-medium text-heading">Mobile Number</label>
                                    <input name="contact_no" type="tel" maxlength="10" pattern="[0-9]{10}"
                                        id="mobile"
                                        class="rounded-lg bg-neutral-secondary-medium border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
                                        placeholder="Enter mobile number" required />
                                </div>

                                <div class="mb-5 px-1">
                                    <label for="email" class="block mb-2.5 text-sm font-medium text-heading">Email</label>
                                    <input name="email" type="email" id="email"
                                        class="rounded-lg bg-neutral-secondary-medium border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
                                        placeholder="Enter email" required />
                                </div>

                                <div class="mb-5 px-1">
                                    <label for="city" class="block mb-2.5 text-sm font-medium text-heading">City</label>
                                    <input name="city" type="text" id="city"
                                        class="rounded-lg bg-neutral-secondary-medium border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
                                        placeholder="Enter city" required />
                                </div>

                                <div class="mb-5 px-1">
                                    <label for="state" class="block mb-2.5 text-sm font-medium text-heading">State</label>
                                    <input name="state" type="text" id="state"
                                        class="rounded-lg bg-neutral-secondary-medium border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
                                        placeholder="Enter state" required />
                                </div>

                                <div class="mb-5 px-1">
                                    <label for="address" class="block mb-2.5 text-sm font-medium text-heading">Address</label>
                                    <input name="address" type="text" id="address"
                                        class="rounded-lg bg-white border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
                                        placeholder="Enter address" required />
                                </div>

                                <div class="mb-5 px-1">
                                    <label for="pincode" class="block mb-2.5 text-sm font-medium text-heading">Pincode</label>
                                    <input name="pin_code" type="text" maxlength="6"
                                        id="pincode"
                                        class="rounded-lg bg-neutral-secondary-medium border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
                                        placeholder="Enter pincode" required />
                                </div>

                            </div>
                        </div>

                        <hr class="border-white-300 mb-3">

                        <!-- Bank Details -->

                        <div>
                            <h5 class="text-xl font-bold text-heading p-1">Bank Details</h5>

                            <div class="grid grid-cols-1 md:grid-cols-2">

                                <div class="mb-5 px-1">
                                    <label for="bank_name" class="block mb-2.5 text-sm font-medium text-heading">Bank Name</label>
                                    <input name="bank_name" type="text" id="bank_name"
                                        class="rounded-lg bg-neutral-secondary-medium border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
                                        placeholder="Enter bank name" required />
                                </div>

                                <div class="mb-5 px-1">
                                    <label for="branch" class="block mb-2.5 text-sm font-medium text-heading">Branch</label>
                                    <input name="bank_branch" type="text" id="branch"
                                        class="rounded-lg bg-neutral-secondary-medium border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
                                        placeholder="Enter branch name" required />
                                </div>

                                <div class="mb-5 px-1">
                                    <label for="account_number" class="block mb-2.5 text-sm font-medium text-heading">Account Number</label>
                                    <input name="bank_account_no" type="text" id="account_number"
                                        class="rounded-lg bg-neutral-secondary-medium border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
                                        placeholder="Enter account number" pattern="[0-9]{0,18}" maxlength="18" required />
                                </div>

                                <div class="mb-5 px-1">
                                    <label for="ifsc_code" class="block mb-2.5 text-sm font-medium text-heading">IFSC Code <span>(Ex. ABCD0001234)</span></label>
                                    <input name="bank_ifsc_code" type="text" id="ifsc_code"
                                        class="rounded-lg bg-neutral-secondary-medium border border-default-medium text-heading text-sm block w-full px-3 py-2.5 shadow-xs"
                                        placeholder="Enter IFSC code" maxlength="11" required />
                                </div>

                            </div>
                        </div>

                        <hr class="border-white-300 mb-3">

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