<?php
class easysocialbar extends Plugin
{
    public function init()
    {
        $this->dbFields = array(
            'facebook-show' => '',
            'facebook-url' => '',
            'threads-show' => '',
            'threads-url' => '',
            'twitter-show' => '',
            'twitter-url' => '',
            'instagram-show' => '',
            'instagram-url' => '',
            'new-window' => ''

        );
    }
    public function siteBodyBegin()
    {

        echo '
        <style>
    .easysocialbar{
    position:fixed;
    top:200px;
    left:0;
    width:200px;
    height:auto;
    display:flex;
    flex-wrap:wrap;
    flex-direction:column;
    gap:5px;
    z-index:99;
    }
    
    .easysocialbar a{
    
    display:flex;
    align-items:center;
    justify-content:center;
    width:50px;
    height:50px;
    
    box-sizing:border-box;
    border-top-right-radius:5px;
    border-bottom-right-radius:5px;
    color:#fff;
    transition:all 250ms linear;
    }
    
    
    .easysocialbar a:hover{
    filter:brightness(95%);
    width:60px;
    
    }
     
    
    .easysocialbar a svg{
    all:unset;
    color:#fff !important;
    fill:#fff !important;
    width:30px !important;
    }
    
    
    .esb-facebook{
    background:#3b5998;
    }
    
    .esb-thread{
    background:black;
    }
    
    .esb-x{
    background:black;
    }
    
    .esb-instagram{
    background:#FD1D1D;
    }
    
    
        </style>
    
        ';

        echo '
        
        <div class="easysocialbar">
    
        ';

        if ($this->getValue('facebook-show') == 'show') {
            echo '
    <a href="' . $this->getValue('facebook-url') . '" class="esb-facebook" ' . ($this->getValue('new-window') == "yes" ? "target='_blank'" : '') . '>
    <svg   version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
         viewBox="0 0 310 310" xml:space="preserve">
    <g id="XMLID_834_">
        <path id="XMLID_835_" d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064
            c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996
            V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545
            C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703
            c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"/>
    </g>
    </svg></a>';
        }


        if ($this->getValue('instagram-show') == 'show') {
            echo '
    <a href="' . $this->getValue('instagram-url') . '" class="esb-instagram" ' . ($this->getValue('new-window') == "yes" ? "target='_blank'" : '') . '>
    <svg   version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
         viewBox="0 0 300 300" xml:space="preserve">
    <g id="XMLID_504_">
        <path id="XMLID_505_" d="M38.52,0.012h222.978C282.682,0.012,300,17.336,300,38.52v222.978c0,21.178-17.318,38.49-38.502,38.49
            H38.52c-21.184,0-38.52-17.313-38.52-38.49V38.52C0,17.336,17.336,0.012,38.52,0.012z M218.546,33.329
            c-7.438,0-13.505,6.091-13.505,13.525v32.314c0,7.437,6.067,13.514,13.505,13.514h33.903c7.426,0,13.506-6.077,13.506-13.514
            V46.854c0-7.434-6.08-13.525-13.506-13.525H218.546z M266.084,126.868h-26.396c2.503,8.175,3.86,16.796,3.86,25.759
            c0,49.882-41.766,90.34-93.266,90.34c-51.487,0-93.254-40.458-93.254-90.34c0-8.963,1.37-17.584,3.861-25.759H33.35v126.732
            c0,6.563,5.359,11.902,11.916,11.902h208.907c6.563,0,11.911-5.339,11.911-11.902V126.868z M150.283,90.978
            c-33.26,0-60.24,26.128-60.24,58.388c0,32.227,26.98,58.375,60.24,58.375c33.278,0,60.259-26.148,60.259-58.375
            C210.542,117.105,183.561,90.978,150.283,90.978z"/>
    </g>
    </svg></a>';

        }

        if ($this->getValue('threads-show') == 'show') {
            echo '
    <a href="' . $this->getValue('threads-url') . '" class="esb-thread" ' . ($this->getValue('new-window') == "yes" ? "target='_blank'" : '') . '>
    <svg aria-label="Threads" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg">
    <path class="x19hqcy" d="M141.537 88.9883C140.71 88.5919 139.87 88.2104 139.019 87.8451C137.537 60.5382 122.616 44.905 97.5619 44.745C97.4484 44.7443 97.3355 44.7443 97.222 44.7443C82.2364 44.7443 69.7731 51.1409 62.102 62.7807L75.881 72.2328C81.6116 63.5383 90.6052 61.6848 97.2286 61.6848C97.3051 61.6848 97.3819 61.6848 97.4576 61.6855C105.707 61.7381 111.932 64.1366 115.961 68.814C118.893 72.2193 120.854 76.925 121.825 82.8638C114.511 81.6207 106.601 81.2385 98.145 81.7233C74.3247 83.0954 59.0111 96.9879 60.0396 116.292C60.5615 126.084 65.4397 134.508 73.775 140.011C80.8224 144.663 89.899 146.938 99.3323 146.423C111.79 145.74 121.563 140.987 128.381 132.296C133.559 125.696 136.834 117.143 138.28 106.366C144.217 109.949 148.617 114.664 151.047 120.332C155.179 129.967 155.42 145.8 142.501 158.708C131.182 170.016 117.576 174.908 97.0135 175.059C74.2042 174.89 56.9538 167.575 45.7381 153.317C35.2355 139.966 29.8077 120.682 29.6052 96C29.8077 71.3178 35.2355 52.0336 45.7381 38.6827C56.9538 24.4249 74.2039 17.11 97.0132 16.9405C119.988 17.1113 137.539 24.4614 149.184 38.788C154.894 45.8136 159.199 54.6488 162.037 64.9503L178.184 60.6422C174.744 47.9622 169.331 37.0357 161.965 27.974C147.036 9.60668 125.202 0.195148 97.0695 0H96.9569C68.8816 0.19447 47.2921 9.6418 32.7883 28.0793C19.8819 44.4864 13.2244 67.3157 13.0007 95.9325L13 96L13.0007 96.0675C13.2244 124.684 19.8819 147.514 32.7883 163.921C47.2921 182.358 68.8816 191.806 96.9569 192H97.0695C122.03 191.827 139.624 185.292 154.118 170.811C173.081 151.866 172.51 128.119 166.26 113.541C161.776 103.087 153.227 94.5962 141.537 88.9883ZM98.4405 129.507C88.0005 130.095 77.1544 125.409 76.6196 115.372C76.2232 107.93 81.9158 99.626 99.0812 98.6368C101.047 98.5234 102.976 98.468 104.871 98.468C111.106 98.468 116.939 99.0737 122.242 100.233C120.264 124.935 108.662 128.946 98.4405 129.507Z"></path></svg>
    </a>';
        }

        if ($this->getValue('twitter-show') == 'show') {
            echo '
    <a href="' . $this->getValue('twitter-url') . '" class="esb-x" ' . ($this->getValue('new-window') == "yes" ? "target='_blank'" : '') . '>
    <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 462.799"><path fill-rule="nonzero" d="M403.229 0h78.506L310.219 196.04 512 462.799H354.002L230.261 301.007 88.669 462.799h-78.56l183.455-209.683L0 0h161.999l111.856 147.88L403.229 0zm-27.556 415.805h43.505L138.363 44.527h-46.68l283.99 371.278z"/></svg>
    </a>';
        }
        ;


        echo '</div>';


    }

