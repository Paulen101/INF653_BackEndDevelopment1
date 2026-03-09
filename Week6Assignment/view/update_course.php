<?php
include("view/header.php");
?>

<section class="course-container">
    <h2>Update Course</h2>

    <form action="." method="post" class="add_course_form">
        <input type="hidden" name="action" value="update_course">
        <input type="hidden" name="course_id" value="<?= htmlspecialchars($course['courseID']) ?>">
        
        <div class="add__inputs">
            <label>Course Name:</label>
            <input type="text" name="course_name" maxlength="30" 
                   value="<?= htmlspecialchars($course['courseName']) ?>" 
                   placeholder="Course Name" required autofocus>
        </div>
        
        <div class="add__addItem">
            <button class="add-button bold">Update Course</button>
        </div>
    </form>

    <p><a href=".?action=list_courses">Cancel</a></p>
</section>

<?php
include("view/footer.php");
?>
