<?php
require "admin/conn.php";

if(isset($_POST['submit']))
{
    $name  = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);

    // ✅ NAME VALIDATION
    if(!preg_match("/^[a-zA-Z ]+$/", $name)){
        echo "<script>alert('Name should contain only letters');</script>";
        exit;
    }

    // ✅ EMAIL VALIDATION
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<script>alert('Invalid email format');</script>";
        exit;
    }

    // ✅ PHONE VALIDATION (10 DIGITS ONLY)
    if(!preg_match("/^[0-9]{10}$/", $phone)){
        echo "<script>alert('Phone number must be 10 digits');</script>";
        exit;
    }

    // FILE UPLOAD
    $resumeName = $_FILES['resume']['name'];
    $resumeTmp  = $_FILES['resume']['tmp_name'];
    $resumeSize = $_FILES['resume']['size'];
    $resumeError = $_FILES['resume']['error'];

    // ✅ FILE TYPE VALIDATION (NO IMAGES)
    $allowedExt = ['pdf','doc','docx'];
    $fileExt = strtolower(pathinfo($resumeName, PATHINFO_EXTENSION));

    if(!in_array($fileExt, $allowedExt)){
        echo "<script>alert('Only PDF, DOC, DOCX files allowed!');</script>";
        exit;
    }

    // ✅ MIME TYPE CHECK (STRONG SECURITY)
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $mime = finfo_file($finfo, $resumeTmp);

    $allowedMime = [
        'application/pdf',
        'application/msword',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
    ];

    if(!in_array($mime, $allowedMime)){
        echo "<script>alert('Invalid file type!');</script>";
        exit;
    }

    // ✅ FILE SIZE LIMIT (2MB)
    if($resumeSize > 2*1024*1024){
        echo "<script>alert('File size must be less than 2MB');</script>";
        exit;
    }

    // ✅ CHECK UPLOAD ERROR
    if($resumeError !== 0){
        echo "<script>alert('File upload error');</script>";
        exit;
    }

    $folder = "uploads/";

    if(!is_dir($folder)){
        mkdir($folder, 0777, true);
    }

    $newFileName = time() . "_" . $resumeName;
    $filePath = $folder . $newFileName;

    if(move_uploaded_file($resumeTmp, $filePath))
    {
        $stmt = $conn->prepare("INSERT INTO applications (name,email,phone,resume,created_at) VALUES (:name,:email,:phone,:resume,NOW())");

        $stmt->execute([
            ':name'   => $name,
            ':email'  => $email,
            ':phone'  => $phone,
            ':resume' => $filePath
        ]);

        echo "<script>alert('Application Submitted Successfully');window.location.href='career-form.php';</script>";
    }
    else
    {
        echo "<script>alert('Failed to upload file');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Career-form</title>

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
</head>

<body class="bg-gradient-to-br from-blue-100 via-white to-blue-200 min-h-screen">

<?php include_once "header.php"; ?>

<section class="pb-20 m-10">
<div class="max-w-7xl mx-auto px-4 lg:px-8 flex justify-center">

<div class="bg-white shadow-2xl rounded-2xl p-8 w-full max-w-xl" data-aos="zoom-in">

<h3 class="text-2xl font-bold mb-6 text-center">Apply Now</h3>

<form action="" method="POST" enctype="multipart/form-data" class="space-y-5">

<input type="text" name="name" placeholder="Full Name" required
class="w-full border border-gray-300 p-3 rounded-lg">

<input type="email" name="email" placeholder="Email Address" required
class="w-full border border-gray-300 p-3 rounded-lg">

<input type="tel" name="phone" placeholder="Phone Number" required
class="w-full border border-gray-300 p-3 rounded-lg">

<label class="block mb-2 text-sm">Upload Resume</label>
<input type="file" name="resume" required class="w-full border p-2 rounded">

<button type="submit" name="submit"
class="w-full bg-blue-900 text-white py-3 rounded-lg font-semibold">
Apply Now
</button>

</form>

</div>
</div>
</section>

<?php include_once "footer.php"; ?>

<script>
AOS.init({
duration:1000,
once:true
});
</script>

</body>
</html>