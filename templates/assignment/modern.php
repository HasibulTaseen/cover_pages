<?php

$logo = htmlspecialchars(
    $data['university_logo']
);

?>

<div
    class="cover-page"
    style="--watermark: url('<?= $logo ?>');"
>

    <div class="cover-content">

        <!-- UNIVERSITY -->

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

            <div class="header-decoration">

                <div class="blue"></div>

                <div class="gold"></div>

                <div class="blue"></div>

            </div>

        </div>


        <!-- TITLE -->

        <div class="document-title">

            <p class="document-title-small">
                Academic Submission
            </p>

            <h2>
                ASSIGNMENT
            </h2>

            <div class="document-title-line"></div>

            <p class="document-topic">

                <?= htmlspecialchars(
                    $data['topic_name']
                ) ?>

            </p>

        </div>


        <!-- COURSE -->

        <div class="course-card">

            <div class="course-card-label">
                Course Information
            </div>

            <div class="course-title">

                <?= htmlspecialchars(
                    $data['course_title']
                ) ?>

            </div>

            <div class="course-code">

                Course Code:

                <?= htmlspecialchars(
                    $data['course_code']
                ) ?>

                <?php if (
                    !empty(
                        $data['assignment_no']
                    )
                ): ?>

                    &nbsp; • &nbsp;

                    <?= htmlspecialchars(
                        $data['assignment_no']
                    ) ?>

                <?php endif; ?>

            </div>

        </div>


        <!-- SUBMITTED TO / BY -->

        <div class="info-section">

            <div class="info-box">

                <h3 class="info-title">
                    Submitted To
                </h3>

                <p class="info-name">

                    <?= htmlspecialchars(
                        $data['teacher_name']
                    ) ?>

                </p>

                <p class="info-text">

                    <?= htmlspecialchars(
                        $data['teacher_designation']
                    ) ?>

                </p>

                <p class="info-text">

                    <strong>
                        Department:
                    </strong>

                    <?= htmlspecialchars(
                        $data['teacher_department']
                    ) ?>

                </p>

                <p class="info-text">

                    <?= htmlspecialchars(
                        $data['teacher_university']
                    ) ?>

                </p>

            </div>


            <div class="info-box">

                <h3 class="info-title">
                    Submitted By
                </h3>

                <p class="info-name">

                    <?= htmlspecialchars(
                        $data['student_name']
                    ) ?>

                </p>

                <p class="info-text">

                    <strong>
                        ID:
                    </strong>

                    <?= htmlspecialchars(
                        $data['student_id']
                    ) ?>

                </p>

                <p class="info-text">

                    <strong>
                        Section:
                    </strong>

                    <?= htmlspecialchars(
                        $data['student_section']
                    ) ?>

                </p>

                <p class="info-text">

                    <strong>
                        Department:
                    </strong>

                    <?= htmlspecialchars(
                        $data['student_department']
                    ) ?>

                </p>

                <p class="info-text">

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

    </div>


    <!-- FOOTER -->

    <div class="footer-blue"></div>

    <div class="cover-footer">

        ACADEMIC COVER PAGE

    </div>

</div>


<!-- DOWNLOAD -->

<div class="download-area">

    <button
        class="download-button"
        onclick="window.print()"
    >
        Download / Save as PDF
    </button>

</div>