const coverType =
    document.getElementById("cover_type");


const logoInput =
    document.getElementById("university_logo");


const previewLogo =
    document.getElementById("previewLogo");


const logoBelowForm =
    document.getElementById("logoBelowForm");


const assignmentFields =
    document.getElementById("assignment-fields");


const labFields =
    document.getElementById("lab-fields");



/* ================= COVER TYPE ================= */

coverType.addEventListener(
    "change",
    function () {

        assignmentFields.style.display =
            "none";

        labFields.style.display =
            "none";


        if (this.value === "assignment") {

            assignmentFields.style.display =
                "block";

        }


        if (
            this.value === "lab" ||
            this.value === "final_lab"
        ) {

            labFields.style.display =
                "block";

        }


        document.getElementById(
            "previewCoverType"
        ).textContent =
            this.options[
                this.selectedIndex
            ].text;

    }
);



/* ================= LOGO ================= */

logoInput.addEventListener(
    "change",
    function () {

        const file = this.files[0];


        if (!file) {
            return;
        }


        if (
            !file.type.startsWith("image/")
        ) {

            alert(
                "Please select a valid image."
            );

            this.value = "";

            return;

        }


        const reader =
            new FileReader();


        reader.onload =
            function (event) {

                previewLogo.src =
                    event.target.result;

                previewLogo.style.display =
                    "block";


                logoBelowForm.src =
                    event.target.result;

                logoBelowForm.style.display =
                    "inline-block";

            };


        reader.readAsDataURL(file);

    }
);



/* ================= PREVIEW ================= */

document
    .getElementById("previewButton")
    .addEventListener(
        "click",
        updatePreview
    );


function updatePreview() {


    setText(
        "previewCourseTitle",
        "course_title",
        "Course Title"
    );


    setText(
        "previewCourseCode",
        "course_code",
        "Course Code"
    );


    setText(
        "previewTopic",
        "topic_name",
        "Topic Name"
    );


    setText(
        "previewTeacher",
        "teacher_name",
        "Teacher's Name"
    );


    setText(
        "previewDesignation",
        "teacher_designation",
        "Designation"
    );


    setText(
        "previewTeacherDepartment",
        "teacher_department",
        "Department"
    );


    setText(
        "previewTeacherUniversity",
        "teacher_university",
        "University"
    );


    setText(
        "previewStudent",
        "student_name",
        "Student's Name"
    );


    setText(
        "previewStudentId",
        "student_id",
        "Student ID"
    );


    setText(
        "previewSection",
        "student_section",
        "Section"
    );


    setText(
        "previewStudentDepartment",
        "student_department",
        "Department"
    );


    setText(
        "previewStudentUniversity",
        "student_university",
        "University"
    );


    setText(
        "previewDate",
        "submit_date",
        "Date"
    );


    setText(
        "previewUniversity",
        "student_university",
        "UNIVERSITY NAME"
    );

}



function setText(
    previewId,
    inputId,
    defaultValue
) {

    const input =
        document.getElementById(inputId);


    const preview =
        document.getElementById(previewId);


    if (
        input.value.trim() === ""
    ) {

        preview.textContent =
            defaultValue;

    }

    else {

        preview.textContent =
            input.value;

    }

}