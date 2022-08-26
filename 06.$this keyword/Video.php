<?php

// Getters and Setters

class Video{
    //Properties
    public $type = "";

    public $duration = "";

    //Setter

    function setVideoInfo($video_type,$video_duration){
        $this->type = $video_type;
        $this->duration = $video_duration;
    }

    //Getter

    function getVideoInfo(){
        // echo "This is an" .$this->type . "Video and it's duration is " . $this->duration  . "Seconds.";
        return "This is an {$this->type} Video and it's duration is {$this->duration} seconds.";
    }

}

//Create Object
$myVideo = new Video();
$myVideo->setVideoInfo('MP4','456');
echo $myVideo->getVideoInfo();