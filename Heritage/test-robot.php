<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once './Robot.php';
include_once './RoboMenager.php';

$robot1 = new Robot(1);
echo $robot1->saluer();

$robotMenager = new RobotMenager(2);
echo "<p>" .$robotMenager->saluer()."</p>";
echo "<p>" .$robotMenager->faireMenage()."</p>";