<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Student Cover Page Generator
    </title>

    <link
        rel="stylesheet"
        href="style.css"
    >
    <link rel="stylesheet" href="templates.css">

</head>


<body>


<!-- ================= HEADER ================= -->

<header class="header">

    <h1>
        Student Cover Page Generator
    </h1>

    <p>
        Create professional academic cover pages
    </p>

</header>



<!-- ================= MAIN ================= -->

<main class="main-container">


<!-- ================= FORM ================= -->

<section class="form-container">

    <h2>
        Create Cover Page
    </h2>


    <form
        action="save.php"
        method="POST"
        enctype="multipart/form-data"
    >


        <!-- ================= COVER TYPE ================= -->

        <div class="form-section">

            <h3>
                1. Select Cover Page Type
            </h3>


            <label>
                Cover Page Type
            </label>


            <select
                name="cover_type"
                id="cover_type"
                required
            >

                <option value="">
                    Select Cover Page
                </option>

                <option value="assignment">
                    Assignment Cover Page
                </option>

                <option value="lab">
                    Lab Report Cover Page
                </option>

                <option value="final_lab">
                    Final Lab Report Cover Page
                </option>

            </select>

        </div>



        <!-- ================= TEMPLATE ================= -->

        <div class="form-section">

            <h3>
                2. Select Design
            </h3>


            <div class="template-container">


                <label class="template-card">

                    <input
                        type="radio"
                        name="template"
                        value="classic"
                        checked
                    >


                    <div class="template-preview">

                        <div class="mini-logo">
                        </div>

                        <strong>
                            UNIVERSITY
                        </strong>

                        <hr>

                        <div class="mini-box">
                        </div>

                        <div class="mini-box">
                        </div>

                    </div>


                    <span>
                        Classic
                    </span>

                </label>



                <label class="template-card">

                    <input
                        type="radio"
                        name="template"
                        value="modern"
                    >


                    <div class="template-preview modern-mini">

                        <div class="mini-logo">
                        </div>

                        <strong>
                            UNIVERSITY
                        </strong>

                        <hr>

                        <div class="mini-box">
                        </div>

                        <div class="mini-box">
                        </div>

                    </div>


                    <span>
                        Modern
                    </span>

                </label>



                <label class="template-card">

                    <input
                        type="radio"
                        name="template"
                        value="minimal"
                    >


                    <div class="template-preview minimal-mini">

                        <div class="mini-logo">
                        </div>

                        <strong>
                            UNIVERSITY
                        </strong>

                        <hr>

                        <div class="mini-box">
                        </div>

                        <div class="mini-box">
                        </div>

                    </div>


                    <span>
                        Minimal
                    </span>

                </label>


            </div>

        </div>



        <!-- ================= LOGO ================= -->

        <div class="form-section">

            <h3>
                3. University Logo
            </h3>


            <label>
                Upload University Logo
            </label>


            <input
                type="file"
                id="university_logo"
                name="university_logo"
                accept="image/png,image/jpeg,image/jpg"
                required
            >


            <p class="small-text">
                JPG or PNG, maximum 2MB
            </p>

        </div>



        <!-- ================= COURSE DETAILS ================= -->

        <div class="form-section">

            <h3>
                4. Course Details
            </h3>


            <label>
                Course Title
            </label>

            <input
                type="text"
                name="course_title"
                id="course_title"
                placeholder="Example: Database Management System"
                required
            >


            <label>
                Course Code
            </label>

            <input
                type="text"
                name="course_code"
                id="course_code"
                placeholder="Example: CSE 305"
                required
            >


            <label>
                Topic Name
            </label>

            <input
                type="text"
                name="topic_name"
                id="topic_name"
                placeholder="Enter topic name"
                required
            >


            <!-- ASSIGNMENT -->

            <div
                id="assignment-fields"
                class="conditional-field"
            >

                <label>
                    Assignment Number
                </label>

                <input
                    type="text"
                    name="assignment_no"
                    placeholder="Example: Assignment 01"
                >

            </div>



            <!-- LAB -->

            <div
                id="lab-fields"
                class="conditional-field"
            >

                <label>
                    Lab Number
                </label>

                <input
                    type="text"
                    name="lab_no"
                    placeholder="Example: Lab 03"
                >


                <label>
                    Experiment Name
                </label>

                <input
                    type="text"
                    name="experiment_name"
                    placeholder="Example: Normalization"
                >

            </div>

        </div>



        <!-- ================= SUBMITTED TO ================= -->

        <div class="form-section">

            <h3>
                5. Submitted To
            </h3>


            <label>
                Teacher's Name
            </label>

            <input
                type="text"
                name="teacher_name"
                id="teacher_name"
                placeholder="Teacher's name"
                required
            >


            <label>
                Designation
            </label>

            <input
                type="text"
                name="teacher_designation"
                id="teacher_designation"
                placeholder="Example: Assistant Professor"
                required
            >


            <label>
                Department
            </label>

            <input
                type="text"
                name="teacher_department"
                id="teacher_department"
                placeholder="Department"
                required
            >


            <label>
                University
            </label>

            <input
                type="text"
                name="teacher_university"
                id="teacher_university"
                placeholder="University"
                required
            >

        </div>



        <!-- ================= SUBMITTED BY ================= -->

        <div class="form-section">

            <h3>
                6. Submitted By
            </h3>


            <label>
                Student's Name
            </label>

            <input
                type="text"
                name="student_name"
                id="student_name"
                placeholder="Student's name"
                required
            >


            <label>
                Student ID
            </label>

            <input
                type="text"
                name="student_id"
                id="student_id"
                placeholder="Student ID"
                required
            >


            <label>
                Section
            </label>

            <input
                type="text"
                name="student_section"
                id="student_section"
                placeholder="Example: A"
                required
            >


            <label>
                Department
            </label>

            <input
                type="text"
                name="student_department"
                id="student_department"
                placeholder="Department"
                required
            >


            <label>
                University
            </label>

            <input
                type="text"
                name="student_university"
                id="student_university"
                placeholder="University"
                required
            >

        </div>



        <!-- ================= SUBMIT DETAILS ================= -->

        <div class="form-section">

            <h3>
                7. Submit Details
            </h3>


            <label>
                Submit Date
            </label>

            <input
                type="date"
                name="submit_date"
                id="submit_date"
                required
            >

        </div>



        <!-- ================= BUTTON ================= -->

        <button
            type="button"
            id="previewButton"
            class="preview-button"
        >
            Update Preview
        </button>


        <button
            type="submit"
            class="generate-button"
        >
            Generate Cover Page
        </button>


    </form>

