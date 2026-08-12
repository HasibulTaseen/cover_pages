<?php

include "db.php";


/* ================= FORM DATA ================= */

$cover_type = $_POST['cover_type'] ?? '';
$template = $_POST['template'] ?? '';

$course_title = $_POST['course_title'] ?? '';
$course_code = $_POST['course_code'] ?? '';
$topic_name = $_POST['topic_name'] ?? '';

$assignment_no = $_POST['assignment_no'] ?? null;
$lab_no = $_POST['lab_no'] ?? null;
$experiment_name = $_POST['experiment_name'] ?? null;

$teacher_name = $_POST['teacher_name'] ?? '';
$teacher_designation = $_POST['teacher_designation'] ?? '';
$teacher_department = $_POST['teacher_department'] ?? '';
$teacher_university = $_POST['teacher_university'] ?? '';

$student_name = $_POST['student_name'] ?? '';
$student_id = $_POST['student_id'] ?? '';
$student_section = $_POST['student_section'] ?? '';
$student_department = $_POST['student_department'] ?? '';
$student_university = $_POST['student_university'] ?? '';

$submit_date = $_POST['submit_date'] ?? '';



/* ================= CHECK REQUIRED DATA ================= */

if (
    empty($cover_type) ||
    empty($template) ||
    empty($course_title) ||
    empty($course_code) ||
    empty($topic_name) ||
    empty($teacher_name) ||
    empty($teacher_designation) ||
    empty($teacher_department) ||
    empty($teacher_university) ||
    empty($student_name) ||
    empty($student_id) ||
    empty($student_section) ||
    empty($student_department) ||
    empty($student_university) ||
    empty($submit_date)
) {

    die("Please fill in all required fields.");

}



/* ================= CHECK LOGO ================= */

if (!isset($_FILES['university_logo'])) {

    die("University logo is required.");

}


$logo = $_FILES['university_logo'];


if ($logo['error'] !== UPLOAD_ERR_OK) {

    die("Logo upload failed.");

}



/* ================= CHECK FILE TYPE ================= */

$allowedTypes = [
    "image/jpeg",
    "image/jpg",
    "image/png"
];


if (!in_array($logo['type'], $allowedTypes)) {

    die("Only JPG and PNG files are allowed.");

}



/* ================= CHECK FILE SIZE ================= */

if ($logo['size'] > 2 * 1024 * 1024) {

    die("Logo must be less than 2MB.");

}



/* ================= CREATE UPLOAD DIRECTORY ================= */

$uploadDirectory = __DIR__ . "/uploads/";


if (!is_dir($uploadDirectory)) {

    if (!mkdir($uploadDirectory, 0777, true)) {

        die("Could not create uploads folder.");

    }

}



/* ================= CREATE FILE NAME ================= */

$extension = strtolower(
    pathinfo(
        $logo['name'],
        PATHINFO_EXTENSION
    )
);


$fileName =
    uniqid("logo_", true)
    . "."
    . $extension;


$fullUploadPath =
    $uploadDirectory
    . $fileName;



/* ================= UPLOAD LOGO ================= */

if (
    !move_uploaded_file(
        $logo['tmp_name'],
        $fullUploadPath
    )
) {

    die("Could not upload logo.");

}



/* ================= DATABASE LOGO PATH ================= */

$databaseLogoPath =
    "uploads/"
    . $fileName;



/* ================= INSERT QUERY ================= */

$sql = "INSERT INTO cover_pages
(
    cover_type,
    template,
    university_logo,

    course_title,
    course_code,
    topic_name,

    assignment_no,
    lab_no,
    experiment_name,

    teacher_name,
    teacher_designation,
    teacher_department,
    teacher_university,

    student_name,
    student_id,
    student_section,
    student_department,
    student_university,

    submit_date
)

VALUES
(
    ?, ?, ?,

    ?, ?, ?,

    ?, ?, ?,

    ?, ?, ?, ?,

    ?, ?, ?, ?, ?,

    ?
)";



/* ================= PREPARE ================= */

$stmt = $conn->prepare($sql);


if (!$stmt) {

    die(
        "Database error: "
        . $conn->error
    );

}



/* ================= BIND PARAMETERS ================= */

/*
    Total variables = 20

    1  cover_type
    2  template
    3  university_logo
    4  course_title
    5  course_code
    6  topic_name
    7  assignment_no
    8  lab_no
    9  experiment_name
    10 teacher_name
    11 teacher_designation
    12 teacher_department
    13 teacher_university
    14 student_name
    15 student_id
    16 student_section
    17 student_department
    18 student_university
    19 submit_date

    Actually there are 19 variables.
*/

$stmt->bind_param(
    "sssssssssssssssssss",

    $cover_type,
    $template,
    $databaseLogoPath,

    $course_title,
    $course_code,
    $topic_name,

    $assignment_no,
    $lab_no,
    $experiment_name,

    $teacher_name,
    $teacher_designation,
    $teacher_department,
    $teacher_university,

    $student_name,
    $student_id,
    $student_section,
    $student_department,
    $student_university,

    $submit_date
);



/* ================= EXECUTE ================= */

if ($stmt->execute()) {

    $id = $stmt->insert_id;

    $stmt->close();

    $conn->close();


    header(
        "Location: generate.php?id=" . $id
    );

    exit;

}


echo "Database error: " . $stmt->error;


$stmt->close();

$conn->close();

?>