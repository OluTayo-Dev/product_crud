<?php
   

     function get_assignments_by_course($course_id) {
        global $db;
        if ($course_id) {
            $query = 'SELECT A.ID, A.Description, C.courseName FROM assignments A LEFT JOIN 
            courses C ON A.courseId = C.courseId WHERE A.courseID = :course_id ORDER BY A.
             ID';
        } else {
            $query = 'SELECT A.ID, A.Description, C.courseName FROM assignments A LEFT JOIN 
            courses C ON A.courseId = C.courseId ORDER BY C.courseId';
        }
        $statement = $db->prepare($query);
        $statement->bindValue(':course_id', $course_id);
        $statement->execute();
        $assignments = $statement->fetchAll();
        $statement->closeCursor();
        return $assignments;

     }

     function delete_assignment($assignment_id) {
        $global $db;
        $query = 'DELETE FROM assignment WHERE ID = :assign_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':assign_id', $assignment_id);
        $statement->execute();
        $statement->closeCursor();
     }


     function add_assignment($course_id, $description) {
        $global $db;
        $query = 'INSERT INTO assignments (Description, courseId) VALUES (:descr, :courseId)';
        $statement = $db->prepare($query);
        $statement->bindValue(':descr', $description);
        $statement->bindValue(':courseId', $course_id);
        $statement->execute();
        $statement->closeCursor();
     }