</section>



<!-- ================= PREVIEW ================= -->

<section class="preview-container">

    <h2>
        Live Preview
    </h2>


    <div class="preview-wrapper">


        <div class="cover-page">


            <img
                id="previewLogo"
                class="preview-logo"
                src=""
                alt="University Logo"
            >


            <h1 id="previewUniversity">
                UNIVERSITY NAME
            </h1>


            <h2 id="previewCoverType">
                COVER PAGE
            </h2>


            <div class="preview-course">

                <h3>
                    Course Details
                </h3>


                <p>
                    <strong>
                        Course:
                    </strong>

                    <span id="previewCourseTitle">
                        Course Title
                    </span>
                </p>


                <p>
                    <strong>
                        Code:
                    </strong>

                    <span id="previewCourseCode">
                        Course Code
                    </span>
                </p>


                <p>
                    <strong>
                        Topic:
                    </strong>

                    <span id="previewTopic">
                        Topic Name
                    </span>
                </p>

            </div>



            <div class="preview-columns">


                <div>

                    <h3>
                        Submitted To
                    </h3>

                    <p id="previewTeacher">
                        Teacher's Name
                    </p>

                    <p id="previewDesignation">
                        Designation
                    </p>

                    <p id="previewTeacherDepartment">
                        Department
                    </p>

                    <p id="previewTeacherUniversity">
                        University
                    </p>

                </div>



                <div>

                    <h3>
                        Submitted By
                    </h3>

                    <p id="previewStudent">
                        Student's Name
                    </p>

                    <p id="previewStudentId">
                        Student ID
                    </p>

                    <p id="previewSection">
                        Section
                    </p>

                    <p id="previewStudentDepartment">
                        Department
                    </p>

                    <p id="previewStudentUniversity">
                        University
                    </p>

                </div>


            </div>


            <p class="preview-date">

                <strong>
                    Submit Date:
                </strong>

                <span id="previewDate">
                    Date
                </span>

            </p>


        </div>

    </div>



    <!-- LOGO BELOW FORM -->

    <div class="logo-display">

        <h3>
            Uploaded University Logo
        </h3>


        <img
            id="logoBelowForm"
            src=""
            alt="University Logo"
        >

    </div>


</section>


</main>


<script src="script.js"></script>

</body>

</html>