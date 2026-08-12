<?php

$logo = htmlspecialchars($data['university_logo']);

?>

<div
    class="cover-page"
    style="--watermark: url('<?= $logo ?>');"
>


    <!-- UNIVERSITY HEADER -->

    <div class="university-header">

        <img
            src="<?= $logo ?>"
            class="university-logo"
            alt="University Logo"
        >


        <h1 class="university-name">

            <?= htmlspecialchars(
                $data['student_university']
            ) ?>

        </h1>


        <p class="university-subtitle">

            Department of
            <?= htmlspecialchars(
                $data['student_department']
            ) ?>

        </p>

    </div>



    <!-- TITLE -->

    <div class="document-title">

        <div class="small-title">
            Academic Submission
        </div>


        <h2>
            ASSIGNMENT
        </h2>


        <div class="academic-line"></div>


        <div class="topic">

            <?= htmlspecialchars(
                $data['topic_name']
            ) ?>

        </div>

    </div>



    <!-- COURSE -->

    <div class="course-card">

        <div class="course-card-title">
            Course Information
        </div>


        <div class="course-name">

            <?= htmlspecialchars(
                $data['course_title']
            ) ?>

        </div>


        <div class="course-code">

            <?= htmlspecialchars(
                $data['course_code']
            ) ?>

            <?php if (!empty($data['assignment_no'])): ?>

                &nbsp; • &nbsp;

                <?= htmlspecialchars(
                    $data['assignment_no']
                ) ?>

            <?php endif; ?>

        </div>

    </div>



    <!-- SUBMITTED -->

    <div class="submitted-section">


        <!-- TO -->

        <div class="submitted-box">

            <h3>
                Submitted To
            </h3>


            <p>
                <strong>
                    <?= htmlspecialchars(
                        $data['teacher_name']
                    ) ?>
                </strong>
            </p>


            <p>
                <?= htmlspecialchars(
                    $data['teacher_designation']
                ) ?>
            </p>


            <p>
                <?= htmlspecialchars(
                    $data['teacher_department']
                ) ?>
            </p>


            <p>
                <?= htmlspecialchars(
                    $data['teacher_university']
                ) ?>
            </p>

        </div>



        <!-- BY -->

        <div class="submitted-box">

            <h3>
                Submitted By
            </h3>


            <p>
                <strong>
                    <?= htmlspecialchars(
                        $data['student_name']
                    ) ?>
                </strong>
            </p>


            <p>
                ID:
                <?= htmlspecialchars(
                    $data['student_id']
                ) ?>
            </p>


            <p>
                Section:
                <?= htmlspecialchars(
                    $data['student_section']
                ) ?>
            </p>


            <p>
                <?= htmlspecialchars(
                    $data['student_department']
                ) ?>
            </p>


            <p>
                <?= htmlspecialchars(
                    $data['student_university']
                ) ?>
            </p>

        </div>

    </div>



    <!-- DATE -->

    <div class="submit-date">

        <strong>
            Submission Date:
        </strong>

        <?= htmlspecialchars(
            $data['submit_date']
        ) ?>

    </div>



    <!-- FOOTER -->

    <div class="cover-footer">

        ACADEMIC COVER PAGE

    </div>

</div>