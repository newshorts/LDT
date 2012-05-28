<?php

/*
 * Class for creating a video module.
 * 
 * The intention is save time in the long run by making a module that I only
 * need to update once.
 * 
 */

class VideoModule {
    private $head;
    private $videosArr;
    private $navlinks;
    private $intro;
    
    private $vLen;
    private $slide = '';
    
    public function __construct($h, $i, $v, $n = '') {
        $this->head = $h;
        $this->intro = $i;
        $this->videosArr = $v;
        $this->navlinks = $n;
        
        $this->vLen = count($this->videosArr);
        
        if($this->vLen > 5) {
            $this->slide = 'slide';
        }
        
    }
    
    private function generateHTML() {
        $str = '<li class="video-loading"></li>';
        
        for($i = 0; $i < $this->vLen; $i++) {
            if($i === 0) {
                $str .= '<li class="video-panel panel1 video-active"><div id="'.$this->videosArr[$i].'"></div></li>';
            } else {
                $str .= '<li class="video-panel panel'.strval($i+1).'"><div id="'.$this->videosArr[$i].'"></div></li>';
            }
        }
        
        return $str;
    }
    
    private function getTemplate() {
        
        $videoList = $this->generateHTML();
        
        $id = 'xyz-' . strval(rand(999, 99999));
        
        if($this->navlinks != '') {
            $tmpNavLinks = <<<NAV_LINKS
          
                    <nav class="video-nav es-carousel-wrapper $this->slide">
                        <div class="es-carousel">
                            $this->navlinks
                        </div>
                    </nav>
            
NAV_LINKS;
        }
        
        $output = <<<VIDEO_MODULE_OUTPUT

        <div id="$id" class="mod-wrapper video-module photo-gallery">
		<header class="row">
			$this->head
		</header>
		<div class="mod-inner row"> 	
                    $this->intro

                    <section class="video-container">
                
                        <ul>
                            $videoList
                        </ul>

                    </section>
                    
                    <section class="social">
                        <ul class="social-buttons row">
                            <li class="facebook"><a href="javascript:goFB();"><span>&emsp;&emsp;&emsp;</span></a></li>
                            <li class="twitter"><a href="javascript:goTW();"><span>&emsp;&emsp;&emsp;</span></a></li>
                            <li class="google"><g:plusone href="http://www.letsdothis.com/#videos" callBack="gClicked" annotation="none"></g:plusone></li>
                        </ul>
                    </section>
                    
                    $tmpNavLinks
                        
		</div>
	</div>
	<!-- /Video Gallery -->

VIDEO_MODULE_OUTPUT;
        
        return $output;
    }
    
    // getters
    public function getVideos() {
        return $this->getTemplate();
    }
}

?>
