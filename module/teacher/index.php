<?php
$submodul = (isset($_GET['s']))?$_GET['s']:'view';
switch ($submodul) {
    case 'view';
    default:
        include ('module/teacher/view.php');
        break;

    case 'add';
        include('modul/teacher/add.php');
        break;
        
    case 'save';
        include('module/teacher/save.php');
        break;

        case 'edit';
        include('modul/teacher/edit.php');
        break;
        
    case 'update';
        include('module/teacher/update.php');
        break;

        case 'delete';
        include('module/teacher/delete.php');
        break; }