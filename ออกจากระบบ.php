<?php
    session_start();
    
    if (session_destroy()) {
        header("Location: เข้าสู่ระบบ.php");
    }
    
    
