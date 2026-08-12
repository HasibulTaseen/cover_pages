<?php

include "db.php";


if (
    !isset($_GET['id'])
) {

    die("Invalid cover page.");

}


$id =
    intval($_GET['id']);


$sql =
    "SELECT *
     FROM cover_pages
     WHERE id = ?";


$stmt =
    $conn->prepare($sql);


$stmt->bind_param(
    "i",
    $id
);


$stmt->execute();


$result =
    $stmt->get_result();


if (
    $result->num_rows === 0
) {

    die("Cover page not found.");

}


$data =
    $result->fetch_assoc();



/* ================= TEMPLATE ================= */

$coverType =
    $data['cover_type'];

$template =
    $data['template'];



$allowedTypes = [

    "assignment",
    "lab",
    "final_lab"

];


$allowedTemplates = [

    "classic",
    "modern",
    "minimal"

];


if (
    !in_array(
        $coverType,
        $allowedTypes
    )
) {

    $coverType =
        "assignment";

}


if (
    !in_array(
        $template,
        $allowedTemplates
    )
) {

    $template =
        "classic";

}


$templateFile =
    "templates/"
    . $coverType
    . "/"
    . $template
    . ".php";


if (
    !file_exists($templateFile)
) {

    die("Template not found.");

}

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Generated Cover Page
    </title>


    <link
        rel="stylesheet"
        href="templates.css"
    >
<link rel="stylesheet" href="templates.css">

    <style>

        body {

            margin: 0;

            background: #e5e7eb;

            font-family: Arial, sans-serif;

        }


        .download-area {

            text-align: center;

            padding: 20px;

        }


        .download-button {

            background: #2563eb;

            color: white;

            border: none;

            padding: 14px 25px;

            border-radius: 7px;

            font-size: 16px;

            font-weight: bold;

            cursor: pointer;

        }


        @media print {

            body {

                background: white;

            }


            .download-area {

                display: none;

            }


            .cover-page {

                margin: 0;

            }

        }

    </style>

</head>


<body>


<div class="download-area">

    <button
        class="download-button"
        onclick="window.print()"
    >

        Download / Save as PDF

    </button>

</div>


<?php

include $templateFile;

?>


</body>

</html>