    public function form()
    {
        $html = '<h4>Facebook</h4>

	<label>Turn on? </label>
     <select name="facebook-show" >
<option value="hide"' . ($this->getValue("facebook-show") == "hide" ? "selected" : '') . '>hide</option>
<option value="show"' . ($this->getValue("facebook-show") == "show" ? "selected" : '') . '>show</option>
    </select>
    
	<input type="text" value="' . $this->getValue('facebook-url') . '" name="facebook-url" style="width:100%;padding:10px;border:solid 1px #ddd;box-sizing:border-box;margin:10px 0;" placeholder="Put Url yours website on facebook">

<hr>

		<h4>Threads</h4>

	<label>Turn on? </label>

         <select name="threads-show" >
<option value="hide"' . ($this->getValue("threads-show") == "hide" ? "selected" : '') . '>hide</option>
<option value="show"' . ($this->getValue("threads-show") == "show" ? "selected" : '') . '>show</option>
    </select>

	<input type="text" value="' . $this->getValue('threads-url') . '" name="threads-url" style="width:100%;padding:10px;border:solid 1px #ddd;box-sizing:border-box;margin:10px 0;" placeholder="Put Url yours website on Threads">
 
	
<hr>

		<h4>X (previous Twitter)</h4>

	<label>Turn on?</label>
    
         <select name="twitter-show" >
<option value="hide"' . ($this->getValue("twitter-show") == "hide" ? "selected" : '') . '>hide</option>
<option value="show"' . ($this->getValue("twitter-show") == "show" ? "selected" : '') . '>show</option>
    </select>
	<input type="text" value="' . $this->getValue('twitter-url') . '"  name="twitter-url" style="width:100%;padding:10px;border:solid 1px #ddd;box-sizing:border-box;margin:10px 0;" placeholder="Put Url yours website on X">
 

<hr>
		<h4>Instagram</h4>

	<label>Turn on?</label>
          <select name="instagram-show" >
<option value="hide"' . ($this->getValue("instagram-show") == "hide" ? "selected" : '') . '>hide</option>
<option value="show"' . ($this->getValue("instagram-show") == "show" ? "selected" : '') . '>show</option>
    </select>
	<input type="text" value="' . $this->getValue('instagram-url') . '"  name="instagram-url" style="width:100%;padding:10px;border:solid 1px #ddd;box-sizing:border-box;margin:10px 0;" placeholder="Put Url yours website on Instagram">

    <hr>

    	<label>New Window?</label>

       <select name="new-window" class="mb-4">
        <option value="yes"' . ($this->getValue("new-window") == "yes" ? "selected" : '') . '>yes</option>
<option value="no"' . ($this->getValue("new-window") == "no" ? "selected" : '') . '>no</option>
</select>

    ';

        $html .= "<script type='text/javascript' src='https://storage.ko-fi.com/cdn/widget/Widget_2.js'></script><script type='text/javascript'>kofiwidget2.init('Support me on Ko-fi', '#df73f5', 'I3I2RHQZS');kofiwidget2.draw();</script>";
        return $html;

    }


}
?>